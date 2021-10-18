<?php
$db_host = 'localhost';
$db_user = 'karan';
$db_pass = 'abcd1234';
$db_name = 'ims_db';

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($conn->connect_error){
    die("connection failed");
}
// else{
//     echo "connected";
// }
?>