<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $host = 'localhost';   
        $username ='root';            
        $password = '0211';      
        $dbname = 'customer';      

        // 建立連接
        $conn = new mysqli($host, $username, $password, $dbname);

        if ($conn -> connect_error) {
            die('資料庫連線錯誤:' . $conn->connect_error);  
        }

        $customerId = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $office = $_POST['office'];
        $age = $_POST['age'];
        $start_date  = $_POST['start_date'];
        $salary = $_POST['salary'];

        $sql = "UPDATE account SET name = '$name', position = '$position', office = '$office', age = '$age', start_date = '$start_date', salary = '$salary' WHERE id = $customerId";

        if ($conn->query($sql) === TRUE) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . $conn->error;
        }
        
        $conn->close();
    }
?>
