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
            echo "Deleted game successfully.";
        } else{
            echo "Game not found.";
        }
    } catch(PDOException $e) {
        echo "Error deleting game: " . $e->getMessage();
    }

}

header("location:../games.php"); 


?>