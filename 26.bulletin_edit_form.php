<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "please login first";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{
    
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}"); // 查詢指定編號的佈告資料
    $row=mysqli_fetch_array($result); // 將查詢結果取出為陣列
    $checked1="";
    $checked2="";
    $checked3="";
    if ($row['type']==1) // 若佈告類型為 1（系上公告）
        $checked1="checked"; // 設定第一個單選按鈕為預選
    if ($row['type']==2) // 若佈告類型為 2（獲獎資訊）
        $checked2="checked"; // 設定第二個單選按鈕為預選
    if ($row['type']==3) // 若佈告類型為 3（徵才資訊）
        $checked3="checked"; // 設定第三個單選按鈕為預選
    echo "
    <html>
        <head><title>修改佈告</title></head>
        <body>
            <form method=post action=27.bulletin_edit.php>
                佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br> <!-- 隱藏欄位，用來傳遞佈告編號 -->
                標    題：<input type=text name=title value={$row['title']}><br>
                內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                        <input type=radio name=type value=2 {$checked2}>獲獎資訊
                        <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                發布時間：<input type=date name=time value={$row['time']}><p></p>
                <input type=submit value=修改佈告> <input type=reset value=清除>
            </form>
        </body>
    </html>
    ";
}
?>
