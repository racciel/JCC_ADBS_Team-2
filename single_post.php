<?php
session_start();
require('header.php');


?>
<link rel="stylesheet" type="text/css" href="single_post_css.css">

<?php
//Get variable from prev page Using GET
$var_post_id = $_GET['var_post_id'];

//echo $var_post_id;



$response = pg_query($conn, "select user_name,lifespan, post_title, Post_description from post p
where post_id = 100013;");

while ($row = pg_fetch_row($response)) {
    echo "$row[0] \n" . "</br>";
    echo "$row[1] \n" . "</br>";
    echo "$row[3] \n" . "</br>";

}



?>