<?php

$servername = "localhost"; //host onde myql está rodando
$database = "games_website"; //nome database
$username = "root"; //usuario de conexão mysql
$password = ""; //senha do usuario de conexão mysql

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3> Conexão PDO com sucesso";

} catch(PDOException $e) { 
    echo "<h3> A conexão PDO falhou: </h3><br>" . $e->getMessage();
}

?>