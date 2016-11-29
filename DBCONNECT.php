
<?php
// 1. Create a database connection
$dbhost = "us-cdbr-azure-southcentral-f.cloudapp.net";
$dbuser = "b762b602ac9c7b";
$dbpass = "360b7be5";
$dbname = "cm3028rgu";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection succeeded
if(mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}
?>
<?php
$sql = "SELECT * from marvel movies";
?>
<?php
$result = mysqli_query($db,$sql);
?>
<?php
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
