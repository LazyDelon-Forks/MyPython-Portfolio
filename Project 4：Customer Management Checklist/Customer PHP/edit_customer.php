<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        $host = 'localhost';   
        $username ='root';            
        $password = '0211';      
        $dbname = 'customer';      

        $conn = new mysqli($host, $username, $password, $dbname);

        if ($conn -> connect_error) {
            die('資料庫連線錯誤:' . $conn->connect_error);   
        }

        $customerId = $_GET['id'];

        $sql = "SELECT * FROM account WHERE id = $customerId";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            echo json_encode($row);
        } 
        
        else {
            echo json_encode(new stdClass());
        }

        $conn->close();
    }
?>
