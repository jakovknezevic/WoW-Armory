<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WoW Armory</title>
</head>

<body>
<h1>WoW Armory</h1>

<p>
    <?php

    $sql = ("INSERT IGNORE INTO users (Username, Password) VALUES ('" . $_POST['username'] ."','" . $_POST['password'] ."');");
   /* $sql = ("INSERT INTO users (Username, Password) VALUES ('" . $_GET['username'] ."','" . $_GET['password'] . "');"); */
    $result = $conn->query($sql);

    echo($sql);

    header("Location: login.php");
    ?>

</p>
</body>
</html>