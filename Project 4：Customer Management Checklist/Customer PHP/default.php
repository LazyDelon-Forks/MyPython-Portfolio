<?php
    
    $json_data = file_get_contents('data.json');
    $data = json_decode($json_data, true);
    
    $host = 'localhost';   
    $username ='root';            
    $password = '0211';      
    $dbname = 'customer';      

    // 建立連接
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn -> connect_error) {
        die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
    }

    foreach ($data['data'] as $row) {
        $name = $row[0];
        $position = $row[1];
        $office = $row[2];
        $age = $row[3];
        $start_date = $row[4];
        $salary = $row[5];

        $sql = "INSERT INTO account (`name`, `position`, `office`, `age`, `start_date`, `salary`) VALUES ('$name', '$position', '$office', '$age', '$start_date', '$salary')";
    
        // 執行 SQL 查詢
        if ($conn->query($sql) === TRUE) {
            echo "新紀錄插入成功 \n";
        }   
        
        else {
            echo "插入記錄時出錯：" . $conn->error;
        }
    
    }

    $conn->close();
    
?>
