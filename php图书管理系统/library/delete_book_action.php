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
        $flag=false;
        $db = new PDO('mysql:host=localhost;dbname=library','root','123456');
        $result=$db->query('select * from books')->fetchAll();
        foreach($result as $value){
            if($value['id']==$_POST['id'])
                $flag=true;
        }
        if(!$flag) {
            echo "图书编号不存在，无法删除！" . "<br>";
            echo "<a href=\"delete_book.php\">返回删书界面</a>";
        }
        $a=false;
        $statement= $db->prepare('select * from books where id=:id ');
        $statement->execute([':id'=>$_POST['id']]);
        $result =$statement->fetch();
        if(!$result['status']) {
            echo "书籍不在库、无法删除！" . "<br>";
            echo " <a href=\"delete_book.php\">返回删书界面</a>";
        }
        else
            $a=true;
        if($flag and $a) {
            $statement = $db->prepare('delete from books WHERE id=:id and status=:status');
            $result = $statement->execute([':id' => $_POST['id'], ':status' => 1]);
            if ($result) {
                echo "删书成功";
                echo "<a href=\"index.php\">返回主页面</a>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
