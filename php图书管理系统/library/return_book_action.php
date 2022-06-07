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
        $result=$db->query('select * from users')->fetchAll();
        foreach($result as $value){
            if($value['id']==$_POST['user_id'])
                $flag=true;
        }
        if(!$flag) {
            echo "卡号不存在、还书失败" . "<br>";
            echo "<a href=\"return_book.php\">返回还书界面</a>";
        }
        $a=false;
        $result=$db->query('select * from books')->fetchAll();
        foreach($result as $value){
            if($value['id']==$_POST['book_id'])
                $a=true;
        }
        if(!$a) {
            echo "书籍编号不存在、还书失败" . "<br>";
            echo "<a href=\"return_book.php\">返回还书界面</a>";
        }
        $b=false;
        $statement= $db->prepare('select * from books where id=:id ');
        $statement->execute([':id'=>$_POST['book_id']]);
        $result =$statement->fetch();
        if($result['status']) {
            echo "书籍已在库、还书失败" . "<br>";
            echo "<a href=\"return_book.php\">返回还书界面</a>";
        }
        else
            $b=true;
        if($flag and $a and $b) {
            $statement= $db->prepare('select * from record where usersid=:usersid AND status=0');
            $statement->execute([':usersid'=>$_POST['user_id']]);
            $result =$statement->fetch();
            if($result['booksid']==$_POST['book_id']) {
                echo "还书成功，欢迎再来！";
                echo "<a href=\"index.php\">返回主界面</a>";
                $status = 1;
                $returntime = date('Y-m-d');
                $id = $_POST['user_id'];
                $book = $_POST['book_id'];
                $db->exec("update record set returntime=' $returntime',status=$status where usersid = $id and booksid = $book");
                $statement = $db->prepare('update books set status=:status where id=:id ');
                $statement->execute([':id' => $_POST['book_id'], ':status' => '1']);
            }
            else{
                echo "该用户未借此书，请归还本人所借书的编号".'<br>';
                echo "<a href=\"return_book.php\">返回还书界面</a>";
            }
        }
        ?>

    </div>
</div>
</body>
</html>