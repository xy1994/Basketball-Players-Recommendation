<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Information</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <style>
        .grey{
            background-color:#f0f0f2;
        }
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
        <li class="current"><a href="team_main.php"> Teams</a></li>
        <li><a href="user_main.php"><i class="icon-user"></i> Users</a></li>
    </ul>
</div>
<br /><br /><br /><br /><br />

<div class="container">
    <table class="table table-hover table-bordered  ">
        <tr class="active"><th><a id = "image1" href="http://127.0.0.1/test_team?teamname=Atlanta Hawks"><img id = "image11" src="image/Atlanta Hawks.png" class="img-rounded"></a></th>
            <th><a id = "image2" href="http://127.0.0.1/team?teamname=Boston Celtics"><img src="image/Boston Celtics.png" id = "image21" class="img-rounded"></a></th>
            <th><a id = "image3" href="http://127.0.0.1/team?teamname=Brooklyn Nets"><img src="image/Brooklyn Nets.png" id = "image31" class="img-rounded"></a></th>
            <th><a id = "image4" href="http://127.0.0.1/team?teamname=Charlotte Hornets"><img src="image/Charlotte Hornets.png" id = "image41" class="img-rounded"></a></th>
            <th><a id = "image5" href="http://127.0.0.1/team?teamname=Chicago Bulls"><img src="image/Chicago Bulls.png" id = "image51" class="img-rounded"></a></th>
            <th><a id = "image6" href="http://127.0.0.1/team?teamname=Cleveland Cavaliers"><img src="image/Cleveland Cavaliers.png" id = "image61" class="img-rounded"></a></th>
        </tr>
        <tr><th><a id = "image7" href="http://127.0.0.1/team?teamname=Dallas Mavericks"><img id = "image71" src="image/Dallas Mavericks.png" class="img-rounded"></a></th>
            <th><a id = "image8" href="http://127.0.0.1/team?teamname=Denver Nuggets"><img src="image/Denver Nuggets.png" id = "image81" class="img-rounded"></a></th>
            <th><a id = "image9" href="http://127.0.0.1/team?teamname=Detroit Pistons"><img src="image/Detroit Pistons.png" id = "image91" class="img-rounded"></a></th>
            <th><a id = "image10" href="http://127.0.0.1/team?teamname=Golden State Warriors"><img src="image/Golden State Warriors.png" id = "image101" class="img-rounded"></a></th>
            <th><a id = "image11" href="http://127.0.0.1/team?teamname=Houston Rockets"><img src="image/Houston Rockets.png" id = "image111" class="img-rounded"></a></th>
            <th><a id = "image12" href="http://127.0.0.1/team?teamname=Indiana Pacers"><img src="image/Indiana Pacers.png" id = "image121" class="img-rounded"></a></th>
        </tr>
        <tr><th><a id = "image13" href="http://127.0.0.1/team?teamname=Los Angeles Clippers"><img id = "image131" src="image/Los Angeles Clippers.png" class="img-rounded"></a></th>
            <th><a id = "image14" href="http://127.0.0.1/team?teamname=Los Angeles Lakers"><img src="image/Los Angeles Lakers.png" id = "image141" class="img-rounded"></a></th>
            <th><a id = "image15" href="http://127.0.0.1/team?teamname=Memphis Grizzlies"><img src="image/Memphis Grizzlies.png" id = "image151" class="img-rounded"></a></th>
            <th><a id = "image16" href="http://127.0.0.1/team?teamname=Miami Heat"><img src="image/Miami Heat.png" id = "image161" class="img-rounded"></a></th>
            <th><a id = "image17" href="http://127.0.0.1/team?teamname=Milwaukee Bucks"><img src="image/Milwaukee Bucks.png" id = "image171" class="img-rounded"></a></th>
            <th><a id = "image18" href="http://127.0.0.1/team?teamname=Minnesota Timberwolves"><img src="image/Minnesota Timberwolves.png" id = "image181" class="img-rounded"></a></th>
        </tr>
        <tr><th><a id = "image19" href="http://127.0.0.1/team?teamname=New Orleans Pelicans"><img id = "image191" src="image/New Orleans Pelicans.png" class="img-rounded"></a></th>
            <th><a id = "image20" href="http://127.0.0.1/team?teamname=New York Knicks"><img src="image/New York Knicks.png" id = "image201" class="img-rounded"></a></th>
            <th><a id = "image21" href="http://127.0.0.1/team?teamname=Oklahoma City Thunder"><img src="image/Oklahoma City Thunder.png" id = "image211" class="img-rounded"></a></th>
            <th><a id = "image22" href="http://127.0.0.1/team?teamname=Orlando Magic"><img src="image/Orlando Magic.png" id = "image221" class="img-rounded"></a></th>
            <th><a id = "image23" href="http://127.0.0.1/team?teamname=Philadelphia 76ers"><img src="image/Philadelphia 76ers.png" id = "image231" class="img-rounded"></a></th>
            <th><a id = "image24" href="http://127.0.0.1/team?teamname=Phoenix Suns"><img src="image/Phoenix Suns.png" id = "image241" class="img-rounded"></a></th>
        </tr>
        <tr><th><a id = "image25" href="http://127.0.0.1/team?teamname=Portland Trail Blazers"><img id = "image251" src="image/Portland Trail Blazers.png" class="img-rounded"></a></th>
            <th><a id = "image26" href="http://127.0.0.1/team?teamname=Sacramento Kings"><img src="image/Sacramento Kings.png" id = "image261" class="img-rounded"></a></th>
            <th><a id = "image27" href="http://127.0.0.1/team?teamname=San Antonio Spurs"><img src="image/San Antonio Spurs.png" id = "image271" class="img-rounded"></a></th>
            <th><a id = "image28" href="http://127.0.0.1/team?teamname=Toronto Raptors"><img src="image/Toronto Raptors.png" id = "image281" class="img-rounded"></a></th>
            <th><a id = "image29" href="http://127.0.0.1/team?teamname=Utah Jazz"><img src="image/Utah Jazz.png" id = "image291" class="img-rounded"></a></th>
            <th><a id = "image30" href="http://127.0.0.1/team?teamname=Washington Wizards"><img src="image/Washington Wizards.png" id = "image301" class="img-rounded"></a></th>
        </tr>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>