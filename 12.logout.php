<?php
    session_start();
    unset($_SESSION["id"]); // 刪除 session 中的 "id" 變數，移除登入狀態
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; // 3秒後自動跳轉回登入頁面
?>
