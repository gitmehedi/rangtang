<?php
$newArray = array(
    array("id" => 1, "name" => "Mango"),
    array("id" => 2, "name" => "Apple"),
    array("id" => 3, "name" => "Banana"),
    array("id" => 4, "name" => "orange"),
    array("id" => 5, "name" => "Pineapple"),
    array("id" => 6, "name" => "Guava"),
    array("id" => 7, "name" => "Black berry")
);
$encode = json_encode($newArray);

echo $encode;