
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
        <h1>Register</h1>
        <p class="lead"></p>
    </div>

    <div class="text">
        <p>

        <form method="POST" class="font spacing center" action="register1.php">
            Username:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="username"><br><br>
            Password:
            <input type="password" class="textbox hovershadow" autocomplete="off" name="password"><br>

            <br><input type="submit" class="login hovershadow center1" value="Register"><br><br>
        </form>
        
        </p>

        <p>
        <p class="paragraph credits">
            Already have an account? Click <a href="login.php">here</a> to login!

        </p>

        </p>


    </div>

</div>


