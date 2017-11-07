<?php
$uID = $_COOKIE['UserID'];
//echo $uID;
//$pID = $_COOKIE['playerid'];
//echo $pID;
@$pid=$_GET["pid"];
//echo $pid;
@$score=$_GET["score"];
//echo $score;

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "select * from usersperference where UserID = '$uID' and RK='$pid'";
$result = mysqli_query($dbc,$sql);
$rows = mysqli_num_rows($result);
if ($rows) {
    $sql_update = "update usersperference set Scores = '$score' where UserID = '$uID' and RK='$pid' limit 1";
    if (mysqli_query($dbc,$sql_update)) {
        echo "<script LANGUAGE='javascript'>alert('Your preference has been updated!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='players_main.php';},1000);
                    </script>

                ";
    }
} else {
    $sql_insert = "insert into usersperference(UserID,RK,Scores) values ('$uID','$pid','$score')";
    if (mysqli_query($dbc, $sql_insert)) {
        echo "<script LANGUAGE='javascript'>alert('Your preference has been inserted!');</script>";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='players_main.php';},1000);
                    </script>

                ";
    }
}