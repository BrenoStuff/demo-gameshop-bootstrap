<?php

// Pegar informações do produto vindo do forms cadastrar produto
// IMPORTANTE o valor entre colchetes $_POST['teste'] é o name="teste"
// Se method="POST", não pode ser $_GET['']
$nome = $_POST['nome'];
$desenvolvedora = $_POST['desenvolvedora'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

// DATABASE LINK ------------------------------------------------------------
// cria a conexao com banco de dados ($conn)
require('helpers\db-connect.php');

// INSERT DATABASE ----------------------------------------------------------
try{
  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO games (nome, desenvolvedora, foto, descricao, preco)
  VALUES (:nome, :desenvolvedora, :foto, :descricao, :preco)");
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':desenvolvedora', $desenvolvedora);
  $stmt->bindParam(':foto', $foto);
  $stmt->bindParam(':descricao', $descricao);
  $stmt->bindParam(':preco', $preco);
  $stmt->execute();
  echo "Jogo adicionado com sucesso!.";
} catch(PDOException $e) {
    echo "Houve algum erro para adicionar o jogo: " . $e->getMessage();
}

echo '<br> <a href="../">Home</a>';

?>