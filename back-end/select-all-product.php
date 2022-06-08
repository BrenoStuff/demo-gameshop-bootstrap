<?php
    require('helpers\db-connect.php');

    try{

        $stmt = $conn->prepare("SELECT * FROM produtos");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        echo json_encode($result);

    } catch(PDOException $e) {

        $result('error')['message'] = "Error in searching product on DataBase: " . $e->getMessage();
        http_response_code(500);
        echo json_encode($result);

    }
?>