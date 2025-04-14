<?php
    #mysqli_connect() 建立資料庫連結
    // 連接到 db4free.net 的資料庫，使用帳號 immust、密碼 immustimmust、資料庫 immust
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    #mysqli_query() 從資料庫查詢資料
    // 查詢 user 資料表中的所有資料
    $result = mysqli_query($conn, "select * from user");

    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    // 取出查詢結果的第一筆資料
    $row = mysqli_fetch_array($result);
    
    // 顯示第一筆資料的帳號與密碼（id 和 pwd 欄位）
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 

    // 再取出第二筆資料
    $row = mysqli_fetch_array($result);

    // 顯示第二筆資料的帳號與密碼
    echo $row["id"] . " " . $row["pwd"];
?>
