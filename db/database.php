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

    // Returns the category details.
    public function getCategoryDetails($category) {
        $query = "SELECT categoryName, description, icon FROM category WHERE categoryName = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
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
    public function getProductImages($productId, $limit = 3) {
        $query = "SELECT priority, imageUrl FROM productimageusage PI, product P WHERE PI.productId = P.productId AND P.productId = ? ORDER BY priority ASC LIMIT ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $productId, $limit); // bind $productId as a integer
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

    // Returns up to three random upcoming products with an image.
    public function getThreeUpcomingProducts() {
        $query = "SELECT P.productId, P.name, P.shortDescription, P.price, PI.imageUrl
            FROM product P, productImage PI, productImageUsage PIM
            WHERE P.productStatus = 'Upcoming'
            AND P.productId = PIM.productId
            AND PI.imageUrl = PIM.imageUrl
            AND PIM.priority = 1
            ORDER BY RAND()
            LIMIT 3";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*********************************
     * PRODUCT CONFIGURATION QUERIES *
     *********************************/

    // Returns the configurables of a product
    public function getProductConfigurables($productId) {
        $query = "SELECT configurableId, C.name, icon, C.productId FROM configurable C, product P WHERE C.productId = P.productId AND C.productId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Returns the configurable options of a configurable of a product
    public function getConfigurableOptions($configurableId) {
        $query = "SELECT configurableOptionId, isDefault, details, price, CO.configurableId FROM configurableoption CO, configurable C WHERE CO.configurableId = C.configurableId AND CO.configurableId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $configurableId); // bind $configurableId as a integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Returns the selected options of a configured product.
    public function getCustomProductConfiguredOptions($customProductId) {
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

    public function getConfigurableOption($configurableOptionId) {
        $query = "SELECT * FROM configurableoption WHERE configurableOptionId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $configurableOptionId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    /**
     * Return custom product ID created.
     */
    public function configureCustomProduct($productId) {
        $price = $this->getProductInformation($productId)["price"];
        $query = "INSERT INTO customProduct (configuredPrice, finalPrice, productId) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iii", $price, $price, $productId);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getCustomProduct($customProductId) {
        $query = "SELECT * FROM customproduct cp WHERE cp.customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $customProductId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function configureOptionToCustomProduct($customProductId, $configurableOptionId) {
        $query = "INSERT INTO configuration (customProductId, configurableOptionId) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $customProductId, $configurableOptionId);
        $stmt->execute();

        $configurableOptionPrice = $this->getConfigurableOption($configurableOptionId)["price"];
        $newConfigPrice = $this->getCustomProduct($customProductId)["configuredPrice"] + $configurableOptionPrice;
        $this->updateConfiguredPrice($customProductId, $newConfigPrice);
    }

    private function updateConfiguredPrice($customProductId, $newConfigPrice) {
        $query = "UPDATE CustomProduct SET configuredPrice = ?, finalPrice = configuredPrice WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $newConfigPrice, $customProductId);
        $stmt->execute();
    }

    public function updateFinalPrice($customProductId, $newFinalPrice) {
        $query = "UPDATE CustomProduct SET finalPrice = ? WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $newFinalPrice, $customProductId);
        $stmt->execute();
    }
    
    public function getProductDiscount($productId) {
        $query = "SELECT d.discountId, d.name, d.amount FROM discount d, product p WHERE d.discountId = p.discountId AND p.productId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function removeConfiguration($customProductId) {
        $query = "DELETE FROM `configuration` WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $customProductId);
        $stmt->execute();
    }

    /**
     * Before use this function, be sure that all associations with custom product are removed.
     * cart-product and configuration can be removed.
     * orderProduct cannot be removed.
    */
    public function removeCustomProduct($customProductId) {
        $query = "DELETE FROM customProduct WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $customProductId);
        return $stmt->execute();
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
    public function registerCustomer($firstname, $lastName, $email, $hashedPassword) {
        $query = "INSERT INTO Customer (firstName, lastName, email, joinDate, password) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssss", $firstname, $lastName, $email, $hashedPassword);
        $stmt->execute();
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
        $query = "SELECT firstName, lastName, email, joinDate FROM customer WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function changeCustomerDetails($email, $firstName, $lastName) {
        $query = "UPDATE customer SET firstName = ?, lastName = ? WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sss", $firstName, $lastName, $email);
        return $stmt->execute();
    }

    public function changeCustomerPassword($email, $hashedPassword) {
        $query = "UPDATE customer SET password = ? WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $hashedPassword, $email);
        return $stmt->execute();
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
        $query = "SELECT name, amount, finalPrice, configuredPrice, product.productId, customProduct.customProductId FROM cartproduct, customproduct, product, customer WHERE cartproduct.customProductId = customproduct.customProductId AND customproduct.productId = product.productId AND customer.email = cartproduct.email AND customer.email = ?";
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
                WHERE o.orderId = op.orderId AND cp.customProductId = op.customProductId AND o.orderId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $orderId); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCustomerOrders($email) {
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
    public function updateCartProductQuantity($customProductId, $n) {
        $query = "UPDATE CartProduct SET amount = ? WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $n, $customProductId);
        return $result = $stmt->execute();
    }
    
    public function addProductToCart($customProductId, $email) {
        $query = "INSERT INTO CartProduct (customProductId, email, amount) 
                  VALUES (?, ?, 1)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("is", $customProductId, $email);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function removeProductFromCart($customProductId) {
        $query = "DELETE FROM CartProduct WHERE customProductId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $customProductId);
        $result = $stmt->execute();
        return $result;
    }

    /**
     * Create an order and returns the id used.
     */
    public function addOrder($email) {
        $query = "INSERT INTO `order` (orderStatus, orderDate, deliveryDate, email)
                    VALUES ('Ordered', NOW(), NULL, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function addOrderProduct($customProductId, $orderId, $amount) {
        $query = "INSERT INTO orderProduct (customProductId, amount, orderId) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iii", $customProductId, $orderId, $amount);
        $stmt->execute();
        return $stmt->insert_id;
    }

    /**
     * Remove all the products from the cart and returns them.
     */
    public function popCartProducts($email) {
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