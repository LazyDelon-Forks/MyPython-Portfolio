<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $host = 'localhost';   
        $username ='root';            
        $password = '0211';      
        $dbname = 'customer';      

        // 建立連接
        $conn = new mysqli($host, $username, $password, $dbname);

        if ($conn -> connect_error) {
            die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
        }

        $name = $_POST['name'];
        $position = $_POST['position'];
        $office = $_POST['office'];
        $age = $_POST['age'];
        $start_date  = $_POST['start_date'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO account (`name`, `position`, `office`, `age`, `start_date`, `salary`) VALUES ('$name', '$position', '$office', '$age', '$start_date', '$salary')";

        // 執行 SQL 查詢
        if ($conn->query($sql) === TRUE) {
            echo "新紀錄插入成功";
        } else {
            echo "插入記錄時出錯：" . $conn->error;
        }

        $conn->close();
    }
?>
