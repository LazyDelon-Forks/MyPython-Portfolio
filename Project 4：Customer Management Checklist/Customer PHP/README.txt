資料庫：customer
資料表：account 

"CREATE TABLE IF NOT EXISTS account (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    position VARCHAR(255),
    office VARCHAR(255),
    age INT,
    start_date DATE,
    salary VARCHAR(255)
)"
       

default.php 		儲存資料表預設資料 讀取 DataTables Json檔 INSERT INTO 資料表

 