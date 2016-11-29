

<?php
// connect to csdm- webdev server and sel ect database
$db = new mysqli(
"us-cdbr-azure-southcentral-f.cloudapp.net",
"b762b602ac9c7b",
"360b7be5",
"cm3028rgu"
);
// test if connection was established, and print any errors
if($db->connect_errno){
die('Connectfailed['.$db->connect_error.']');
}


// create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
// execute the SQL query
$result = $db->query($sql_query);

// iterate over $resul t obj ect one $row at a time
// use fetch_array() to return an associ ative array
while($row = $result->fetch_array()){
// process the $row
}

while($row = $result->fetch_array()){
// print out fiel ds from row of data
    echo "<p> ’ ’ . $row ['superheroName'].‘ ‘</p>";
}

$result->close();
// cl ose connection to database