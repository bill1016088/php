<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; // 新增：建立 SQL 插入指令，將表單傳來的 id 和 pwd 寫入 user 資料表
   if (!mysqli_query($conn, $sql)) { // 新增：! 表示「否定」，判斷 SQL 執行是否失敗
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
