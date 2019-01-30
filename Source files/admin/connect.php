<?php
$servername = "mysql.hostinger.in";
$username = "u357699420_csr";
$password = "csrpalghar";
$dbname = "u357699420_csr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
