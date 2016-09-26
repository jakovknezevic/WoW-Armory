<?php require('db.php'); ?>

<?php
/*

$username=$_POST['username'];
$sql = "SELECT Id FROM users WHERE Username='$username'";
$userId = $conn->query($sql);
echo($userId);

*/
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

    header ("Location: login.php");
    echo('Niste prijavljeni!');
    die();

}



?>