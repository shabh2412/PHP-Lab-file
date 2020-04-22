<html>
    <head>
        <style>
            table {
                height: 125px;
                width: 500px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <?php
if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['Website'];
    echo "<table border = '1'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Website</th>
    </tr>
    <tr>
    <td>$name</td>
    <td>$email</td>
    <td>$website</td>
    </tr>
    </table>";
}
?>
    </body>
</html>