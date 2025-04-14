<?php
   #mysqli_connect() 建立資料庫連結
   // 使用 mysqli_connect() 來建立與資料庫的連線
   // 參數分別為：主機位址、使用者帳號、密碼、資料庫名稱
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   #mysqli_query() 從資料庫查詢資料
   // 使用 mysqli_query() 執行 SQL 查詢，從 user 資料表取得所有資料
   $result = mysqli_query($conn, "select * from user");

   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 使用 while 迴圈逐筆讀取查詢結果並顯示每筆資料的帳號與密碼
   while ($row = mysqli_fetch_array($result)) {
     // 顯示資料表中的帳號 (id) 和密碼 (pwd)
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   }
?>
