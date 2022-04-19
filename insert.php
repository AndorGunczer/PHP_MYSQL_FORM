<?php
// Initialization of variables required to establish database connection
// Initializierung der Variablen zur Verbindung mit der Datenbank
$url = "127.0.0.1";
$user = "basic";
$password = "basic";
$db = "pet_test";

// Initialization of the variables 
// Initializierung der Variablen mit der Werten vom Formular.
$name = $_POST['name'];
$owner = $_POST['owner'];
$species = $_POST['species'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$death = $_POST['death'];


//Ein Versuch, eine Verbindung zur Datenbank herzustellen.
$link = mysqli_connect($url, $user, $password, $db);
 
// Check die Verbindung
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
// Versuch der Ausführung einer Insert-Abfrage
$sql = "INSERT INTO pet (name, owner, species, sex, birth, death) VALUES ('{$name}', '{$owner}', '{$species}', '{$sex}', '{$birth}', '{$death}')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
// Verbindung schließen
mysqli_close($link);