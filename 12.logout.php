<?php
    // 啟用 session 功能，準備操作 $_SESSION 變數
    session_start();

    // 移除 $_SESSION["id"]，代表使用者登出
    unset($_SESSION["id"]);

    // 顯示登出成功訊息
    echo "登出成功....";

    // 3 秒後導向回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
