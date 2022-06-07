<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>注册界面</title>
		<meta charset="utf-8" />
		<style>
			* {
				margin: 0;
				padding: 0;
			}

			html {
				height: 100%;
			}

			body {
				height: 100%;
			}

			.container {
				height: 100%;
				background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);
			}

			.login-wrapper {
				background-color: #fff;
				width: 358px;
				height: 588px;
				border-radius: 15px;
				padding: 0 50px;
				position: relative;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
			}

			.header {
				font-size: 38px;
				font-weight: bold;
				text-align: center;
				line-height: 200px;
			}

			.input-item {
				display: block;
				width: 100%;
				margin-bottom: 20px;
				border: 0;
				padding: 10px;
				border-bottom: 1px solid rgb(128, 125, 125);
				font-size: 15px;
				outline: none;
			}

			.input-item:placeholder {
				text-transform: uppercase;
			}

			.btn {
				text-align: center;
				padding: 10px;
				width: 100%;
				margin-top: 10px;
				background-image: linear-gradient(to right, #a6c1ee, #fbc2eb);
				color: #fff;
			}

			.msg {
				text-align: center;
				line-height: 88px;
			}

			a {
				text-decoration-line: none;
				color: #abc1ee;
			}
		</style>

	</head>
	<body>
		<div class="container">
			<div class="login-wrapper">
				<div class="header">Register</div>
				<div class="form-wrapper">

					<form action="RegisterServlet" method="post">
						用户名：<input type="text" id="userId" name="userName" placeholder="输入用户名" class="input-item" /><br>
						密码：<input type="password" id="pwdId1" name="pwdName1" placeholder="输入密码"
							class="input-item" /><br>
						密码：<input type="password" id="pwdId2" name="pwdName2" placeholder="再次输入密码"
							class="input-item" /><br>
						<button type="submit" class="btn">注册</button>
					</form>


				</div>

			</div>
		</div>
		</form>
	</body>
</html>

