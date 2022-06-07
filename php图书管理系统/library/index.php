<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>初忆图书管理系统</title>
    <link href="css/index.css" type="text/css" rel="stylesheet" >
</head>
<body>
<div id="all">
    <div class="top">
        <div class="left">
        <p style="font-size: 20px;color: #1635af">初忆图书管理系统欢迎你</p>
        </div>
        <div class="right">
            <span style="font-size: 20px;color: #1635af"><?php include 'info.php'?>你好</span>
            <a href="login.html">退出</a>
        </div>
    </div>
    <div class="middle">
            <div class="left">
        <div id="center"><a href="make_card.php">办卡</a></div>
        <div id="center"><a href="borrow_book.php">借书</a></div>
        <div id="center"><a href="add_book.php">添书</a></div>
            </div>
            <div class="right">
        <div id="center"><a href="select_action.php">查询</a></div>
        <div id="center"><a href="return_book.php">还书</a></div>
        <div id="center"><a href="delete_book.php">删书</a></div>
             </div>
    </div>
</div>
</body>
</html>
