<!-- 
    10.	Write a PHP script to show the functionality of “Include” and “require
 -->
<?php
include 'fileToInclude.php';
?>
        <p>
            Text from index.php file <br>
            Now we will extract some data from other file (which is included using require method).
        </p>
        <?php
            require 'fileToRequire.php'
        ?>
    </body>
</html>
