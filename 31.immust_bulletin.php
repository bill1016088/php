<html>
    <head><title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">
    <!-- 引入 FlexSlider 輪播套件的 CSS 樣式 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <!-- 引入 jQuery 核心函式庫 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <!-- 引入 FlexSlider 輪播套件的 JavaScript -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <script>
        $(window).load(function() { // 當視窗載入完成後執行
            $('.flexslider').flexslider({ // 初始化 FlexSlider 輪播功能
                animation: "slide", // 設定動畫效果為滑動
                rtl: true // 啟用從右到左的輪播方向
            });
        });
    </script>
    <style>
        *{ /* 全域樣式重置 */
            margin:0; /* 移除所有元素的預設外邊距 */
            color:gray; /* 所有文字預設為灰色 */
            text-align:center; /* 所有文字置中對齊 */
        }
        /* top - 頂部區域 */
        .top{
             background-color: white; /* 白色背景 */
        }
        .top .container{
            display: flex; /* 使用 Flexbox 彈性佈局 */
            align-items: center; /* 垂直置中對齊 */
            justify-content: space-between; /* 水平分散對齊 */
            padding:10px; /* 內邊距 10px */
        }
        .top .logo{
            font-size: 35px; /* 字體大小 35px */
            font-weight: bold; /* 字體粗體 */
        }
        .top .logo img{
            width: 100px; /* 圖片寬度 100px */
            vertical-align: middle; /* 垂直置中對齊 */
        }
        .top .top-nav{
            font-size: 25px; /* 字體大小 25px */
            font-weight: bold; /* 字體粗體 */
        }
        .top .top-nav a{
            text-decoration: none; /* 移除連結底線 */
        }
        /* nav - 導航列區域 */
        .nav {
            background-color:#333; /* 深灰色背景 */
            display: flex; /* 使用 Flexbox 彈性佈局 */
            justify-content: center; /* 水平置中對齊 */
        }
        .nav ul {
            list-style-type: none; /* 移除列表項目符號 */ 
            margin: 0; /* 移除預設外邊距 */
            padding: 0; /* 移除預設內邊距 */
            overflow: hidden; /* 隱藏超出範圍的內容 */
            background-color: #333; /* 深灰色背景 */
        }
        .nav li {
            float: left; /* 列表項目向左浮動，水平排列 */
        }
        .nav li a {    
            display: block; /* 將連結設為區塊元素，可點擊範圍變大 */
            color: white; /* 白色文字 */
            text-align: center; /* 文字置中對齊 */
            padding: 14px 16px; /* 上下 14px、左右 16px 的內邊距 */
            text-decoration: none; /* 移除連結底線 */
        }
        .nav li a:hover {
            background-color: #111; /* 滑鼠懸停時背景變更黑 */
        }
        /* 下拉式選單樣式 */
        .dropdown:hover .dropdown-content {
            display: block; /* 滑鼠懸停時顯示下拉選單 */
        }
        li.dropdown:hover{
            background-color: #333; /* 滑鼠懸停時保持深灰色背景 */
        }
        .dropdown-content { /* 下拉選單內容容器 */
            display: none; /* 預設隱藏 */
            position: absolute; /* 絕對定位，脫離正常文件流 */
            background-color: #333; /* 深灰色背景 */
            min-width: 160px; /* 最小寬度 160px */
            z-index: 1; /* 堆疊順序，確保顯示在上層 */
        }
        .dropdown-content a { /* 下拉選單中的連結 */
            color: black; /* 黑色文字 */
            padding: 12px 16px; /* 上下 12px、左右 16px 的內邊距 */
            text-decoration: none; /* 移除連結底線 */
            display: block; /* 區塊元素，佔滿整行 */
            text-align: left; /* 文字靠左對齊 */
        }
        /* slider - 輪播區域 */
        .slider{
            background-color: black; /* 黑色背景 */
        }
        /* banner - 橫幅標語區域 */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF); /* 漸層藍色背景 */
            padding:30px; /* 內邊距 30px */
        }
        .banner h1{
            padding: 20px; /* 標題內邊距 20px */
        }        
        /* faculty - 師資介紹區域 */
        .faculty {
            display: block; /* 區塊顯示 */
            justify-content: center; /* 水平置中 */
            background-color:white; /* 白色背景 */
            padding:40px; /* 內邊距 40px */
        }
        .faculty h2 {
            font-size: 25px; /* 字體大小 25px */
            color: rgb(50,51,52); /* 深灰色文字 */
            padding-bottom:40px; /* 底部內邊距 40px */
        }
        .faculty .container {
            display: flex; /* 使用 Flexbox 彈性佈局 */
            justify-content: space-around; /* 水平均勻分散對齊 */
            align-items: center; /* 垂直置中對齊 */
        }
        .faculty .teacher{
            display:block; /* 區塊顯示 */
            text-decoration: none; /* 移除連結底線 */
        }
        .faculty .teacher img{
            height: 200px; /* 圖片高度 200px */
            width: 200px; /* 圖片寬度 200px */
        }
        .faculty .teacher h3{
            color: White; /* 白色文字 */
            background-color: rgba(39,40,34,.500); /* 半透明黑色背景 */
            text-align: center; /* 文字置中對齊 */
        }
        /* contact - 聯絡資訊區域 */
        .contact {
            display: block; /* 區塊顯示 */
            justify-content: center; /* 水平置中 */
            margin-top: 30px; /* 上外邊距 30px */
            margin-bottom: 30px; /* 下外邊距 30px */
        }
        .contact h2{
            color: rgb(54, 82, 110); /* 藍灰色文字 */
            font-size: 25px; /* 字體大小 25px */
        }
        .contact .infos{
            display:flex; /* 使用 Flexbox 彈性佈局 */
            margin-top: 30px; /* 上外邊距 30px */
            justify-content: center; /* 水平置中對齊 */
        }
        .contact .infos .left{
            display:block; /* 區塊顯示 */
            text-align: left; /* 文字靠左對齊 */
            margin-right: 30px; /* 右外邊距 30px */
        }
        .contact .infos .left b{
            display:block; /* 區塊顯示 */
            text-align: left; /* 文字靠左對齊 */
            margin-top: 10px; /* 上外邊距 10px */
            text-decoration: bold; /* 粗體 */
            color: Gray; /* 灰色文字 */
            font-size: 18px; /* 字體大小 18px */
            line-height: 18px; /* 行高 18px */
        }
        .contact .infos .left span{
            display:block; /* 區塊顯示 */
            text-align: left; /* 文字靠左對齊 */
            margin-top: 10px; /* 上外邊距 10px */
            color: rgba(39,40,34,0.5); /* 半透明深灰色文字 */
            font-size: 16px; /* 字體大小 16px */
            padding-left: 27px; /* 左內邊距 27px（縮排） */
        }
        .contact .infos .right{
            height: 200px; /* 高度 200px */      
        }
        .contact .infos .right iframe{
            width: 100%; /* 寬度 100% */
            height: 100%; /* 高度 100% */
            border: 1px solid rgba(39,40,34,0.50); /* 半透明灰色邊框 */
        }
        /* footer - 頁尾區域 */
        .footer{
            display: flex; /* 使用 Flexbox 彈性佈局 */
            justify-content: center; /* 水平置中對齊 */
            background-color: rgb(25,26,30); /* 深色背景 */
            padding: 30px 0; /* 上下 30px、左右 0 的內邊距 */
        }
        /* 登入畫面彈窗樣式 */
        .modal {
            display: none; /* 預設隱藏 */
            position: fixed; /* 固定定位，不隨滾動移動 */
            z-index: 1; /* 堆疊順序，顯示在上層 */
            right: 50; /* 右邊位置 */
            top: 50; /* 上邊位置 */
            width: 20%; /* 寬度 20% */
            height: 20%; /* 高度 20% */
            overflow: auto; /* 內容過多時顯示滾動條 */
            background-color: rgba(255,255,255,0.9); /* 半透明白色背景 */
            padding-top: 50px; /* 上內邊距 50px */
        }
        /* 佈告欄區域樣式 */
        .bulletin{
            display: block; /* 區塊顯示 */
            justify-content: center; /* 水平置中 */
            background-color: rgb(255,204,153); /* 橘色背景 */
            padding: 30px 0; /* 上下 30px、左右 0 的內邊距 */
        }
        .bulletin h1{
            padding:10px; /* 內邊距 10px */
        }
        .bulletin table{
            border-collapse:collapse; /* 合併表格邊框 */
            font-family: 微軟正黑體; /* 字體為微軟正黑體 */
            font-size:16px; /* 字體大小 16px */
            border:1px solid #000; /* 黑色實線邊框 */
        }
        .bulletin table th{
            background-color: #abdcff; /* 淺藍色背景 */
            color: #ffffff; /* 白色文字 */
        }
        .bulletin table td{
            background-color: #ffffff; /* 白色背景 */
            color: #0396ff; /* 藍色文字 */
        }
    </style>
    </head>
    <body>
        <!-- ===== 頂部區域 ===== -->
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG"> <!-- 系徽圖片 -->
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a> <!-- 連結到明新科大首頁 -->
                  <a href=>明新管理學院</a> <!-- 連結到管理學院首頁 -->
                  <!-- 點擊後顯示登入彈窗 -->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入彈窗 -->
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span> <!-- 點擊可關閉彈窗 -->
                    <form method=post action="10.login.php"> <!-- 登入表單，提交到 10.login.php -->
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                </div>
              </div>
        </div>
        <!-- ===== 導航列區域 ===== -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li> <!-- 錨點連結到首頁 -->
                <li><a href="#introduction">系所簡介</a></li> <!-- 錨點連結到系所簡介 -->
                <li class="dropdown"><a href="#faculty">成員簡介</a> <!-- 有下拉選單的項目 -->
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a> <!-- 下拉選單選項 -->
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li> <!-- 錨點連結到相關資訊 -->
            </ul>
        </div>
        <!-- ===== 輪播區域 ===== -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li> <!-- 輪播圖片 1 -->
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li> <!-- 輪播圖片 2 -->
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li> <!-- 輪播圖片 3 -->
                </ul>
            </div>
        </div>
        <!-- ===== 佈告欄區域 ===== -->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust"); // 建立資料庫連線
                $result=mysqli_query($conn, "select * from bulletin"); // 查詢所有佈告資料
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>"; // 輸出表格標題列
                while ($row=mysqli_fetch_array($result)){ // 逐筆讀取查詢結果
                    echo "<tr><td>";
                    echo $row["bid"]; // 輸出佈告編號
                    echo "</td><td>";
                    // 根據 type 數值轉換為對應的中文類別名稱
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"]; // 輸出標題
                    echo "</td><td>";
                    echo $row["content"]; // 輸出內容
                    echo "</td><td>";
                    echo $row["time"]; // 輸出時間
                    echo "</td></tr>";
                }
                echo "</table>"; // 表格結束
            ?>
        </div>
        <!-- ===== 系所簡介橫幅 ===== -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- ===== 師資介紹區域 ===== -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" /> <!-- 老師照片 -->
                    <h3>黃老師</h3> <!-- 老師姓名 -->
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <!-- ===== 聯絡資訊區域 ===== -->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b> <!-- 地址標題 -->
                        <span>304新竹縣新豐鄉新興路1號</span> <!-- 詳細地址 -->
                        <b>電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b>傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <!-- Google 地圖 iframe 嵌入 -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <!-- ===== 頁尾版權區域 ===== -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
