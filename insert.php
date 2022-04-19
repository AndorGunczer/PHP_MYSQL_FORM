<?php
$url = "127.0.0.1";
$user = "root";
$password = "mypassword";
$db = "pet_test";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($url, $user, $password, $db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO pet (name, owner, species, sex, birth, death) VALUES ('Maucka', 'Andor', 'Siamese Cat', 'm', '2017-03-01', '2021.03.28')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>