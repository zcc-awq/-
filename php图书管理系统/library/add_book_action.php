<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>初忆图书管理系统</title>
    <link href="css/action.css" type="text/css" rel="stylesheet" >
</head>
<body>
<div id="all">
    <div class="method">
        <p style="font-size: 25px;color: #1635af">初忆图书管理系统欢迎你</p>
        <?php
        $db = new PDO('mysql:host=localhost;dbname=library','root','123456');
        $str=$db->query("select * from books ");
        $result = $str->fetchAll(PDO::FETCH_ASSOC);
        $flag=false;
        foreach($result as $value){
            if($value['id'] == $_POST['id']){
                echo "图书编号已存在!请重新输入："."<br>";
                echo "<a href=\"add_book.php\">返回添书页面</a>";
            }
            else {
                $flag = true;
            }
        }
        if($flag){
            $statement = $db->prepare('insert into books(id,name,author,price,status) values (:id,:name,:author,:price,:status)');
            $result = $statement->execute([':id' => $_POST['id'], ':name' => $_POST['name'], ':author' => $_POST['author'], ':price' => $_POST['price'], ':status' => '1']);
            if ($result) {
                echo "添书成功";
                echo "书的编号：".$_POST['id']."书名：".$_POST['name']."<br>";
                echo "<a href=\"index.php\">返回主页面</a>";
            } else {
                echo "输入格式信息不对，添书失败"."<br>";
                echo "<a href=\"add_book.php\">返回添书界面</a>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
