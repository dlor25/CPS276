<!DOCTYPE html>
<html>
    <head>
        <title>Timestamp</title>
    </head>
    <body>

    <?php
    $timestamp = "2022-11-20 13:25:08";
    // $date = strtotime($timestamp);

    $date = date("M d, Y H:i:sA",strtotime($timestamp));

    echo $date;



    // $timestamp = strtotime("15th September 2006 3:12pm");

    // echo $timestamp;

    ?>

    </body>
</html>