<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$name=$_POST['login_name'];
$password=$_POST['login_password'];

if ($name && $password) {
    $sql = "select * from users where UserName = '$name' and password='$password'";
    $result = mysqli_query($dbc, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows) {
        $result_array = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $ID = $result_array["UserID"];
        setcookie('UserID',$ID);
        echo "
                    <script>
                            setTimeout(function(){window.location.href='players_main.php';},1000);
                    </script>

                ";

} else {
        echo "<script LANGUAGE='javascript'>alert('Your password or username is false!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                    </script>

                ";
    }
}
    else{
        echo "<script LANGUAGE='javascript'>alert('The information is invalid! Please avoid the null value.');</script>";
    //echo "The information is invalid! Please avoid the null value.";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                    </script>

                ";
    }
?>