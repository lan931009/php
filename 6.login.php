<?php
   #mysqli_connect() 建立資料庫連結
   // 建立與資料庫的連線，使用 db4free.net 的資料庫
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   #mysqli_query() 從資料庫查詢資料
   // 查詢 user 資料表中的所有資料
   $result = mysqli_query($conn, "select * from user");

   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 設定一個變數 $login，預設為 FALSE，表示尚未登入成功
   $login = FALSE;

   // 使用 while 迴圈遍歷查詢結果，每次讀取一筆資料
   while ($row = mysqli_fetch_array($result)) {
     // 檢查使用者輸入的帳號和密碼是否與資料庫中的資料相符
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 如果帳號密碼匹配，設定 $login 為 TRUE，表示登入成功
       $login = TRUE;
     }
   } 

   // 如果登入成功，顯示登入成功訊息
   if ($login == TRUE)
     echo "登入成功";
   else
     // 否則顯示帳號或密碼錯誤的訊息
     echo "帳號/密碼 錯誤";
?>
