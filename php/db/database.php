<?php

class DatabaseHelper {
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port) {
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Failed to connect to the database");
        }
    }

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

    // Returns all the notifications related to a user
    public function getUserNotifications($username) {
        $query = "SELECT notificationId, subject, description, date, isRead, username FROM notification WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $configurableId); // bind $username as a string
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>