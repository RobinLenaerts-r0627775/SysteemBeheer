<?php
$servername = "localhost";
$username = "root";
$password = "klp246";
$dbname = "check";
//create connection
$connection = new mysqli($servername, $username, $password, $dbname);
//Check connection
if($connection->connect_error){
    echo "Connection failed: " + $connection->connect_error;
}

for($x = 0; $x < 7; $x++){
    $sql = "insert into log(date, text) values (now(), $x)";
    $result = mysqli_query($connection, $sql);
}

$conn->close();
?>
