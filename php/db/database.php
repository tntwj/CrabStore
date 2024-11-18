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
}
    public function getCartProductsOfCustomer($username) {
        $query = "SELECT name, amount, finalPrice FROM cartproduct, customproduct, product, customer WHERE cartproduct.customProductId = customproduct.customProductId AND customproduct.productId = product.productId AND customer.username = cartproduct.username AND customer.username = ? GROUP BY customer.username;"
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $username); // bind $productId as a integer
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

?>