<?php
require('../../PHP/catalog/connection.php');


//var_dump($_POST);
$productID = $_POST['productID'];

$rating = str_repeat('★', $_POST['rating']);

$review = [
    "name" => $_POST['name'],
    "rating" => $rating,
    "message" => $_POST['message'],
    ];

$review = json_encode($review);

$conn->query("INSERT INTO review (productID, review)VALUES ('{$productID}', '{$review}')");

header("Location: javascript://history.back()");
