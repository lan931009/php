<?php
    // 啟動 session，讓我們可以使用 $_SESSION 變數來儲存資料
    session_start();

    // 使用 unset() 函數來刪除 session 中的 "counter" 變數
    unset($_SESSION["counter"]);

    // 顯示 "counter" 重置成功的訊息
    echo "counter重置成功....";

    // 使用 meta 標籤進行頁面自動跳轉，2秒後跳回 8.counter.php 頁面
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
