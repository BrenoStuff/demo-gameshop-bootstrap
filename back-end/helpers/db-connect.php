<?php

// DATABASE LINK ------------------------------------------------------------
// Definir os dados de conexão no banco mysql
// Lembrar de ligar o mysql no xxamp

$servername = "localhost"; //host onde myql está rodando
$database = "games_website"; //nome database
$username = "root"; //usuario de conexão mysql
$password = ""; //senha do usuario de conexão mysql

try { //try vai tentar executador todo o bloco de codigo, se der erro vai rodar o catch

    // criar um objeto (variavel) de conexao com o banco
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // pega os valores para exibir os erros no catch
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "PDO Connected successfully. <br>";

} catch(PDOException $e) { // se der erro, ele cria um objeto de erro do PDO
    echo "PDO Connection failed: <br>" . $e->getMessage();
}

?>