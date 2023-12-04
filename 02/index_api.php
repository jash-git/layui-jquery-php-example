<?php
    header('Content-Type: application/json; charset=utf-8');
    
    $jsonData = $_POST['JsonInput'];
    $dataArray = json_decode($jsonData, true); 
    
    $data = array();
    foreach ($dataArray as $obj) {
        $objectBuf = new stdClass();
        $objectBuf->name = $obj['name'];
        $objectBuf->age = $obj['age'];
        $data[] = $objectBuf;
    }
    $objectBuf01 = new stdClass();
    $objectBuf01->name = "jash.liao";
    $objectBuf01->age = "XX";
    $data[] = $objectBuf01;
    
    /*寫死回傳回傳物件
    $data = array();
    $object1 = new stdClass();
    $object1->name = "John Doe";
    $object1->age = 30;
    $data[] = $object1;

    $object2 = new stdClass();
    $object2->name = "Jane Doe";
    $object2->age = 25;
    $data[] = $object2;
    */
    
    // Encode the array to JSON
    $Strjson = json_encode($data);
    echo $Strjson;
?>