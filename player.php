<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Player Information</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <style>
        .box{
            position:relative;
            float:right;
            bottom:10px;
            right:480px;
            font-size:150%;
        }
        .box2{
            position:relative;
            float:right;
            bottom:10px;
            right:560px;
            font-size:250%;
            color:red;
        }
        .box3{
            position:relative;
            float:right;
            bottom:10px;
            right:350px;
            font-size:250%;
            color:red;
        }
        .table{
            font-size:130%;
        }
        .table2{
            font-size:130%;
            position:relative;
            float:right;
            bottom:-30px;
        }
    </style>

    <script src="echarts.js"></script>
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
        <li class="current"><a href="players_main.php"> Player</a></li>
        <li><a href="team_main.php"> Teams</a></li>
        <li><a href="user_main.php"><i class="icon-user"></i> Users</a></li>
    </ul>
</div>
<br /><br /><br /><br /><br />

<div>
    <table class="table">
        <tr><th>
                <table class="table2">
                    <tr><th>Name</th><th id ='1'></th></tr>
                    <tr><th>Positon</th><th id = '2'></th></tr>
                    <tr><th>Age</th><th id = '3'></th></tr>
                    <tr><th>Team</th><th id = '4'></th></tr>
                    <tr><th>Points</th><th id = '5'></th></tr>
                    <tr><th>Rebound</th><th id = '6'></th></tr>
                    <tr><th>Assist</th><th id = '7'></th></tr>
                    <tr><th>Block</th><th id = '8'></th></tr>
                    <tr><th>Turnover</th><th id = '9'></th></tr>
                </table>
            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th><img id = "img" src="" style="width: 240px;height:360px;float:right;"></th>
            <th><div id="main" style="width: 480px;height:400px;float:right;"></div></th></tr>
    </table>
</div>

<div class="box">
    <form class="form-inline">
        <select id="category_select">
            <option value="">How do you rate your preference to him?</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="button"  id="butt"  onclick="window.location.href='checkscore.php?pid=10&score=3'" > <span class="glyphicon glyphicon-heart"></span> Evaluate</button>
    </form>
</div>
<br /><br /><br /><br /><br />


<p class="box2">Advanced Statistics</p>

<div class="table">
    <table class="table table-hover table-bordered">
        <tr><th>goals</th><th>goal attempts</th><th>goal percentage</th><th>2 point percentage</th><th>3 point percentage</th><th>free throw percentage</th><th>fouls</th></tr>
        <tr><td id = '10'>content</td><td id = '11'>content</td><td id = '12'>content</td><td id = '13'>content</td><td id = '14'>content</td><td id = '15'>content</td><td id = '16'>content</td></tr>
    </table>
</div>





<p class="box3" style="text-align:center">These players are similar to him, have a look!</p>
    <table class="table table-hover table-bordered  ">
        <tr class="active"><th><p id = 'name1'>abcd</p></th>
            <th><p id = 'name2'>abcd</p></th>
            <th><p id = 'name3'>abcd</p></th>
            <th><p id = 'name4'>abcd</p></th>
            <th><p id = 'name5'>abcd</p></th>
        </tr>
        <tr class="active"><th><a id = "image01" href="http://127.0.0.1/player?id=Atlanta Hawks"><img id = "image1" src="image/Atlanta Hawks.png" class="img-rounded"></a></th>
            <th><a id = "image02" href="http://127.0.0.1/player?id=Boston Celtics"><img src="image/Boston Celtics.png" id = "image2" class="img-rounded"></a></th>
            <th><a id = "image03" href="http://127.0.0.1/player?id=Brooklyn Nets"><img src="image/Brooklyn Nets.png" id = "image3" class="img-rounded"></a></th>
            <th><a id = "image04" href="http://127.0.0.1/player?id=Charlotte Hornets"><img src="image/Charlotte Hornets.png" id = "image4" class="img-rounded"></a></th>
            <th><a id = "image05" href="http://127.0.0.1/player?id=Chicago Bulls"><img src="image/Chicago Bulls.png" id = "image5" class="img-rounded"></a></th>
        </tr>
    </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>


<?php
@$id=$_GET["id"];
//echo $id;
$uID = $_COOKIE['UserID'];
//echo $uID;

//setcookie('playerid',$id);

//setcookie("playerid",$id);
//setcookie("userid",$uID);

echo "<br>";
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql_name = "SELECT * FROM players where RK = '$id'";
$target_name = $dbc->query($sql_name);
$team_target = mysqli_fetch_array($target_name, MYSQLI_ASSOC);
$points = pow($team_target["PTS"],1/3)*9.67;
$rebounds = pow($team_target["TRB"],1/3)*6.02;
$assist = pow($team_target["AST"],1/3)*5.15;
$steal = pow($team_target["STL"],1/3)*3.55;
$block = pow($team_target["BLK"],1/3)*2.68;
$goal = sqrt($team_target["FGP"])*0.99;


$name = $team_target["PlayerName"];
$position = $team_target["Pos"];
$age = $team_target["Age"];
$team = $team_target["Team"];
$points1 = $team_target["PTS"];
$rebounds1 = $team_target["TRB"];
$assist1 = $team_target["AST"];
$block1 = $team_target["BLK"];
$turnover = $team_target["TOV"];

$goals = $team_target["FG"];
$goalatt = $team_target["FGA"];
$goalperraw = $team_target["FGP"]*100;
$goalper = $goalperraw."%";
$twoperraw = $team_target["2PP"]*100;
$twoper = $twoperraw."%";
$threeperraw = $team_target["3PP"]*100;
$threeper = $threeperraw."%";
$freeperraw = $team_target["FTP"]*100;
$freeper = $freeperraw."%";
$foul = $team_target["PF"];

$sql = "SELECT * FROM ability where RK = '$id'";
$target = $dbc->query($sql);
$ability_target = mysqli_fetch_array($target, MYSQLI_NUM);
/*$inside = $ability_target[1];
$shooting = $ability_target[2];
$defense = $ability_target[3];
$teamwork = $ability_target[4]; */

$sql_name = "SELECT * FROM players where RK = '$id'";
$target_name = $dbc->query($sql_name);
if ($target_name->num_rows > 0) {
    while ($row = $target_name->fetch_assoc()) {
        //echo "<br> name:" . $row["PlayerName"];
        $string = "image/{$row["RK"]}.png";
        //echo "<img src=$string>";
    }
}

for ($x = 1; $x < 529; $x++) {
    $sql_source = "SELECT * FROM ability where RK = '$x'";
    $source = $dbc->query($sql_source);
    $ability_source = mysqli_fetch_array($source, MYSQLI_NUM);
    $similarity[$x - 1] = ($ability_source[1] * $ability_target[1] + $ability_source[2] * $ability_target[2]
            + $ability_source[3] * $ability_target[3] + $ability_source[4] * $ability_target[4]) / (sqrt($ability_source[1] * $ability_source[1]
                + $ability_source[2] * $ability_source[2] + $ability_source[3] * $ability_source[3] + $ability_source[4] * $ability_source[4]) * sqrt
            ($ability_target[1] * $ability_target[1] + $ability_target[2] * $ability_target[2] + $ability_target[3] * $ability_target[3] +
                $ability_target[4] * $ability_target[4]));
}
unset($similarity[array_search(max($similarity), $similarity)]);
for ($x = 0; $x < 5; $x++) {
    $result[$x] = array_search(max($similarity), $similarity) + 1;
    unset($similarity[array_search(max($similarity), $similarity)]);
}
for ($x = 0; $x < 5; $x++) {
    $player[$x] = "image/".$result[$x].".png";
    $playerhref[$x] = "http://127.0.0.1/player?id=".$result[$x];
    $sql_name = "SELECT * FROM players where RK = '$result[$x]'";
    $player_result = $dbc->query($sql_name);
    $final = mysqli_fetch_array($player_result, MYSQLI_ASSOC);
    $playername[$x] =  $final["PlayerName"];
 //   echo $player[0];
}
?>

<script>
    document.getElementById("butt").onclick = function() {
        var t = document.getElementById("category_select");
        var x = t.options[t.selectedIndex].value;
        if(x!=1 && x!=2 && x!=3 && x!=4 && x!=5) {
            alert("Please select your rating!");
        }
        else{
            window.location.href='checkscore.php?pid='+<?php echo json_encode($id)?>+'&score='+x;
        }
    }


    document.getElementById('1').innerHTML=<?php echo json_encode($name)?>;
    document.getElementById('2').innerHTML=<?php echo json_encode($position)?>;
    document.getElementById('3').innerHTML=<?php echo json_encode($age)?>;
    document.getElementById('4').innerHTML=<?php echo json_encode($team)?>;
    document.getElementById('5').innerHTML=<?php echo json_encode($points1)?>;
    document.getElementById('6').innerHTML=<?php echo json_encode($rebounds1)?>;
    document.getElementById('7').innerHTML=<?php echo json_encode($assist1)?>;
    document.getElementById('8').innerHTML=<?php echo json_encode($block1)?>;
    document.getElementById('9').innerHTML=<?php echo json_encode($turnover)?>;

    document.getElementById('10').innerHTML=<?php echo json_encode($goals)?>;
    document.getElementById('11').innerHTML=<?php echo json_encode($goalatt)?>;
    document.getElementById('12').innerHTML=<?php echo json_encode($goalper)?>;
    document.getElementById('13').innerHTML=<?php echo json_encode($twoper)?>;
    document.getElementById('14').innerHTML=<?php echo json_encode($threeper)?>;
    document.getElementById('15').innerHTML=<?php echo json_encode($freeper)?>;
    document.getElementById('16').innerHTML=<?php echo json_encode($foul)?>;


    document.getElementById("name1").innerHTML=<?php echo json_encode($playername[0])?>;
    document.getElementById("name2").innerHTML=<?php echo json_encode($playername[1])?>;
    document.getElementById("name3").innerHTML=<?php echo json_encode($playername[2])?>;
    document.getElementById("name4").innerHTML=<?php echo json_encode($playername[3])?>;
    document.getElementById("name5").innerHTML=<?php echo json_encode($playername[4])?>;

    document.getElementById('img').src=<?php echo json_encode($string)?>;

document.getElementById('image1').src=<?php echo json_encode($player[0])?>;
document.getElementById('image2').src=<?php echo json_encode($player[1])?>;
document.getElementById('image3').src=<?php echo json_encode($player[2])?>;
document.getElementById('image4').src=<?php echo json_encode($player[3])?>;
document.getElementById('image5').src=<?php echo json_encode($player[4])?>;

document.getElementById("image01").href=<?php echo json_encode($playerhref[0])?>;
document.getElementById("image02").href=<?php echo json_encode($playerhref[1])?>;
document.getElementById("image03").href=<?php echo json_encode($playerhref[2])?>;
document.getElementById("image04").href=<?php echo json_encode($playerhref[3])?>;
document.getElementById("image05").href=<?php echo json_encode($playerhref[4])?>;

</script>


<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'));
    var dataBJ = [
        [<?php echo json_encode($points)?>,<?php echo json_encode($rebounds)?>,<?php echo json_encode($assist)?>,<?php echo json_encode($steal)?>,<?php echo json_encode($block)?>,<?php echo json_encode($goal)?>]
    ];


    var lineStyle = {
        normal: {
            width: 1,
            opacity: 0.5
        }
    }


    myChart.setOption({

        backgroundColor: '#161627',
        title: {
            text: 'Player stats',
            left: 'center',
            textStyle: {
                color: '#eee'
            }
        },

        legend: {
            bottom: 5,
            itemGap: 10,
            textStyle: {
                color: '#fff',
                fontSize: 14
            },
        },
        radar: {
            indicator: [
                {name: 'points', max: 30.1},
                {name: 'rebound', max:14.8},
                {name: 'assist', max: 11.7},
                {name: 'steal', max:6.7},
                {name: 'block', max: 3.7},
                {name: 'goal percentage', max: 1.00}
            ],
            shape: 'circle',
            splitNumber: 1,
            name: {
                textStyle: {
                    color: 'rgb(238, 197, 102)'
                }
            },
            splitLine: {
                lineStyle: {
                    color: [
                        'rgba(238, 197, 102, 0.1)', 'rgba(238, 197, 102, 0.2)',
                        'rgba(238, 197, 102, 0.4)', 'rgba(238, 197, 102, 0.6)',
                        'rgba(238, 197, 102, 0.8)', 'rgba(238, 197, 102, 1)'
                    ].reverse()
                }
            },
            splitArea: {
                show: false
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(238, 197, 102, 0.5)'
                }
            }
        },
        series: [
            {
                type: 'radar',
                lineStyle: lineStyle,
                data: dataBJ,
                symbol: 'none',
                itemStyle: {
                    normal: {
                        color: '#F9713C'
                    }
                },
                areaStyle: {
                    normal: {
                        opacity: 0.1
                    }
                }
            }]

    })

</script>

