<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Register
	</title>
	<style type="text/css">
		*{margin: 0px;padding: 0px;}
		.login_top{width: 1200px;height: 80px;margin: 0 auto;padding: 10px;border-bottom: 2px solid #e8e8e8}
		.register{width: 830px; height: 625px; border: 2px solid #e8e8e8; margin: 80px auto;position: relative;}
		.register_left{width: 520px;height: 625px;position: absolute;float: left;}
		.register_right{width: 310px;height: 625px;float: right;}
		.username{width: 400px;height: 54px;border: 2px solid #e8e8e8; margin-top: 50px; margin-left: 50px;}
		.user_input{width: 280px;height: 30px;line-height: 30px;font-size: 14px;border: 2px solid #CCCCCC;margin-top: 10px;}
		.userpassword{width: 400px;height: 54px;border: 2px solid #e8e8e8; margin-top: 50px; margin-left: 50px;}
		.useremail{width: 400px;height: 54px;border: 2px solid #e8e8e8; margin-top: 50px; margin-left: 50px;}
		.passwordconfirm{width: 400px;height: 54px;border: 2px solid #e8e8e8; margin-top: 50px; margin-left: 50px;}
		.registerbutton{width: 400px;height: 54px;margin-top: 50px; margin-left: 50px;background: red;}
		.submit{width: 400px;height: 54px;background: #e4393c;font-size: 26px;color:white;cursor: pointer;}
		.trans_login{margin-left: 50px;}

	</style>
</head>
<body>
<form name = "registerform" method = "post" action = "checkregister.php" >
	<div class="login_top">
		<img src="image/NBAlogo.gif" alt="NBAlogo" width="180" height="80" />
	</div>
	<div class="register">
		<!--register left start-->
		<div class="register_left">
			<!--username start-->
			<div class="username">
				<label for="Username" style="width: 90px;height: 52px;float: left;line-height: 52px;padding-left: 20px; ">Username</label>
				<input type="text" name="user_name" id = "user_name" class="user_input" style="border-style: none;">
			</div>
			<!--username end-->
			<!--userpassword start-->
			<div class="userpassword">
				<label for="Userpassword" style="width: 90px;height: 52px;float: left;line-height: 52px;padding-left: 20px; ">Password</label>
				<input type="password" name="user_password" id = "user_password" class="user_input" style="border-style: none;">
			</div>
			<!--userpassword end-->
			<!--confirmation start-->
			<div class="passwordconfirm">
				<label for="passwordconfirm" style="width: 90px;height: 52px;float: left;line-height: 52px;padding-left: 20px; ">Confirmation
				</label>
				<input type="password" name="passwordconfirmation" id = "passwordconfirmation" class="user_input" style="border-style: none;">
			</div>
			<!--confirmation end-->
			<!--useremail start-->
			<div class="useremail">
				<label for="Useremail" style="width: 90px;height: 52px;float: left;line-height: 52px;padding-left: 20px; ">E-mail</label>
				<input type="text" name="user_email" id = "user_email" class="user_input" style="border-style: none;">
			</div>
			<!--useremail end-->
			<div class="registerbutton">
				<input type="submit" value="Register"
                       class="submit" onclick="InputCheck()">
			</div>
			<!--button end-->
			<div class="trans_login">
				<a href="login.php">Login</a>
			</div>
		</div>
		<!--register left end-->
		<!--register left start-->
		<div class="register_right">
			<img src="image/registerimage.jpeg" alt="Welcome" width="310px" height="625">
		</div>
		<!--register right end-->
	</div>
</form>

    <script language="javascript">
        function InputCheck(){

            if (document.getElementById("user_name").value == "")
            {
                alert("Username can't be null!");
            }
            if(document.getElementById("user_password").value == ""){
                alert("Userpassword can't be null!");
            }
            if(document.getElementById("passwordconfirmation").value!=document.getElementById("confirm").value){
                alert("Please enter same password!");
            }
            if(document.getElementById("user_email").value==""){
                alert("Email can't be null!");
            }

        }
    </script>






</body>
</html>