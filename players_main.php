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
          <li class="current"><a href="players_main.php"> Player</a></li>
          <li><a href="team_main.php"> Teams</a></li>
          <li><a href="user_main.php"><i class="icon-user"></i> Users</a></li>
      </ul>
  </div>
  <br /><br /><br /><br /><br />
    <div class="container">
      <table class="table table-hover table-bordered  ">
          <tr class="active"><th><p id = 'id1'>abcd</p></th>
              <th><p id = 'id2'>abcd</p></th>
              <th><p id = 'id3'>abcd</p></th>
              <th><p id = 'id4'>abcd</p></th>
              <th><p id = 'id5'>abcd</p></th>
              <th><p id = 'id6'>abcd</p></th>
              <th><p id = 'id7'>abcd</p></th>
          </tr>
        <tr class="active"><th><a id = "image1" href="http://127.0.0.1/test_player?id=100"><img id = "image011" src="image/1.png"  class="img-circle"></a></th>
          <th><a id = "image2" href=login.php><img src="image/20.png" id = "image021" class="img-circle"></a></th>
          <th><a id = "image3" href="login.php"><img src="image/3.png" id = "image31" class="img-circle"></a></th>
          <th><a id = "image4" href="login.php"><img src="image/4.png" id = "image41" class="img-circle"></a></th>
          <th><a id = "image5" href="login.php"><img src="image/5.png" id = "image51" class="img-circle"></a></th>
          <th><a id = "image6" href="login.php"><img src="image/6.png" id = "image61" class="img-circle"></a></th>
          <th><a id = "image7" href="login.php"><img src="image/7.png" id = "image71" class="img-circle"></a></th>
        </tr>
          <tr class="active"><th><p id = 'id8'>abcd</p></th>
              <th><p id = 'id9'>abcd</p></th>
              <th><p id = 'id10'>abcd</p></th>
              <th><p id = 'id11'>abcd</p></th>
              <th><p id = 'id12'>abcd</p></th>
              <th><p id = 'id13'>abcd</p></th>
              <th><p id = 'id14'>abcd</p></th>
          </tr>
        <tr><th><a id = "image8" href="login.php"><img src="image/1.png"  id = "image81" class="img-circle"></a></th>
          <th><a id = "image9" href="login.php"><img src="image/2.png" id = "image91" class="img-circle"></a></th>
          <th><a id = "image10" href="login.php"><img src="image/3.png" id = "image101" class="img-circle"></a></th>
          <th><a id = "image11" href="login.php"><img src="image/4.png" id = "image111" class="img-circle"></a></th>
          <th><a id = "image12" href="login.php"><img src="image/5.png" id = "image121" class="img-circle"></a></th>
          <th><a id = "image13" href="login.php"><img src="image/6.png" id = "image131" class="img-circle"></a></th>
          <th><a id = "image14" href="login.php"><img src="image/7.png" id = "image141" class="img-circle"></a></th></tr>
          <tr class="active"><th><p id = 'id15'>abcd</p></th>
              <th><p id = 'id16'>abcd</p></th>
              <th><p id = 'id17'>abcd</p></th>
              <th><p id = 'id18'>abcd</p></th>
              <th><p id = 'id19'>abcd</p></th>
              <th><p id = 'id20'>abcd</p></th>
              <th><p id = 'id21'>abcd</p></th>
          </tr>
        <tr><th><a id = "image15" href="login.php"><img src="image/1.png"  id = "image151" class="img-circle"></a></th>
          <th><a id = "image16" href="login.php"><img src="image/2.png" id = "image161" class="img-circle"></a></th>
          <th><a id = "image17" href="login.php"><img src="image/3.png" id = "image171" class="img-circle"></a></th>
          <th><a id = "image18" href="login.php"><img src="image/4.png" id = "image181" class="img-circle"></a></th>
          <th><a id = "image19" href="login.php"><img src="image/5.png" id = "image191" class="img-circle"></a></th>
          <th><a id = "image20" href="login.php"><img src="image/6.png" id = "image201" class="img-circle"></a></th>
          <th><a id = "image21" href="login.php"><img src="image/7.png" id = "image211" class="img-circle"></a></th>
        </tr>
      </table>
    </div>

    <?php
    $ID = $_COOKIE['UserID'];
    echo $ID;
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS', '');
    define('DB_NAME','basketball');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    for($x = 0;$x<21;$x++){
        $playerid[$x] = rand(1,528);
        $player[$x] = "image/".$playerid[$x].".png";
        $tempid = $playerid[$x];
        $sql_name = "SELECT * FROM players where RK = '$tempid'";
        $player_result = $dbc->query($sql_name);
        $final = mysqli_fetch_array($player_result, MYSQLI_ASSOC);
        $playername[$x] =  $final["PlayerName"];
    }
    ?>



    <script>
    document.getElementById('image011').src=<?php echo json_encode($player[0])?>;
    document.getElementById('image021').src=<?php echo json_encode($player[1])?>;
    document.getElementById('image31').src=<?php echo json_encode($player[2])?>;
    document.getElementById('image41').src=<?php echo json_encode($player[3])?>;
    document.getElementById('image51').src=<?php echo json_encode($player[4])?>;;
    document.getElementById('image61').src=<?php echo json_encode($player[5])?>;
    document.getElementById('image71').src=<?php echo json_encode($player[6])?>;
    document.getElementById('image81').src=<?php echo json_encode($player[7])?>;
    document.getElementById('image91').src=<?php echo json_encode($player[8])?>;
    document.getElementById('image101').src=<?php echo json_encode($player[9])?>;
    document.getElementById('image111').src=<?php echo json_encode($player[10])?>;
    document.getElementById('image121').src=<?php echo json_encode($player[11])?>;
    document.getElementById('image131').src=<?php echo json_encode($player[12])?>;
    document.getElementById('image141').src=<?php echo json_encode($player[13])?>;
    document.getElementById('image151').src=<?php echo json_encode($player[14])?>;
    document.getElementById('image161').src=<?php echo json_encode($player[15])?>;
    document.getElementById('image171').src=<?php echo json_encode($player[16])?>;
    document.getElementById('image181').src=<?php echo json_encode($player[17])?>;
    document.getElementById('image191').src=<?php echo json_encode($player[18])?>;
    document.getElementById('image201').src=<?php echo json_encode($player[19])?>;
    document.getElementById('image211').src=<?php echo json_encode($player[20])?>;
    </script>


    <script>
        document.getElementById("image1").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[0])?>;
        document.getElementById("image2").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[1])?>;
        document.getElementById("image3").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[2])?>;
        document.getElementById("image4").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[3])?>;
        document.getElementById("image5").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[4])?>;
        document.getElementById("image6").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[5])?>;
        document.getElementById("image7").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[6])?>;
        document.getElementById("image8").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[7])?>;
        document.getElementById("image9").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[8])?>;
        document.getElementById("image10").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[9])?>;
        document.getElementById("image11").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[10])?>;
        document.getElementById("image12").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[11])?>;
        document.getElementById("image13").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[12])?>;
        document.getElementById("image14").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[13])?>;
        document.getElementById("image15").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[14])?>;
        document.getElementById("image16").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[15])?>;
        document.getElementById("image17").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[16])?>;
        document.getElementById("image18").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[17])?>;
        document.getElementById("image19").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[18])?>;
        document.getElementById("image20").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[19])?>;
        document.getElementById("image21").href="http://127.0.0.1/player?id="+<?php echo json_encode($playerid[20])?>;
    </script>


    <script>
        document.getElementById("id1").innerHTML=<?php echo json_encode($playername[0])?>;
        document.getElementById("id2").innerHTML=<?php echo json_encode($playername[1])?>;
        document.getElementById("id3").innerHTML=<?php echo json_encode($playername[2])?>;
        document.getElementById("id4").innerHTML=<?php echo json_encode($playername[3])?>;
        document.getElementById("id5").innerHTML=<?php echo json_encode($playername[4])?>;
        document.getElementById("id6").innerHTML=<?php echo json_encode($playername[5])?>;
        document.getElementById("id7").innerHTML=<?php echo json_encode($playername[6])?>;
        document.getElementById("id8").innerHTML=<?php echo json_encode($playername[7])?>;
        document.getElementById("id9").innerHTML=<?php echo json_encode($playername[8])?>;
        document.getElementById("id10").innerHTML=<?php echo json_encode($playername[9])?>;
        document.getElementById("id11").innerHTML=<?php echo json_encode($playername[10])?>;
        document.getElementById("id12").innerHTML=<?php echo json_encode($playername[11])?>;
        document.getElementById("id13").innerHTML=<?php echo json_encode($playername[12])?>;
        document.getElementById("id14").innerHTML=<?php echo json_encode($playername[13])?>;
        document.getElementById("id15").innerHTML=<?php echo json_encode($playername[14])?>;
        document.getElementById("id16").innerHTML=<?php echo json_encode($playername[15])?>;
        document.getElementById("id17").innerHTML=<?php echo json_encode($playername[16])?>;
        document.getElementById("id18").innerHTML=<?php echo json_encode($playername[17])?>;
        document.getElementById("id19").innerHTML=<?php echo json_encode($playername[18])?>;
        document.getElementById("id20").innerHTML=<?php echo json_encode($playername[19])?>;
        document.getElementById("id21").innerHTML=<?php echo json_encode($playername[20])?>;
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>