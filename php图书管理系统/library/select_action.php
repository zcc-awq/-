<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>初忆图书管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <style>
        body{
            margin: 0;
            background-color: #5bc0de;
        }
    </style>
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
    <div class="container-fluid">
        <div class="row">
            <div class="alert alert-success" role="alert">欢迎搜索</div>
        </div>
        <form action="/select_name_book_action.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">书名检索</span>
                    <input  name="name" type="text" class="form-control" placeholder="bookname" aria-describedby="basic-addon1">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-1">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="submit" class="btn btn-default">查询</button>

                </div>
            </div>
        </div>
        </form>
        <form action="/select_author_book_action.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">作者检索</span>
                        <input  name="author" type="text" class="form-control" placeholder="author" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>

        <form action="/select_single_user.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">单个用户记录</span>
                        <input  name="user" type="text" class="form-control" placeholder="single_user" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>
        <form action="/select_single_book.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">单本书的状态</span>
                        <input  name="book" type="text" class="form-control" placeholder="single_book" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12"><a href="/index.php">返回主界面</a><br></div>
        </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</body>
</html>
