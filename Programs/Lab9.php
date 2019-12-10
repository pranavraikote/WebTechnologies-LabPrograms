<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray = [];
    $split = explode(' ',$states);

    foreach($split as $state)
    {
        if(preg_match('/xas$/', ($state)))
            $statesArray[0] = ($state);
    }

    foreach($split as $state)
    {
        if(preg_match('/^K.*s$/', ($state)))
            $statesArray[1] = ($state);
    }

    foreach($split as $state)
    {
        if(preg_match('/^M.*s$/', ($state)))
            $statesArray[2] = ($state);
    }
    
    foreach($split as $state)
    {
        if(preg_match('/as$/', ($state)))
            $statesArray[3] = ($state);
    }
        
    foreach($statesArray as $array => $value)
    {
        print("STATES[$array] = $value <br>");
    }
?>