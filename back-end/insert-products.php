<?php

// Pegar informações do produto vindo do forms cadastrar produto
// IMPORTANTE o valor entre colchetes $_POST['teste'] é o name="teste"
// Se method="POST", não pode ser $_GET['']
$photo = $_POST['photo'];
$title = $_POST['title'];
$price = $_POST['price'];

// DATABASE LINK ------------------------------------------------------------
// cria a conexao com banco de dados ($conn)
require('helpers\db-connect.php');

// INSERT DATABASE ----------------------------------------------------------
try{
  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO jogos (photo, title, price)
  VALUES (:photo, :title, :price)");
  $stmt->bindParam(':photo', $photo);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':price', $price);
  $stmt->execute();

  $result['success']['message'] = 'Produto cadastrado com Sucesso!';
  echo json_encode($result);

} catch(PDOException $e) {
    echo "Insert of the product failed: " . $e->getMessage();
}
?>