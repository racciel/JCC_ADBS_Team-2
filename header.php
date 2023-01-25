<?php 
    require('connect.php');
/*
Use this to check if your new user is added to the database
    $result = pg_query($conn, "select * from users where user_name = 'Racciel'");

    if($result) {
        while ($row = pg_fetch_row($result)) {
            echo "$row[0] $row[3]<br>";
        }
    }
*/
?>

<!DOCTYPE html>
<html>
<link rel="icon" href="">
    <head>
        <meta charset="utf-8"/>
        <title>BL0-G</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <script src="jquery-3.6.3.min.js"></script>
    </head>

    <body>
    <header>

    </head>
<body>
    
<div style="background-color: slategray;" class="nau navbar">
    <div id="logo">
        <a href="index.php" class="navbar-brand">
            <img src="logo.png" alt="Logo" width="auto" height="40px">
        </a>
    </div>

    <?php
        if(!isset($_SESSION['username']))
            echo("<div id='log'>
                    <a href='login.php'>Sign in/Sign up</a>
                </div>");
        else
            echo("<div id='log'>
                    <a href='logout.php'>Log out</a>
                </div>");
    ?>


    <div id="lista">
        <!-- Here we will do a query to fech all permissions for a user and then we'll show the pages accordingly -->
        <ul>
                <li><a href="#">Explore blog</a></li>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li><a href="myBlog.php">My blog</a></li>
                <?php } if(isset($_SESSION['username']) && $_SESSION['username'] == "Racciel") {// this has to be changed later to include the query data ?>
                <li><a href="#">Manage users</a></li>
                <li><a href="#">Manage roles</a></li>
                <li><a href="managePermissions.php">Manage permissions</a></li>
                <li><a href="usersList.php">Users list</a></li>
                <li><a href="#">Logs</a></li>
                <li><a href="#">Reports</a></li>
                    <?php } ?>
                <li><a href="#">Some sort of info</a></li>
            </ul>
        </div>
    </div>

    </header>

    <main role="main">

