<?php

class DatabaseHelper {
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port) {
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Failed to connect to the database");
        }
    }

    /*******************
     * PRODUCT QUERIES *
     *******************/

    // Returns all the categories.
    public function getCategories() {
        $query = "SELECT categoryName, shortDescription, description, icon, mainImage, secondaryImage, video FROM category";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Returns products of a set category.
    public function getProductsOfCategory($category) {
        $query = "SELECT productId, name, P.shortDescription, P.description, price, releaseDate, productStatus, specSheet, P.video, P.categoryName, discountId FROM product P, category C WHERE P.categoryName = C.categoryName ANd P.categoryName = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $category); // bind "$category" as a string
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Returns the images related to a product in order of priority
    public function getProductImages($productId) {
        $query = "SELECT priority, imageUrl, PI.productId FROM productimage PI, product P WHERE PI.productId = P.productId AND P.productId = ? ORDER BY priority ASC";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /********************************
     * PRODUCT CONFIGURATION QUERIES*
     ********************************/

    // Returns the configurables of a product
    public function getProductConfigurables($productid) {
        $query = "SELECT configurableId, C.name, icon, C.productId FROM configurable C, product P WHERE C.productId = P.productId AND C.productId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Returns the configurable options of a configurable of a product
    public function getProductConfigurableOptions($configurableId) {
        $query = "SELECT configurableOptionid, isDefault, details, price, CO.configurableId FROM configurableoption CO, configurable C WHERE CO.configurableId = C.configurableId AND CO.configurableId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $configurableId); // bind $configurableId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /************************
     * NOTIFICATIONS QUERIES*
     ************************/

    // Returns all the notifications related to a user.
    public function getUserNotifications($username) {
        $query = "SELECT notificationId, subject, description, date, isRead, username FROM notification WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $configurableId); // bind $username as a string
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Sets a notification as read.
    public function setNotificationAsRead($notificationId) {
        $query = "UPDATE notification SET isRead=1 WHERE notificationId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $notificationId);
        $stmt->execute();
        // More checks could be added
    }

    // Sets all notifications related to an user as read.
    public function setAllUserNotificationsAsRead($username) {
        $query = "UPDATE notification SET isRead=1 WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
    }

    // Removes a notification identified by its id.
    public function deleteNotification($notificationId) {
        $query = "DELETE FROM notification WHERE notificationId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $notificationId);
        $stmt->execute();
    }

    // Removes all notifications related to a username.
    public function deleteAllUserNotification($username) {
        $query = "DELETE FROM notification WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
    }

    // Inserts a notification
    public function insertNotification($subject, $description, $username) {
        $query = "INSERT INTO notification (subject, description, date, username) VALUES (?, ?, NOW(), ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sss", $subject, $description, $username);
        $stmt->execute();
    }

    /******************************
     * REGISTER AND LOGIN QUERIES *
     ******************************/

    // Registers a customer and hashes his password before storing it.
    public function registerCustomer($username, $firstname, $lastName, $email, $password) {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO Customer (username, firstName, lastName, email, joinDate, password) VALUES (?, ?, ?, ?, NOW(), ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssss", $username, $firstname, $lastName, $email, $hashedpassword);
        $stmt->execute();
    }

    // Returns true if authentication was succesfull.
    public function authenticateCustomer($username, $password) {
        $query = "SELECT password FROM customer WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($storedHashedPassword);
        $stmt->fetch();

        if ($stmt->num_rows > 0 && password_verify($password, $storedHashedPassword)) {
            return true;
        } else {
            return false;
        }
    }

    /**************************
     * CART AND ORDER QUERIES *
     **************************/

    // Return the products in the customer's shopping cart.
    public function getCartProductsOfCustomer($username) {
        $query = "SELECT name, amount, finalPrice, product.productId FROM cartproduct, customproduct, product, customer WHERE cartproduct.customProductId = customproduct.customProductId AND customproduct.productId = product.productId AND customer.username = cartproduct.username AND customer.username = ? GROUP BY customer.username";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Update the quantity of product in the customer's shopping cart.
    public function updateQtaOfProductCart($customProductId, $username, $n) {
        $query = "UPDATE CartProduct SET amount = ? WHERE customProductId = ? AND username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iis", $n, $customProductId, $username);
        $result = $stmt->execute();
    }
    
    public function addProductToCart($customProductId, $username, $amount) {
        $query = "INSERT INTO CartProduct (customProductId, username, amount) 
                  VALUES (?, ?, ?) 
                  ON DUPLICATE KEY UPDATE amount = amount + ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("isi", $customProductId, $username, $amount);
        $result = $stmt->execute();
    }

    public function removeProductFromCart($customProductId, $username) {
        $query = "DELETE FROM CartProduct WHERE customProductId = ? AND username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("is", $customProductId, $username);
        $result = $stmt->execute();
    }

    
}
?>