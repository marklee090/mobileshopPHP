<?php
    function connect()
    {
        $host = "localhost";
        $dbname = "thoitrang";
        $username = "root";
        $password = "";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
        $DBH = new PDO("mysql:host=$host;dbname=$dbname",$username, $password,$options);
        return $DBH;
    }
?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>