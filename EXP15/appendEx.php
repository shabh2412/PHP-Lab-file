<?php
    $fp = fopen('someText.txt','a');
    fwrite($fp," this is new text!");
    fclose($fp);
    echo "Appended Successfully";
?>