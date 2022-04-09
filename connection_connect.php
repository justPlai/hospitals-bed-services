<?php
//เชื่อมต่อ server
$severname = "158.108.207.7";
$username = "SOA65_01";
$password = "SOA65_01";
$dbname = "SOA65_01_02";
$conn = mysqli_connect($severname, $username, $password);
mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
} else {
    //echo "<br> Successfully connected to server <br>";
}

if (!$conn->select_db($dbname)) {
    echo $conn->connect_error;
} else {
    //echo " Successfully connected to database <br>";
}
?>
</div>