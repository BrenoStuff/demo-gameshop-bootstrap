<?php

require('helpers\db-connect.php');

$id = $_GET['id'];


if(!isset($_GET['id'])){

    die;

} else {

    try{
        $stmt = $conn->prepare("DELETE FROM games WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount()){
            echo "Deleted product successfully.";
        } else{
            echo "Product not found.";
        }
    } catch(PDOException $e) {
        echo "Error deleting product: " . $e->getMessage();
    }

}

echo '<br> <a href="../">Home</a>';

?>