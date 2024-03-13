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

        $sql = "DELETE FROM account WHERE id = $customerId";
        
        $result = $conn->query($sql);
        
        $conn->close();
    }
?>
