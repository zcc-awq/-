<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>初忆图书管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
try {
    $dsn = 'mysql:dbname=library;host=localhost';
    $user = 'root';
    $password = '123456';
    $db = new PDO($dsn, $user, $password);
    $statement= $db->prepare('select * from books where name like:name ');
    $statement->execute([':name'=>"%".$_POST['name']."%"]);
    $result =$statement->fetchAll();
}   catch(PDOException $e){
    die('程序出错');
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>书名</th>
                    <th>作者</th>
                    <th>价格</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($result as $value){
                    echo '<tr class= "info">';
                    echo "<td>".$value['id']."</td>";
                    echo "<td>".$value['name']."</td>";
                    echo "<td>".$value['author']."</td>";
                    echo "<td>".$value['price']."</td>";
                    if($value['status']==1)
                        echo "<td>".'在库'."</td>";
                    else
                        echo "<td>".'借出'."</td>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<nav aria-label="...">
    <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
    </ul>
</nav>


<div class="container-fluid">

    <div class="btn-group" role="group" aria-label="...">
        <div class="col-md-12"></div> <a href="index.php"> <button type="button" class="btn btn-default">返回主页</button></a></div>
</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</body>
</html>
