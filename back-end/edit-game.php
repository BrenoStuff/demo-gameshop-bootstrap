<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$desenvolvedora = $_POST['desenvolvedora'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

require('helpers\db-connect.php');

try{
$stmt = $conn->prepare("UPDATE games SET nome = :nome, desenvolvedora = :desenvolvedora, foto = :foto, descricao = :descricao, preco = :preco WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':desenvolvedora', $desenvolvedora);
$stmt->bindParam(':foto', $foto);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':preco', $preco);
$stmt->execute();
echo "Propriedades do Jogo editado com sucesso.";
} catch(PDOException $e) {
    echo "Houve um erro ao editar o produto selecionado: " . $e->getMessage();
}

echo '<br> <a href="../">Home</a>';

?>