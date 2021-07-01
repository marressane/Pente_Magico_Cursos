<?

$servername     = "localhost";
$dbname         = "pente-magico";
$username       = "root";
$password       = "";

$con= mysqli_connect ( $servername, $username, $password, $dbname);
mysqli_set_charset ($con, 'utf-8');

//check Connection
if(mysqli_connect_errno())
 {
echo "Failed to connect to DB: " . mysqli_connect_errno();

 }


mysqli_select_db($con, $dbname);



?>