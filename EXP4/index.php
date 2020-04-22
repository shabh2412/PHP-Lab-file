<!-- 
4.	Write a PHP script to perform the following string functions.
4.1.	String Length 
4.2.	Reverse String
4.3.	Replace text within a string
-->
<html>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="strInp" required>
            <button type="submit" name="sub">Submit</button>
        </form>
        <?php
            if (isset($_POST['sub'])) {
                $x = $_POST['strInp'];
                echo "Length of the String = ".strlen($x)."</br>";
                echo "Reverse String = ".strrev($x)."</br>";
                echo "Replacing \"r\" with \"S\" : ".str_replace('r','S',$x);
            }
        ?>
    </body>
</html>