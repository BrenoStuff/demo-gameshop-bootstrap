<?php

$id = $_POST['id'];
$photo = $_POST['photo'];
$title = $_POST['title'];
$price = $_POST['price'];

require('helpers\db-connect.php');

try{
$stmt = $conn->prepare("UPDATE produtos SET photo = :photo, title = :title, price = :price WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':photo', $photo);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':price', $price);
$stmt->execute();

if($stmt->rowCount()){
    $result['success']['message'] = 'Produto editado com sucesso!';
    echo json_encode($result);   
} else{
    $result['success']['message'] = 'ID do produto não encontrado.';
    echo json_encode($result);
}

} catch(PDOException $e) {
    echo "Edit of the product failed: " . $e->getMessage();
}

?>