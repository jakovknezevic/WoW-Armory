<?php require('db.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WoW Armory</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <![endif]-->
</head>

<body class="generaltext">

<nav class="navbar navbar-inverse navbar-fixed-top hovershadow">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav">
                <li class="active1"><a href="login.php">Login</a></li>
                <li class="active1"><a href="register.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Ming Lee</h1>
        <p class="lead"></p>
    </div>

    <div class="text">

        <p class="paragraph">





            <?php



            $sql = "SELECT * FROM users WHERE Username='" . $_POST['username'] ."'  AND Password='". $_POST['password'] ."'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                session_start();
                $_SESSION['login'] = "1";
                header ("Location: index.php");

            } else {

                echo ("Oops,something went wrong! Please check if you entered your username and password correctly!");
                session_start();
                $_SESSION['login'] = '';
            }
            ?>

        <!--
        <form id="forma" method="POST" action="check.php">
            <input type="hidden" name="username" value="<?=$_POST['username']?>">
        </form>

        <script type="text/javascript">
            document.getElementById('forma').submit();
        </script>
        -->
        </p>

    </div>

</div>