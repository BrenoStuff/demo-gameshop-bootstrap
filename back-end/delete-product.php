<?php

require('helpers\db-connect.php');

$id = $_GET['id'];


if(!isset($_GET['id'])){

    die;

} else {

    try{
        $stmt = $conn->prepare("DELETE FROM produtos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount()){
            $result['success']['message'] = 'Produto deletado com sucesso!';
            echo json_encode($result);   
        } else{
            $result['success']['message'] = 'ID do produto não encontrado.';
            echo json_encode($result);
        }
    } catch(PDOException $e) {
        echo "Error deleting product: " . $e->getMessage();
    }

}

?>