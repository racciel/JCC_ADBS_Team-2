<?php
require('connect.php');

$inher = $_POST['roleInherits'];
$rname = $_POST['roleName'];

//echo $name . " " . $desc;
//echo "$name, $surname, $username, $password, $address, $country, $city";

$result = pg_query($conn, "INSERT INTO role VALUES(DEFAULT,  $inher,'$rname', NOW())");
//echo $pname . " " . $desc;

if($result)
    header('Location: manageRoles.php');
else {
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
    exit;
}
?>