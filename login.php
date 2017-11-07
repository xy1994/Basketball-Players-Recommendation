<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>login</title>
		<style type="text/css">
			*{margin: 0px;padding: 0px;}
			.login_top{width: 1200px;height: 80px;margin: 0 auto;padding: 10px;border-bottom: 2px solid #e8e8e8;}
			.login{width: 1100px; height: 400px; border: 2px solid #e8e8e8; margin: 60px auto;position: relative;background: #e8e8e8}
			.login_left{width: 700px;height: 400px;float: left; }
			.login_right{width: 400px;height: 400px;
				float: right;}
			.login_main{width: 320px;height: 280px;position: absolute;top: 20px;right: 20px;}
			.username{width: 320px;height: 64px;margin-top: 30px;}	
			.user_text{width: 320px;}
			.user_input{width: 280px;height: 30px;line-height: 30px;font-size: 14px;border: 2px solid #CCCCCC;}
			.userpassword{width: 320px;height: 64px;margin-top: 30px;}
			.loginbutton{width: 320px;height: 50px;background: #CCCC33;}
			.user_submit{width: 310px;height: 40px;background: #e4393c;font-size: 22px;color: white;cursor: pointer;margin-top: 50px;}
		</style>
	</head>
	<body>
    <form name = "registerform" method = "post" action = "checklogin.php" >
		<div class="login_top">
			<img src="image/NBAlogo.gif" alt="NBAlogo" width="180" height="80" />
		</div>
		<div class="login">
			<div class="login_left">
				<img src="image/login_image.jpeg" alt="login_image" width="700" height="400" />
			</div>
			<div class="login_right">
				<div class="login_main">
					<!--username start-->
					<div class="username">
						<span>Username</span>
						<div class="user_text">
							<input type="text" class="user_input" name="login_name" id = "login_name"/>
						</div>
					</div>
					<!--username end-->
					<!--userpassword start-->
					<div class="userpassword">
						<span>Password</span>
						<div class="user_text"> 
						<input type="Password" class="user_input" name="login_password" id = "login_password"/>
						</div>
					</div>
					<!--userpassword end-->
					<div class="lgoinbutton">
						<input type="submit" value="Log in" class="user_submit" />
					</div>
                    <div>
                        <a href="register.php">register</a>
                    </div>
				</div>

			</div>
		</div>
    </form>
		



	</body>


</html>
	