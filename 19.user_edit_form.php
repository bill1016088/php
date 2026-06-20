<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); // 查詢指定 id 的使用者資料
        $row=mysqli_fetch_array($result); // 將查詢結果取出為陣列
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}> <!-- 隱藏欄位，用來傳遞使用者 id -->
            帳號：{$row['id']}<br> <!-- 顯示帳號（不可修改） -->
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> <!-- 密碼輸入框，預設填入目前密碼 -->
            <input type=submit value=修改>
        </form>
        ";
    }
?>
