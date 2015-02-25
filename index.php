
<html>
    <head>
        <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <title></title>
        
        
        <div class="container">
            <ul class="nav nav-tabs nav-justified" role="tablist">

                <ul class="nav nav-pills nav-justified">
                    <li><a href="http://localhost/JuntillaK-Blog/login.php" class="Pills">Login</a></li>
                    <li><a href="http://localhost/JuntillaK-Blog/post.php" class="Pills">Post</a></li>
                    <li><a href="http://localhost/JuntillaK-Blog/index.php" class="Pills">Home</a>
                    <li><a href="http://localhost/JuntillaK-Blog/register.php" class="Pills">Register</a>
                </ul>
            </ul>
            
            <div class="jumbotron">
    <h1>Hello</h1>
    <p>I am Kaelen Juntilla,here you will read things about me and
    what I do</p>
        </div>
            </div>
    </head>
    <body>


<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
    require_once(__DIR__ ."/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php")
?>

