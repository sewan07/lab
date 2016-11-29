<?php
define("DB_SERVER", "us-cdbr-azure-southcentral-f.cloudapp.net");
define("DB_USER", "b762b602ac9c7b");
define("DB_PASS", "360b7be5");
define("DB_NAME", "cm3028rgu");

// 1. Create a database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection succeeded
if(mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>
<?php
$query = "SELECT * FROM superheroes";
$result = $db->query($sql_query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>untitled</title>
</head>
<body>

<?php
while($row = $result->fetch_array()){
// process the $row
    echo "<p> ’ ’ . $row ['superheroName'].‘ ‘</p>";
}
?>

</body>
</html>


<?php
$result->close();
?>

