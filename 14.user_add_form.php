<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
    session_start(); // 啟動 Session，用於追蹤使用者登入狀態
    if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
        echo "請登入帳號"; // 輸出提示文字
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 輸出 HTML meta 標籤，3秒後跳轉到登入頁面
    }
    else{ // 若已登入，執行此區塊
        echo " // 使用 echo 輸出 HTML 表單
            <form action=15.user_add.php method=post> // 表單開始，提交到 15.user_add.php，使用 POST 方法
                帳號：<input type=text name=id><br> // 文字輸入框，name 為 "id"
                密碼：<input type=text name=pwd><p></p> // 文字輸入框，name 為 "pwd"
                <input type=submit value=新增> <input type=reset value=清除> // 提交按鈕和清除按鈕
            </form> // 表單結束
        ";
    }
?>
    </body>
</html>
