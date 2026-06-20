<?php

error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "please login first"; 
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉到登入頁面
}
else{ 
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線
    $sql="insert into bulletin(title, content, type, time) 
    values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; // 建立 SQL 新增指令，將表單傳來的標題、內容、類型、時間新增到 bulletin 資料表
    if (!mysqli_query($conn, $sql)){ // 執行 SQL 指令，! 表示否定，判斷是否執行失敗
        echo "新增命令錯誤"; 
    }
    else{ // 若 SQL 執行成功
        echo "新增佈告成功，三秒鐘後回到網頁"; 
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3秒後跳轉到佈告欄列表頁面
    }
}
?>
