<?php
$get = $_GET['term'];
if ($get == 'mehedi') {
    $availableTags = [
        'apple',
        'mango'
    ];
} else {
    $availableTags = [];
}
echo json_encode($availableTags);