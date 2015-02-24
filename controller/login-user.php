<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //This line of code selects the salt and the4 password from the 'users' table where are username is the username that was sent in via the post//
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row ["salt"])) {
            //this determines if the user is logged in or not. if logged in the user will stay logged in and be able to post. If not the user will not be able to post anything//
            $_SESSION["authenticated"] = true;
            echo"<p>Login Succesful!</p>";
        }
        else {
            echo "<p> Invalid username and password</p>";
        }
    }
    else {
        echo "<p>Invalid username and password</p>";
    }