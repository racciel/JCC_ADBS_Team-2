<?php
require('connect.php');

$user = $_POST['username'];
$role = $_POST['givenRole'];
$assigned = $_POST['assigned'];
$assigned = $_POST['expired'];

if($_POST['roleName'] == "-")
    $role = 'NULL';

$res = pg_query($conn, "select * from role;");
$i = pg_num_fields($res);
for ($j = 0; $j < $i; $j++) {
    echo "column $j<br>";
    $fieldname = pg_field_name($res, $j);
    echo "fieldname: $fieldname<br>";
    echo "printed length: " . pg_field_prtlen($res, $fieldname) . " characters<br>";
    echo "storage length: " . pg_field_size($res, $j) . " bytes<br>";
    echo "field type: " . pg_field_type($res, $j) . " <br><br>";
}


$query = "INSERT INTO users_roles VALUES('$user','$role','$assigned','$assigned' );";
echo $query;
//echo "$name, $surname, $username, $password, $address, $country, $city";

$result = pg_query($conn, $query);
//echo $pname . " " . $desc;

if($result)
    header('Location: manageUsers.php');
else {
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
    exit;
}
?>