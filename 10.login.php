<?php
   // 使用 mysqli_connect() 建立與資料庫的連線
   // 參數分別為：主機位址、使用者帳號、密碼、資料庫名稱
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 使用 mysqli_query() 向資料庫查詢資料，這裡是查詢 user 資料表中所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   // 宣告變數 $login 為 FALSE，預設為尚未登入成功
   $login = FALSE;

   // 使用 mysqli_fetch_array() 將查詢結果一筆一筆取出來
   while ($row = mysqli_fetch_array($result)) {
     // 檢查使用者輸入的帳號與密碼是否與資料表中的資料相符
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 若帳號與密碼符合，將 $login 設為 TRUE
       $login = TRUE;
     }
   } 

   // 如果登入成功
   if ($login == TRUE) {
     // 啟用 session 機制以儲存登入狀態
     session_start();
     // 將登入帳號存入 session 中
     $_SESSION["id"] = $_POST["id"];
     // 顯示登入成功訊息
     echo "登入成功";
     // 3 秒後重新導向到 bulletin 頁面
     echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }
   // 如果登入失敗
   else {
     // 顯示錯誤訊息
     echo "帳號/密碼 錯誤";
     // 3 秒後重新導向回登入頁面
     echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
   }
?>
