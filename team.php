<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team information</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <style>
        .team_image{width: 300px;height: 300px;margin-top: 30px;margin-left: 30px;float: left;}
        .team_info{width: 350px;height: 400px;margin-left: 120px;margin-top: 30px; float: left;position: relative;}
        .radar{width: 300px;height: 300px;margin-left: 50px;margin-top: 30px;float: left;;position: relative;background: green;}
        .mainplayer{width: 1000px;height: 150px;margin-left: 200px;margin-bottom: 30px;position: relative;}

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
                <button class="large green"><i class="icon-home"></i> <a href = "login.php">log out</a></button>
            </form>
        </div>
    </header>
</div>

<div class="col_12 column">
    <!-- Menu Horizontal -->
    <ul class="menu">
        <li><a href="players_main.php"> Player</a></li>
        <li class="current"><a href="team_main.php"> Teams</a></li>
        <li><a href="user_main.php"><i class="icon-user"></i> Users</a></li>
    </ul>
</div>
<br /><br />

<div class="team_image">
    <img id = "teamimg" src="" width="400px" height="400px">
</div>
<table class="team_info"  style="font-size:18px">
    <tr>
        <td width = "20px" >
            Name
        </td>
        <td width="20px" id = 'id1'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Average points
        </td>
        <td width="20px" id = 'id2'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Average opponent points
        </td>
        <td width="20px" id ='id3'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Goal percentage
        </td>
        <td width="20px" id = 'id4'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Opponent goal percentage
        </td>
        <td width="20px" id = 'id5'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Average rebounds
        </td>
        <td width="20px" id = 'id6'>
            123
        </td>
    </tr>
    <tr>
        <td width="20px">
            Average assists
        </td>
        <td width="20px" id = 'id7'>
            123
        </td>
    </tr>

</table>


<div class="radar" id = "main" style="width: 480px;height:400px;float:right;">
</div>
<table class="mainplayer" style="vertical-align: middle;">
    <tr>
        <td></td>
        <td></td>
        <td style="font-size: 24px; vertical-align: text-top;" >Main Players</td>
    </tr>
    <tr>
        <td>
            <a id = "href1" href="login.php"><img src="" id = 'img1'></a>
        </td>
        <td>
            <a id = "href2" href="login.php"><img src="" id = 'img2'></a>
        </td>
        <td>
            <a id = "href3" href="login.php"><img src="" id = 'img3'></a>
        </td>
        <td>
            <a id = "href4" href="login.php"><img src="" id = 'img4'></a>
        </td>
        <td>
            <a id = "href5" href="login.php"><img src="" id = 'img5'></a>
        </td>
    </tr>

</table>

<?php
@$teamname=$_GET["teamname"];
//echo $teamname;

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql_team = "SELECT * FROM teams where TeamName = '$teamname'";
$target_team = $dbc->query($sql_team);
$final_team = mysqli_fetch_array($target_team, MYSQLI_ASSOC);
$points = $final_team["PS"];
$rebounds = $final_team["TRB"];
$assist = $final_team["AST"];
$steal = $final_team["STL"];
$block = $final_team["BLK"];
$goal = $final_team["FGP"];

$opoints = $final_team["OPS"];
$goalper = $goal."%";
$ogoal = $final_team["OFGP"]."%";

$teamimage = "image/".$teamname.".png";

$sql_player = "SELECT * FROM players where Team = '$teamname'";
$target_player = mysqli_query($dbc,$sql_player);
$x = 0;


while (($row = mysqli_fetch_array($target_player,MYSQLI_ASSOC)) && ($x<5)) {
    if($row["PTS"]>9 || $row["TRB"]>5 ||$row["AST"]>5) {
        $playerRK = $row["RK"];
        $playerRKarray[$x] = $playerRK;
        $string = "image/{$row["RK"]}.png";
        $playerimagearray[$x] = $string;
        $x = $x + 1;
    }
}


?>
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'));
    var dataBJ = [
        [<?php echo json_encode($points)?>,<?php echo json_encode($rebounds)?>,<?php echo json_encode($assist)?>,<?php echo json_encode($steal)?>,<?php echo json_encode($block)?>,<?php echo json_encode($goal)?>,100]
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
            text: 'Team stats',
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
                {name: 'points', max: 114.9},
                {name: 'rebound', max: 48.6},
                {name: 'assist', max: 28.9},
                {name: 'steal', max: 10.0},
                {name: 'block', max: 6.5},
                {name: 'goal percentage', max: 48.7}
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

    document.getElementById('teamimg').src=<?php echo json_encode($teamimage)?>;

    document.getElementById("id1").innerHTML=<?php echo json_encode($teamname)?>;
    document.getElementById("id2").innerHTML=<?php echo json_encode($points)?>;
    document.getElementById("id3").innerHTML=<?php echo json_encode($opoints)?>;
    document.getElementById("id4").innerHTML=<?php echo json_encode($goalper)?>;
    document.getElementById("id5").innerHTML=<?php echo json_encode($ogoal)?>;
    document.getElementById("id6").innerHTML=<?php echo json_encode($rebounds)?>;
    document.getElementById("id7").innerHTML=<?php echo json_encode($assist)?>;

    document.getElementById("href1").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerRKarray[0])?>;
    document.getElementById("href2").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerRKarray[1])?>;
    document.getElementById("href3").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerRKarray[2])?>;
    document.getElementById("href4").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerRKarray[3])?>;
    document.getElementById("href5").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerRKarray[4])?>;

    document.getElementById('img1').src=<?php echo json_encode($playerimagearray[0])?>;
    document.getElementById('img2').src=<?php echo json_encode($playerimagearray[1])?>;
    document.getElementById('img3').src=<?php echo json_encode($playerimagearray[2])?>;
    document.getElementById('img4').src=<?php echo json_encode($playerimagearray[3])?>;
    document.getElementById('img5').src=<?php echo json_encode($playerimagearray[4])?>;
</script>
</body>
</html>

