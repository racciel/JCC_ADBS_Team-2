<?php
session_start();
require('header.php');?>

<link rel="stylesheet" type="text/css" href="login.css">
<div class="navigacija">
    <div class="klasa navigation">
        <div class="container manjeod">
    </div>
    </div>

<div class="album py-4 bg-light pozadina">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div id="prijava" style="width=100%">

            <form id="login" method="POST" action="insert_role.php">
                <label>Role will inherit permissions from role (integer needed): </label><input type="number" name="roleInherits" min="0" max="500"><br><br>
                <label>Role name: </label><input type="text" name="roleName"><br><br>
                <input type="submit" value="Add">
            </form>
</div><br><br>
<?php

$result = pg_query($conn, "SELECT * FROM role ORDER BY role_id DESC LIMIT 20;");

if($result) {
    echo('<table class="table josjedna">');
    echo('<tr><th scope="col"><label>Role inherits permissions from role</label></th><th scope="col"><label>Role name</label></th><th scope="col"><label>Created at</label></th></tr>');
    while ($row = pg_fetch_row($result)) {
        echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
    }
    echo('</table>');
}
echo('<a href="index.php">Home page</a>')
?>

            </div>
        </div>
    </div>
</div>
<?php require('footer.php');?>