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

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
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
            echo("<div id='log'><br><a href='profile.php'>My profile</a><a href='logout.php'>&nbsp;&nbsp;&nbsp;&nbsp;Log out</a>
                                </div>");

    ?>


    <div id="lista">
        <!-- Here we will do a query to fech all permissions for a user and then we'll show the pages accordingly -->
        <ul>
                <li><a href="#">Explore blog</a></li>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li><a href="myBlog.php">My blog</a></li>
                <?php } if(isset($_SESSION['username']) && $_SESSION['username'] == "Racciel" || $_SESSION['username'] == "admin") {// this has to be changed later to include the query data ?>
                <li><a href="manageUsers.php">Manage users</a></li>
                <li><a href="manageRoles.php">Manage roles</a></li>
                <li><a href="managePermissions.php">Manage permissions</a></li>
                <li><a href="usersList.php">Users list</a></li>
                <li><a href="logs.php">Logs</a></li>
                <li><a href="reports.php">Reports</a></li>
                    <?php } ?>
                <li><a href="#">Some sort of info</a></li>
            </ul>
        </div>
    </div>

    </header>

    <main role="main">

