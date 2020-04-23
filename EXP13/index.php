<?php
    //mktime experiment
    date_default_timezone_set("Asia/Kolkata");
    $target = mktime(12,0,0,12,25,2020);
    $today = time();
    $difference = ($target-$today);
    echo "Today is ". date("d/m/y ---- l")."<br>" ;
    echo "Time is ". date("h:i:sa");
    $hour = (int) ($difference/3600);
    $t = date("d-m",$target);
    print "<br>Our event will occur on ".$t."<br>Time left is $hour hours";
    //session experiment
    $tout = mktime(0,0,0,02,25,2020);

?>