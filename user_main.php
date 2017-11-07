<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Information</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <style>
        .grey{
            background-color:#f0f0f2;}

        .user_table{width: 300px; height: 50px;margin-left: 0px;}
        .left{width: 300px;height: 160px;margin-left:15px; border: 1px;margin-top: 0px;position: relative; background: #ccc;float: left;}

        .u_right{width: 375px;height: 160px; margin-top: 62px;position: relative; background: #ccc;margin-left: 965px;}
        .u_mid{width: 650px;height: 160px;margin-top: 0px;position: relative;background: #ccc;margin-left: 0px;float: left;text-align: center;}

        .box3{
            position:relative;
            float:right;
            bottom:10px;
            right:460px;
            font-size:250%;
            color:red;}
    </style>

</head>
<body>


<div class="grid">
    <header>
        <div class="col_6 column">
            <h1><a href=""><strong>NBA</strong>information</a></h1>
        </div>
        <div class="col_6 column right">
            <form id="add_job_link">
                <button type="button" class="large green "  onclick="window.location.href='login.php'" > <span class="glyphicon glyphicon-home"></span> log out</button>
            </form>
        </div>
    </header>
</div>

<div class="col_12 column">
    <!-- Menu Horizontal -->
    <ul class="menu">
        <li><a href="players_main.php"> Player</a></li>
        <li><a href="team_main.php"> Teams</a></li>
        <li class="current"><a href="user_main.php"><i class="icon-user"></i> Users</a></li>
    </ul>
</div>
<br /><br /><br /><br /><br />


<div class=left>
    <table class=user_table style="text-align: center; vertical-align: middle;">
        <tr>
            <td  width="150px" style="font-size: 20px; text-align: center;font-family: time; "> welcome, </td>
            <td id="username1" width="50px" style="font-size: 16px;text-align: left;font-family: time;"></td>
        </tr>
        <tr>
            <td width="120px" style="font-size: 16px; text-align: center;font-family: time;">Your Email:</td>
            <td id="email1" width="100px" style="font-size: 16px;font-family: time;"></td>
        </tr>
        <tr>
            <td id="time" style="font-size: 18px; text-align: center;font-family: time;">
                <script>
                    document.getElementById('time').innerHTML=new Date().toLocaleString();

                    setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1000);
                </script>
            </td>
        </tr>
    </table>
</div>
<div class="u_mid">
    <img src="image/welcome.png" style="width: 550px;height: 120px;">
</div>
<div class="u_right">
    <table >
        <tr>
            <td width="160px" style="font-size: 16px;text-align: center;font-family: time;">You have scored</td>
            <td  id="playerno1" width="30px" style="font-size: 18px; color: red; font-style: bold; text-align: center;vertical-align: text-top"></td>
            <td width="30px" style="font-size: 16px;font-family: time;">players</td>
        </tr>
        <tr>
            <td style="font-size: 16px; text-align:center;font-family: time;">
                The favorite position
            </td>
            <td  id="pos1" width="50px" style="font-size: 18px; color: red; font-style: bold; text-align: center;vertical-align: text-top"></td>
        </tr>
        <tr>
            <td style="font-size: 16px;font-family: time;text-align: center;">
                They usually comes from
            </td>
            <td  id="team1" width="150px" style="font-size: 12px; color: red; font-style: bold; text-align: center;vertical-align: text-top"></td>
        </tr>
    </table>
</div>

</div>



<p class="box3" style="right:430px;position:relative;font-family:Times;">You have viewed and evaluated them</p>
<table class="table table-hover table-bordered  " >
    <tr class="active" ><th style="height:50px;width:290px"><p id = 'name1'></p></th>
        <th style="height:50px;width:290px"><p id = 'name2'></p></th>
        <th style="height:50px;width:290px"><p id = 'name3'></p></th>
        <th style="height:50px;width:290px"><p id = 'name4'></p></th>
        <th style="height:50px;width:290px"><p id = 'name5'></p></th>
    </tr>
    <tr class="active" ><th style="height:50px;width:290px"><a id = "img01" href=""><img src="" id='img1' class="img-rounded"></a></th>
        <th style="height:50px;width:290px"><a id = "img02" href=""><img src="" id = 'img2' class="img-rounded"></a></th>
        <th style="height:50px;width:290px"><a id = "img03" href=""><img src="" id = 'img3' class="img-rounded"></a></th>
        <th style="height:50px;width:290px"><a id = "img04" href=""><img src="" id = 'img4' class="img-rounded"></a></th>
        <th style="height:50px;width:290px"><a id = "img05" href=""><img src="" id = 'img5' class="img-rounded"></a></th>
    </tr>
</table>

<p style="position:relative;bottom:-40px;left:120px;font-size:150%;color:red;font-family:Times;">Other similiar users also like them!</p>
<p style="position:relative;bottom:10px;float:right;right:120px;font-size:150%;color:red;font-family:Times;">They are similar to the players you like!</p>
<table class="table table-bordered">
    <tr><th class="active" style="height:50px;width:290px"><p id = 'uname1'></p></th>
        <th class="active" style="height:50px;width:290px"><p id = 'uname2'></p></th>
        <th></th><th></th>
        <th class="active" style="height:50px;width:290px"><p id = 'iname1'></p></th>
        <th class="active" style="height:50px;width:290px"><p id = 'iname2'></p></th>
    </tr>
    <tr><th class="active" style="height:50px;width:290px"><a id = "uimg01" href=""><img id = "uimg1" src="" class="img-rounded"></a></th>
        <th class="active" style="height:50px;width:290px"><a id = "uimg02" href=""><img src="" id = "uimg2" class="img-rounded"></a></th>
        <th></th><th></th>
        <th class="active" style="height:50px;width:290px"><a id = "iimg01" href=""><img id = "iimg1" src="" class="img-rounded"></a></th>
        <th class="active" style="height:50px;width:290px"><a id = "iimg02" href=""><img src="" id = "iimg2" class="img-rounded"></a></th>
    </tr>
</table>

<?php
$ID = $_COOKIE['UserID'];

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql_user = "SELECT * FROM users where UserID = '$ID'";
$user_result = $dbc->query($sql_user);
$final = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
$name = $final["UserName"];
$email = $final["Email"];
$str = "hello,dear ".$name."!";



require_once("java/Java.inc");
java_require("user_based_recommendation.jar");
$recommend_user = new Java("project.user_recommend");
$result = $recommend_user->the_user_recommendation($ID);
$len = $recommend_user->getlength($ID);
$intlen = java_cast($len, "Integer");
if($intlen<2) {
   // echo "<script LANGUAGE='javascript'>alert('No enough result! Please add more information about your preference!');</script>";
    $already_image_user = array();
    $already_href_user = array();
    $already_name_user = array();
    $intlen = 0;
}
else {
    $already_user = 0;
    for ($x = 0; $x < 2; ++$x) {
        $number = java_cast($result[$x], "Integer");
        $sql_recommend = "SELECT * FROM players where RK = '$number'";
        $target_recommend = mysqli_query($dbc, $sql_recommend);
        $recommend_result = mysqli_fetch_array($target_recommend, MYSQLI_ASSOC);
        $string = "image/{$recommend_result["RK"]}.png";
        $already_name_user[$already_user] = $recommend_result["PlayerName"];
        $already_image_user[$already_user] = $string;
        $already_href_user[$already_user] = "http://127.0.0.1/player?id=".$number;
        $already_user = $already_user+1;
    }
}


    require_once("java/Java.inc");
    java_require("item_based_recommendation.jar");
    $recommend_item = new Java("project1.item_recommend");
    $result = $recommend_item->the_item_recommendation($ID);
    $len = $recommend_item->getlength($ID);
    $intlen1 = java_cast($len, "Integer");
    if ($intlen1 < 2) {
        //echo "<script LANGUAGE='javascript'>alert('No enough result! Please add more information about your preference!');</script>";
        $already_image_item = array();
        $already_href_item = array();
        $already_name_item = array();
        $intlen1 = 0;
    } else {
        $already_item = 0;
        for ($x = 0; $x < 2; ++$x) {
            echo "<br>";
        //    echo "item-based recommend:";
            $number = java_cast($result[$x], "Integer");
            //echo $number;
            $sql_recommend = "SELECT * FROM players where RK = '$number'";
            $target_recommend = mysqli_query($dbc, $sql_recommend);
            $recommend_result = mysqli_fetch_array($target_recommend, MYSQLI_ASSOC);
        //    echo $recommend_result["PlayerName"];
            $string = "image/{$recommend_result["RK"]}.png";
            $already_name_item[$already_item] = $recommend_result["PlayerName"];
            $already_image_item[$already_item] = $string;
            $already_href_item[$already_item] = "http://127.0.0.1/player?id=".$number;
         //   echo "<img src=$string>";
         //   echo "<br>";
            $already_item = $already_item+1;
        }
    }

$sql_reference = "SELECT * FROM usersperference where UserID = '$ID'";
$user_like = $dbc->query($sql_reference);
//$final_like = mysqli_fetch_array($user_like, MYSQLI_ASSOC);
//$final_playerid = $final_like["RK"];
$curr = 0;
$x_already = 0;
    while ($row = $user_like->fetch_assoc()) {
     //   echo "<br>";
     //   echo "You have already viewed:";
        $temp = $row["RK"];
        $already_RK[$x_already] = $temp;
        $sql_likeplayer = "SELECT * FROM players where RK = '$temp'";
        $target_likeplayer = mysqli_query($dbc, $sql_likeplayer);
        $likeplayer_result = mysqli_fetch_array($target_likeplayer, MYSQLI_ASSOC);
    //    echo $likeplayer_result["PlayerName"];
        $already_name[$x_already] = $likeplayer_result["PlayerName"];
        $string = "image/{$row["RK"]}.png";
      //  echo "<img src=$string>";
        $already_image[$x_already] = $string;
        $already_href[$x_already] = "http://127.0.0.1/player?id=".$temp;
        //$curr = $curr+1;
        $x_already = $x_already+1;
    }
   // echo $x_already;
//echo $already_image[0];

$totalnumber = 0;
$user_like = $dbc->query($sql_reference);
while (($row = $user_like->fetch_assoc()) ) {
    $totalnumber = $totalnumber + 1;
}
//echo $totalnumber;

$sql_team = "SELECT Team,count(*) FROM players where RK in (SELECT RK FROM usersperference WHERE UserID = '$ID')  group by  Team order by count(*) desc";
$user_team = $dbc->query($sql_team);
$x = 0;
while (($row = $user_team->fetch_assoc()) && $x==0 ) {
    $per_team = $row["Team"];
    $x = 1;
}
//echo $per_team;

$sql_pos = "SELECT Pos,count(*) FROM players where RK in (SELECT RK FROM usersperference WHERE UserID = '$ID')  group by  Pos order by count(*) desc";
$user_pos = $dbc->query($sql_pos);
$x = 0;
while (($row = $user_pos->fetch_assoc()) && $x==0 ) {
    $per_pos = $row["Pos"];
    $x = 1;
}
//echo $per_pos;





?>

<script>
var already = <?php echo json_encode($x_already)?>;
if(already>5){
    already = 5;
}
var already_image = <?php echo json_encode($already_image)?>;
var already_href = <?php echo json_encode($already_href)?>;
var already_name = <?php echo json_encode($already_name)?>;
var myimgid=new Array()
myimgid[0]="img1";
myimgid[1]="img2";
myimgid[2]="img3";
myimgid[3]="img4";
myimgid[4]="img5";
var myhrefid = new Array()
myhrefid[0] = "img01";
myhrefid[1] = "img02";
myhrefid[2] = "img03";
myhrefid[3] = "img04";
myhrefid[4] = "img05";
var myname = new Array()
myname[0] = "name1";
myname[1] = "name2";
myname[2] = "name3";
myname[3] = "name4";
myname[4] = "name5";


for(var x = 0;x<already;x++){
    document.getElementById(myimgid[x]).src =already_image[x];
    document.getElementById(myhrefid[x]).href = already_href[x];
    document.getElementById(myname[x]).innerHTML=already_name[x];
}

var already_image_user = <?php echo json_encode($already_image_user)?>;
var already_href_user = <?php echo json_encode($already_href_user)?>;
var already_name_user = <?php echo json_encode($already_name_user)?>;


var myuimgid=new Array()
myuimgid[0]="uimg1";
myuimgid[1]="uimg2";

var myuhrefid = new Array()
myuhrefid[0] = "uimg01";
myuhrefid[1] = "uimg02";

var myuname = new Array()
myuname[0] = "uname1";
myuname[1] = "uname2";


var unumber = <?php echo json_encode($intlen)?>;
for(var x = 0;x<unumber;x++){
    document.getElementById(myuimgid[x]).src =already_image_user[x];
    document.getElementById(myuhrefid[x]).href =already_href_user[x];
    document.getElementById(myuname[x]).innerHTML =already_name_user[x];
}

var already_image_item = <?php echo json_encode($already_image_item)?>;
var already_href_item = <?php echo json_encode($already_href_item)?>;
var already_name_item = <?php echo json_encode($already_name_item)?>;

var myiimgid=new Array()
myiimgid[0]="iimg1";
myiimgid[1]="iimg2";

var myihrefid = new Array()
myihrefid[0] = "iimg01";
myihrefid[1] = "iimg02";

var myiname = new Array()
myiname[0] = "iname1";
myiname[1] = "iname2";

var unumber1 = <?php echo json_encode($intlen1)?>;
for(var x = 0;x<unumber1;x++){
    document.getElementById(myiimgid[x]).src =already_image_item[x];
    document.getElementById(myihrefid[x]).href =already_href_item[x];
    document.getElementById(myiname[x]).innerHTML =already_name_item[x];
}

document.getElementById('username1').innerHTML =<?php echo json_encode($name)?>;
document.getElementById('email1').innerHTML =<?php echo json_encode($email)?>;

document.getElementById('playerno1').innerHTML =<?php echo json_encode($totalnumber)?>;
document.getElementById('pos1').innerHTML =<?php echo json_encode($per_pos)?>;
document.getElementById('team1').innerHTML =<?php echo json_encode($per_team)?>;


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>