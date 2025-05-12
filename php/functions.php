<?php
require "config.php";

function dbConnect()
{

    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if ($mysqli->connect_error != 0) {
        return FALSE;
    } else {
        return $mysqli;
    }
}

function getCategories()
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT category_name FROM tCategories");
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    return $categories;

}

function getCats($int){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT * FROM tcats LIMIT $int");

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function getCatsByCategory($category){

    $mysqli = dbConnect();
    $smtp = $mysqli->prepare("SELECT * FROM vCatsCategories WHERE category_name = ? ");
    $smtp->bind_param("s", $category);
    $smtp->execute();
    $result = $smtp->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    return $data;

}
function getCatByName($name){
    $mysqli = dbConnect();
    $smtp = $mysqli->prepare("SELECT * FROM tcats WHERE name = ? ");
    $smtp->bind_param("s", $name);
    $smtp->execute();
    $result = $smtp->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    return $data;
}