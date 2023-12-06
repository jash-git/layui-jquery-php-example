<?php
    date_default_timezone_set("Asia/Taipei");
    header('Content-Type: application/json; charset=utf-8');
    
    $myfile = fopen("log.txt", "a");
    $txt = date("Y-m-d H:i:s");
    fwrite($myfile, $txt."\n");
    
    $data = array();
    $objectBuf01 = new stdClass();
    $objectBuf01->state = "success";
    $objectBuf01->times = $txt;
    $data[] = $objectBuf01;

    // Encode the array to JSON
    $Strjson = json_encode($data);
    echo $Strjson;    
?>