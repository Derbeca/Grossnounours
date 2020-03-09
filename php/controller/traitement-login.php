<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "grosnounours"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

$log_email = mysqli_real_escape_string($con,$_POST['login_email']);
$log_password = mysqli_real_escape_string($con,$_POST['login_password']);

if ($log_email != "" && $log_password != ""){

    $sql_query = "select count(*) as user from inscription where email='".$log_email."' and password='".$log_password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['user'];

    if($count > 0){
        $_SESSION['log_email'] = $log_email;
        header('Location: accueil.php');
    }else{
        header('Location: erreur-connexion.php');
    }

}



