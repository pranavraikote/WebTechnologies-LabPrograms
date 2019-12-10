<?php

    print "<h3><center> Welcome to my Blog </center></h3>";

    $fp = fopen("Lab6.txt","r");
    $hits = fscanf($fp,"%d");
    fclose($fp);

    $hits[0]++;
    $fp = fopen("Lab6.txt","w");
    fprintf($fp,"%d",$hits[0]);
    fclose($fp);

    print "Total number of views - ".$hits[0];

?>