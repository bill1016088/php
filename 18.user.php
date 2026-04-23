<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); // 關閉錯誤顯示（正式環境用）
        session_start(); // 啟用 Session，檢查登入狀態
        if (!$_SESSION["id"]) { // 若未登入，強制跳轉
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><th>修改/刪除</th><th>帳號</th><th>密碼</th></tr>";
            
            $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user"); // 查詢所有使用者
            while ($row=mysqli_fetch_array($result)){ // 逐筆輸出使用者資料
                // 輸出修改/刪除連結（將使用者 id 透過網址傳遞），以及帳號、密碼
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
