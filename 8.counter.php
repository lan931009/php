<?php
    // 啟動 session，讓我們可以使用 $_SESSION 變數來儲存資料
    session_start();

    // 檢查是否已經設定過 "counter"，若尚未設定，初始化為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;  // 如果沒有設定 "counter"，設定初始值為 1
    else
        $_SESSION["counter"]++;  // 否則，"counter" 的值加 1，表示每次頁面刷新，計數器加一

    // 顯示目前的計數值
    echo "counter=" . $_SESSION["counter"];

    // 顯示一個連結，點擊後可以重置計數器（透過另一個頁面來重置）
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
