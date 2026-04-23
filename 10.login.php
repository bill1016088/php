<?php // PHP 程式碼開始

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 連線到資料庫伺服器，參數依序為：伺服器IP、帳號、密碼、資料庫名稱

   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); // 執行 SQL 查詢，從 user 資料表中選取所有資料

   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; // 初始化登入狀態為 false（未登入）
   while ($row=mysqli_fetch_array($result)) { // 使用 while 迴圈逐筆讀取查詢結果，每次讀一筆到 $row 陣列
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { // 檢查使用者輸入的帳號密碼是否與資料庫中的某一筆相符
       $login=TRUE; // 若相符，將登入狀態改為 true（已登入）
     }
   } 
   if ($login==TRUE) { // 若登入成功
    session_start(); // 啟動 PHP 的 session 功能，用於跨頁面記住使用者狀態
    $_SESSION["id"]=$_POST["id"]; // 將使用者的帳號存入 session 變數中
    echo "登入成功"; // 輸出「登入成功」文字到網頁上
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 輸出 HTML meta 標籤，3秒後自動跳轉到 11.bulletin.php
   }

  else{ // 若登入失敗
    echo "帳號/密碼 錯誤"; // 輸出錯誤訊息到網頁上
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 輸出 HTML meta 標籤，3秒後自動跳轉回登入頁面
  }
?> // PHP 程式碼結束
