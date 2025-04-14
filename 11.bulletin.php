<?php
    // 關閉錯誤訊息顯示（避免顯示給使用者）
    error_reporting(0);

    // 啟用 session 功能，用來記錄登入狀態
    session_start();

    // 如果沒有登入（session 中沒有 id）
    if (!$_SESSION["id"]) {
        // 顯示請先登入，並 3 秒後導向回登入頁面
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 顯示歡迎訊息，並提供登出、管理使用者、新增佈告的連結
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 建立與資料庫的連線（使用 db4free.net 上的帳密與資料庫）
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢 bulletin 資料表中所有資料
        $result=mysqli_query($conn, "select * from bulletin");

        // 建立表格標題列
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

        // 使用 while 迴圈讀取每一筆資料並顯示在表格中
        while ($row=mysqli_fetch_array($result)){
            // 每筆資料顯示一列，並加上修改與刪除的連結（帶入 bid 參數）
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";

            // 顯示佈告編號
            echo $row["bid"];
            echo "</td><td>";

            // 顯示佈告類別
            echo $row["type"];
            echo "</td><td>"; 

            // 顯示佈告標題
            echo $row["title"];
            echo "</td><td>";

            // 顯示佈告內容
            echo $row["content"]; 
            echo "</td><td>";

            // 顯示佈告發佈時間
            echo $row["time"];
            echo "</td></tr>";
        }

        // 結束表格
        echo "</table>";
    }
?>
