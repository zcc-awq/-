<?php
$username=$_POST['name'];
$telephone=$_POST['tel'];
$address=$_POST['address'];
$db = new PDO('mysql:host=localhost;dbname=library','root','123456');
$statement=$db->prepare('select * from admin where username=:username');
$statement->execute([':username'=>$username]);
$user=$statement->fetch();
if(empty($user)){
    echo "用户不存在！";
    echo "<a href=\"find_password.php\">点击重新输入：</a>";
}
else{
    if($telephone==$user['telephone'] and $address==$user['address']){
        echo "恭喜验证成功！"."<br>";
        echo "您的账号：".$username."密码为：".$user['password']."<br>";
        echo "<a href=\"login.html\">点击重新登录</a>";
    }
    else{
        echo "验证格式不对，请重新输入：";
    }
}
?>