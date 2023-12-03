<?php
    header('Content-Type: application/json; charset=utf-8');
    $data = array();
    $object1 = new stdClass();
    $object1->name = "John Doe";
    $object1->age = 30;
    $data[] = $object1;

    $object2 = new stdClass();
    $object2->name = "Jane Doe";
    $object2->age = 25;
    $data[] = $object2;

    // Encode the array to JSON
    $Strjson = json_encode($data);
    echo $Strjson;
?>