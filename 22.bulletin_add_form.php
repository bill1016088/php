<?php

error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "please login first"; // 輸出提示文字
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉到登入頁面
}
else{ 
    echo "
    <html>
        <head><title>新增佈告</title></head>
        <body>
            <form method=post action=23.bulletin_add.php> <!-- 提交到 23.bulletin_add.php，使用 POST 方法 -->
                標    題：<input type=text name=title><br> <!-- 文字輸入框，name 為 "title" -->
                內    容：<br><textarea name=content rows=20 cols=20></textarea><br> <!-- 文字區域輸入框，20行20列 -->
                佈告類型：<input type=radio name=type value=1>系上公告  <!-- 單選按鈕，name 為 "type"，值為 1 -->
                        <input type=radio name=type value=2>獲獎資訊 <!-- 單選按鈕，name 為 "type"，值為 2 -->
                        <input type=radio name=type value=3>徵才資訊<br> <!-- 單選按鈕，name 為 "type"，值為 3 -->
                發布時間：<input type=date name=time><p></p> <!-- 日期輸入框，name 為 "time" -->
                <input type=submit value=新增佈告> <input type=reset value=清除> <!-- 提交按鈕和清除按鈕 -->
            </form> 
        </body>
    </html>
    ";
}
?>
