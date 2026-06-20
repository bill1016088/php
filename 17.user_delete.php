<?php
error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "請登入帳號"; 
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉到登入頁面
}
else{ 
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線
    $sql="delete from user where id='{$_GET["id"]}'"; // 建立 SQL 刪除指令，依據網址傳來的 id 刪除對應使用者
    #echo $sql; // 除錯用，可輸出 SQL 指令查看
    if (!mysqli_query($conn,$sql)){ // 執行 SQL 指令，! 表示否定，判斷是否執行失敗
        echo "使用者刪除錯誤"; 
    }else{ // 若 SQL 執行成功
        echo "使用者刪除成功"; 
    }
    echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3秒後跳轉到使用者管理頁面
}
?>
