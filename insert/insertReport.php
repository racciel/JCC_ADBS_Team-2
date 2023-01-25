<?php
require('../header.php');

if(isset($_POST["postID"])&& isset($_POST["reportDesc"]) === true) {


    $postID = $_POST["postID"];
    $reportDesc = $_POST["reportDesc"];
    $date = date('Y-m-d H:i:s');
    //echo $date;
    $response = pg_query($conn, "SELECT max(report_log_id) FROM report_log;");

    while ($row = pg_fetch_row($response)) {
        $max = $row['0'] + 1;
        //echo $max;
    }

    $response = pg_query($conn, "SELECT code FROM report_code where description ='$reportDesc';");


    while ($row = pg_fetch_row($response)) {
        $ReportID = $row['0'];
        //echo $max;
    }

    $sql = "INSERT INTO Report_log VALUES('" . $max . "','" . $postID . "','" . $date . "','" . $ReportID . "')";
    pg_query($conn, $sql);

    //cez alert(data);
    echo "Uspech";;
}else{
    //alert(data);
    echo "Neuspech, neboli zadané všetky dáta";
}
?>
*/
