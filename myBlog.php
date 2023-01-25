<?php
session_start();
require('header.php');
$var_userName =$_SESSION['username'];
?>
<link rel="stylesheet" type="text/css" href="myBlogCSS.css">

<h1>Welcome <?php echo $_SESSION['username'];?> </h1>
<button class="createPost">Create New blog Post</button>

<div class="box">

    <div class="box-content">


        <div class="box-text">
            <div class="wrap">
                <?php
                $response = pg_query($conn, "select rowa,post_id, substring(Post_description,1,700) 
from( select  post_id, Post_description, row_number() over(order by post_id desc) as rowa
		from post where user_name ='$var_userName' ) as deso
		where rowa = 1");

                while ($row = pg_fetch_row($response)) {
                    echo "$row[2] \n" . "</br>";
                    $var_post_id1 = $row[1];
                }
                ?>

            </div>
        </div>
        <div class="box-footer">
            <div class="wrap" onclick='window.location.href ="single_post.php?var_post_id=<?php echo $var_post_id1 ?>"'>

                Learn More
            </div>
        </div>
    </div>

    <div class="box-content">
        <div class="box-text">
            <div class="wrap">
                <?php
                $response = pg_query($conn, "select rowa,post_id, substring(Post_description,1,700) 
from( select  post_id, Post_description, row_number() over(order by post_id desc) as rowa
		from post where user_name ='$var_userName') as deso
		where rowa = 2");

                while ($row = pg_fetch_row($response)) {
                    echo "$row[2] \n" . "</br>";
                    $var_post_id2 = $row[1];
                }
                ?>
            </div>
        </div>
        <div class="box-footer">
            <div class="wrap" onclick='window.location.href ="single_post.php?var_post_id=<?php echo $var_post_id2 ?>"'>
                Learn More
            </div>
        </div>
    </div>

</div>

<div class="box">

    <div class="box-content">


        <div class="box-text">
            <div class="wrap">
                <?php
                $response = pg_query($conn, "select rowa,post_id, substring(Post_description,1,700) 
from( select  post_id, Post_description, row_number() over(order by post_id desc) as rowa
		from post where user_name ='$var_userName' ) as deso
		where rowa = 3");

                while ($row = pg_fetch_row($response)) {
                    echo "$row[2] \n" . "</br>";
                    $var_post_id1 = $row[1];
                }
                ?>

            </div>
        </div>
        <div class="box-footer">
            <div class="wrap" onclick='window.location.href ="single_post.php?var_post_id=<?php echo $var_post_id1 ?>"'>

                Learn More
            </div>
        </div>
    </div>

    <div class="box-content">
        <div class="box-text">
            <div class="wrap">
                <?php
                $response = pg_query($conn, "select rowa,post_id, substring(Post_description,1,700) 
from( select  post_id, Post_description, row_number() over(order by post_id desc) as rowa
		from post where user_name ='$var_userName') as deso
		where rowa = 4");

                while ($row = pg_fetch_row($response)) {
                    echo "$row[2] \n" . "</br>";
                    $var_post_id2 = $row[1];
                }
                ?>
            </div>
        </div>
        <div class="box-footer">
            <div class="wrap" onclick='window.location.href ="single_post.php?var_post_id=<?php echo $var_post_id2 ?>"'>
                Learn More
            </div>
        </div>
    </div>

</div>