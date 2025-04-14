<?php
    // 關閉錯誤顯示（避免顯示錯誤給使用者）
    error_reporting(0);

    // 建立與資料庫的連線，使用 db4free.net 的資料庫
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 查詢 bulletin 資料表中的所有資料
    $result = mysqli_query($conn, "select * from bulletin");

    // 開始建立表格，並顯示標題列
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

    // 使用 while 迴圈逐筆讀取查詢結果並顯示每筆資料
    while ($row = mysqli_fetch_array($result)){
        // 每筆資料顯示在表格的一列中
        echo "<tr><td>";
        echo $row["bid"];  // 顯示佈告編號
        echo "</td><td>";
        echo $row["type"]; // 顯示佈告類別
        echo "</td><td>"; 
        echo $row["title"]; // 顯示佈告標題
        echo "</td><td>";
        echo $row["content"];  // 顯示佈告內容
        echo "</td><td>";
        echo $row["time"]; // 顯示發佈時間
        echo "</td></tr>";
    }

    // 關閉表格
    echo "</table>";
?>
