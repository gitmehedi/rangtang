<?php
//print_r($_POST);
//die();
$q = $_POST['q'];

$newArray = array(
    '1' => array(
        array("id" => 1, "name" => "Mango-1"),
        array("id" => 2, "name" => "Mango-2"),
        array("id" => 3, "name" => "Mango-3"),
        array("id" => 4, "name" => "Mango-4"),
        array("id" => 5, "name" => "Mango-5"),
    ),
    '2' => array(
        array("id" => 1, "name" => "Apple-1"),
        array("id" => 2, "name" => "Apple-2"),
        array("id" => 3, "name" => "Apple-3"),
        array("id" => 4, "name" => "Apple-4"),
        array("id" => 5, "name" => "Apple-5"),
        array("id" => 6, "name" => "Apple-6"),
    ),
);
$encode = json_encode($newArray[$q]);

echo $encode;