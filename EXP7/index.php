<html>
    <head></head>
    <body>
        <form action="index.php" method="post">
            <h1>XSS Example</h1>
            <label for="usrInp">Enter Username </label>
            <input type="text" name="usrInp" id="usrInp">
            <button type="submit" name="sub">Submit</button>
        </form>
        <?php
            if (isset($_POST['sub'])) {
                $x = $_POST['usrInp'];
                echo "Username is ".purifyInput($x);
            }
            function purifyInput($inp){
                $inp = strip_tags($inp);
                $inp = stripslashes($inp);
                $inp = htmlspecialchars($inp);
                $inp = trim($inp,"\t \n\r");
                return $inp;
            }
        ?>
    </body>
</html>