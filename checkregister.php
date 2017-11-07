<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$name=$_POST['user_name'];
$password=$_POST['user_password'];
$confirmation=$_POST['passwordconfirmation'];
$email=$_POST['user_email'];

$query="insert into users(UserName,password,Email) values ('$name','$password','$email')";

$query_name = "SELECT * FROM users WHERE UserName = '$name'";
$data_name = mysqli_query($dbc, $query_name);


if (!empty($name) && !empty($password) && !empty($email)) {
    if($password!=$confirmation){
        echo "<script LANGUAGE='javascript'>alert('Please make sure your passwords are the same!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='register.php';},1000);
                    </script>

                ";
    }
    else if (mysqli_num_rows($data_name) == 0 ) {
        $data = mysqli_query($dbc, $query);
        echo "<script LANGUAGE='javascript'>alert('You have registered successfully! Please login in!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},3000);
                    </script>

                ";
        //exit();
    }
    else{
        echo "<script LANGUAGE='javascript'>alert('Your username has been used!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='register.php';},3000);
                    </script>

                ";
    }
}
else{
    echo "<script LANGUAGE='javascript'>alert('The information is invalid! Please avoid the null value.');</script>";
    echo "
                    <script>
                            setTimeout(function(){window.location.href='register.php';},3000);
                    </script>

                ";
}


?>