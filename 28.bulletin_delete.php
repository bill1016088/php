<?php 

error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "請登入帳號"; 
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 輸出 HTML meta 標籤，3秒後跳轉到登入頁面
}
else{   
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線，參數依序為：伺服器IP、帳號、密碼、資料庫名稱
    
    // 建立 SQL 刪除指令，依據網址傳來的 bid（佈告編號）刪除對應的佈告
    $sql="delete from bulletin where bid='{$_GET["bid"]}'";
    
    #echo $sql; // 除錯用，可輸出 SQL 指令查看（註解掉不執行）
    
    if (!mysqli_query($conn,$sql)){ // 執行 SQL 指令，! 表示否定，判斷是否執行失敗
        echo "佈告刪除錯誤"; // 輸出錯誤訊息
    }else{ // 若 SQL 執行成功，執行此區塊
        echo "佈告刪除成功"; 
    }
    
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3秒後跳轉到佈告欄列表頁面
}
?> 
