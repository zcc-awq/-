<?php
session_start();
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
        $username=$_POST['username'];
        $password=$_POST['password'];
        $db = new PDO('mysql:host=localhost;dbname=library','root','123456');
        $statement=$db->prepare('select * from admin where username=:username');
        $statement->execute([':username'=>$username]);
        $user=$statement->fetch();
        if(empty($user)){
            echo "用户不存在！";
            echo "<a href=\"login.html\">点击重新登录</a>";
        }
        else if($password != $user['password']){
            echo "密码不正确！";
            echo "<a href=\"login.html\">点击重新登录</a>";
        }
        else{
            $_SESSION['user']=$username;
            echo $username."登录成功！";
            echo "<a href=\"index.php\">点击进入选择业务主页</a>";
        }
        ?>
    </div>
</div>
</body>
</html>
