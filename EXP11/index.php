<?php
    $cookieName = "userData";
    $cookieValue = "Rishabh Panesar";
    setcookie($cookieName,$cookieValue,time()+(180),"/");
?>
<html>
    <head>
        <title>
            COOKIE EXAMPLE
        </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            if(isset($_COOKIE[$cookieName])){
                echo "<h1 class='text-muted text-center'>COOKIE SET!</h1>";
                $x = $_COOKIE[$cookieName];
            } else {
                echo "<h1 class='text-muted text-center'>SETTING COOKIE...</h1><h4 class='text-muted text-center'>RELOAD THE PAGE NOW</h4>";
            }
        ?>
    </body>
</html>