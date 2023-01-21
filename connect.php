<?php

    // HIHIHIIHIHIHIHIHIHIi
    // 161.53.120.224
    //$mysqli = new mysqli("rec.foi.hr:50432", "leader", "pr0j3ctJ((", "project");
         $dbhost = 'rec.foi.hr:50432';
         $dbuser = 'leader';
         $dbpass = 'pr0j3ctJ((';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
         
         if($mysqli→connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli→connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $mysqli→close();
?>