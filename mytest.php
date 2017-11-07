<html>

<body>


<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','basketball');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SELECT PlayerName FROM players";
$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
    $user_name = $row['PlayerName'];
    //echo "<tr>";
    echo "<td>".$user_name."</td>";
    echo "<br>";
    //echo "</tr>";
}

?>

</body>

</html>
