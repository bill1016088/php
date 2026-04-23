<?php // PHP 程式碼開始

    error_reporting(0); // 關閉錯誤報告，讓錯誤訊息不會顯示在網頁上（通常用於正式環境）
    session_start(); // 啟動 session，讓此頁面可以讀取之前儲存的 session 資料
    if (!$_SESSION["id"]) { // 檢查 session 中是否有 "id"，若不存在（未登入）則執行此區塊
        echo "請先登入"; // 輸出「請先登入」文字到網頁
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後自動跳轉回登入頁面
    }
    else{ // 若已登入（session 中有 id），則執行此區塊
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>"; // 顯示歡迎訊息，並提供三個功能連結：登出、管理使用者、新增佈告
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 連線到資料庫伺服器
        $result=mysqli_query($conn, "select * from bulletin"); // 執行 SQL 查詢，從 bulletin 佈告資料表中選取所有資料
        echo "<table border=2>服務器服務器"; // 輸出 HTML 表格（框線粗細為2），表格開始
        echo "<tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; // 輸出表格的標題列
        while ($row=mysqli_fetch_array($result)){ // while 迴圈，逐筆讀取查詢結果到 $row 陣列
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td>"; // 輸出「修改」和「刪除」的超連結，並將佈告編號(bid)透過網址參數傳遞
            echo $row["bid"]; // 輸出佈告編號
            echo "</td><td>"; // 表格欄位結束與開始
            echo $row["type"]; // 輸出佈告類別
            echo "</td><td>"; 
            echo $row["title"]; // 輸出標題
            echo "</td><td>";
            echo $row["content"]; // 輸出佈告內容
            echo "</td><td>";
            echo $row["time"]; // 輸出發佈時間
            echo "</td></tr>"; // 該筆資料的表格列結束
        }
        echo "</table>"; // 表格結束
    
    }

?> // PHP 程式碼結束
