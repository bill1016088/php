<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
    session_start(); // 啟動 Session，用於追蹤使用者登入狀態
    if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
        echo "請登入帳號"; // 輸出提示文字
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉到登入頁面
    }
    else{ // 若已登入，執行此區塊   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); // 查詢指定 id 的使用者資料
        $row=mysqli_fetch_array($result); // 將查詢結果取出為陣列
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}> <!-- 隱藏欄位，用來傳遞使用者 id -->
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
