<?php

error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "請登入帳號"; // 輸出提示文字
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉到登入頁面
}
else{ 
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線
    if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ // 執行 SQL 更新指令，將指定 id 的密碼更新為新密碼
        echo "修改錯誤"; 
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3秒後跳轉到使用者管理頁面
    }else{ // 若 SQL 執行成功
        echo "修改成功，三秒鐘後回到網頁"; 
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3秒後跳轉到使用者管理頁面
    }
}

?>
