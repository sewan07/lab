

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

