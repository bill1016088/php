<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'"; // 建立 SQL 刪除指令，依據網址傳來的 id 刪除對應使用者
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ // 執行 SQL 刪除指令，若失敗則顯示錯誤
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
