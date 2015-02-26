<?php

require_once(__DIR__ . "/../model/config.php");


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
//this says if something was posted then it echoes "Succesfully inserted post. if the post wasnt successfull a error would be echoed//
if ($query) {
    echo "<p> Succesfully inserted post: $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}