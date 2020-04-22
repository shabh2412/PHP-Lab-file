<!-- 3.	Write a PHP script to print a textbox value using PHP. Use the HTML form tag and submit button to perform the experiment -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method="post">
        <input type="text" name="txt" required>
        <button type="submit" name="sub">Submit</button>
    </form>
    <?php
     if (isset($_POST['sub'])) {
         echo $_POST['txt'];
     }
    ?>
</body>
</html>