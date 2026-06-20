<?php 

error_reporting(0); // 關閉錯誤報告，不顯示 PHP 錯誤訊息
session_start(); // 啟動 Session，用於追蹤使用者登入狀態
if (!$_SESSION["id"]) { // 檢查 Session 中是否有 "id"，判斷使用者是否已登入
    echo "請登入帳號"; // 輸出提示文字
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 輸出 HTML meta 標籤，3秒後跳轉到登入頁面
}
else{ // 若已登入，執行此區塊    

   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線，參數依序為：伺服器IP、帳號、密碼、資料庫名稱
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; // 建立 SQL 新增指令，將表單傳來的 id 和 pwd 新增到 user 資料表
   if (!mysqli_query($conn, $sql)) { // 執行 SQL 指令，! 表示否定，判斷是否執行失敗
     echo "新增命令錯誤"; // 輸出錯誤訊息
   }
   else{ // 若 SQL 執行成功，執行此區塊
     echo "新增使用者成功，三秒鐘後回到網頁"; // 輸出成功訊息
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3秒後跳轉到使用者管理頁面
   }
}
?> 
