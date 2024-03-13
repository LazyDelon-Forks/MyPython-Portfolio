<?php

    $host = 'localhost';   
    $username ='root';            
    $password = '0211';      
    $dbname = 'customer';      

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn -> connect_error) {
        die('資料庫連線錯誤:' . $conn->connect_error);    
    }

    $sql = "SELECT * FROM account";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $output = array();

        while($row = $result->fetch_assoc()) {
            $output[] = $row;
        }
        echo json_encode($output);
    } 

    $conn->close();
    
?>