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
$query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
$result = mysqli_query($connection, $query);
//Test if there was a query error
if (!$result){
    die("Database query failed.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> portlethen </title>
</head>
<body>

<?php
// Use returnes data if any
while($row = mysqli_fetch_row($result)) {
    var_dump($row);
    echo "<hr />";
}
?>

</body>
</html>

<?php
// Close database connection
mysqli_close($connection);
?>



