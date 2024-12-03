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
        $query = "SELECT priority, imageUrl FROM productimageusage PI, product P WHERE PI.productId = P.productId AND P.productId = ? ORDER BY priority ASC";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductInformation($productId) {
        $query = "SELECT `name`, p.productId, P.description, price, releaseDate, productStatus, specSheet, P.video, discountId FROM product P, category C WHERE P.categoryName = C.categoryName ANd P.productId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    /*********************************
     * PRODUCT CONFIGURATION QUERIES *
     *********************************/

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

    // Returns the configurable options of a custom product configured.
    public function getCustomProductConfigurableOptions($customProductId) {
        $query = "SELECT co.isDefault, co.details, co.price, configurable.name
                    FROM customproduct cp, configuration c, configurableoption co, configurable
                    WHERE cp.customProductId=c.customProductId AND c.configurableOptionId=co.configurableOptionId  AND co.configurableId=configurable.configurableId
                    AND cp.customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $customProductId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*************************
     * NOTIFICATIONS QUERIES *
     *************************/

    // Returns all the notifications related to a user.
    public function getUserNotifications($email) {
        $query = "SELECT notificationId, subject, description, date, isRead, email FROM notification WHERE email = ? ORDER BY date DESC";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email); // bind $email as a string
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
    public function setAllUserNotificationsAsRead($email) {
        $query = "UPDATE notification SET isRead=1 WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
    }

    // Removes a notification identified by its id.
    public function deleteNotification($notificationId) {
        $query = "DELETE FROM notification WHERE notificationId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $notificationId);
        $stmt->execute();
    }

    // Removes all notifications related to a email.
    public function deleteAllUserNotification($email) {
        $query = "DELETE FROM notification WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
    }

    // Inserts a notification
    public function insertNotification($subject, $description, $email) {
        $query = "INSERT INTO notification (subject, description, date, email) VALUES (?, ?, NOW(), ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sss", $subject, $description, $email);
        $stmt->execute();
    }

    /******************************
     * REGISTER AND LOGIN QUERIES *
     ******************************/

    public function customerExists($email) {
        $query = "SELECT email FROM Customer WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->num_rows != 0;
    }

    // Registers a customer and hashes his password before storing it.
    public function registerCustomer($firstname, $lastName, $email, $password) {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO Customer (firstName, lastName, email, joinDate, password, balance) VALUES (?, ?, ?, NOW(), ?, 0.00)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssss", $firstname, $lastName, $email, $hashedpassword);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Rows affected: " . $stmt->affected_rows;
        } else {
            echo "No rows were inserted.";
        }
    }

    public function getCustomerPasswordByEmail($email) {
        $query = "SELECT password FROM customer WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($storedHashedPassword);

        if ($stmt->fetch()) {
            return $storedHashedPassword;
        } else {
            return null; // No user found
        }
    }

    /***********
     * ACCOUNT *
     ***********/

    public function getCustomerDetails($email) {
        $query = "SELECT firstName, lastName, email, joinDate, balance FROM customer WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTotalCustomerOrders($email) {
        $query = "SELECT COUNT(orderId) AS totalCustomerOrders FROM `order` WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_row()[0];
    }

    /**************************
     * CART AND ORDER QUERIES *
     **************************/

    // Return the products in the customer's shopping cart.
    public function getCartProductsOfCustomer($email) {
        $query = "SELECT name, amount, finalPrice, product.productId, customProduct.customProductId FROM cartproduct, customproduct, product, customer WHERE cartproduct.customProductId = customproduct.customProductId AND customproduct.productId = product.productId AND customer.email = cartproduct.email AND customer.email = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrder($orderId) {
        $stmt = $this->db->prepare("SELECT * FROM `order` WHERE orderId = ?");
        $stmt->bind_param("i", $orderId); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function getOrderProducts($orderId) {
        $query = "SELECT cp.finalPrice, op.amount, cp.productId, cp.customProductId
                FROM `order` o, orderproduct op, customproduct cp
                WHERE o.orderId=op.orderId AND cp.customProductId=op.customProductId AND o.orderId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $orderId); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdersOfCustomer($email) {
        $query = "SELECT o.orderId, o.orderStatus, o.orderDate, o.deliveryDate
                FROM `Order` o, customer c
                WHERE o.email = c.email
                AND c.email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Update the quantity of product in the customer's shopping cart.
    public function updateQtaOfProductCart($customProductId, $email, $n) {
        $query = "UPDATE CartProduct SET amount = ? WHERE customProductId = ? AND email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iis", $n, $customProductId, $email);
        $result = $stmt->execute();
    }
    
    public function addProductToCart($customProductId, $email, $amount) {
        $query = "INSERT INTO CartProduct (customProductId, email, amount) 
                  VALUES (?, ?, ?) 
                  ON DUPLICATE KEY UPDATE amount = amount + ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("isi", $customProductId, $email, $amount);
        $result = $stmt->execute();
    }

    public function removeProductFromCart($customProductId, $email) {
        $query = "DELETE FROM CartProduct WHERE customProductId = ? AND email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("is", $customProductId, $email);
        $result = $stmt->execute();
    }

    /**
     * Create an order.
     * Return orderId created.
     */
    public function addOrder($email) {
        $query = "INSERT INTO `order` (orderStatus, orderDate, deliveryDate, email)
                    VALUES ('Ordered', NOW(), NULL, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $orderId = $this->db->insert_id;
        return $orderId;
    }

    public function addOrderProduct($customProductId, $orderId, $amount) {
        $query = "INSERT INTO orderProduct (customProductId, amount, orderId) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iii", $customProductId, $orderId, $amount);
        $stmt->execute();
    }

    /**
     * Remove all the products from the cart.
     * Return all the products of the cart.
     */
    public function switchProductsFromCartToOrder($email) {
        $query = "SELECT customProductId, amount FROM cartProduct cp, customer c WHERE cp.email = c.email AND c.email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();

        $query = "DELETE FROM cartProduct WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>