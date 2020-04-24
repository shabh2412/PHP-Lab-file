<<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Fill Form</title>
    </head>
    <body>
        
        <?
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    if (isset($_POST['sub'])) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO test (username, email, gender) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $email, $gender);
        
        // set parameters and execute
        $firstname = $_POST['usrName'];
        $email = $_POST['usrEmail'];
        $gender = $_POST['Gender'];
        
        $stmt->execute();
        if (($conn -> affected_rows) == 1) {
            echo "<div class='row text-center'>
                <div class='col'>
                    <h2 class='text-success'>CONGRATS!</h2>
                    <h4 class='text-muted'>Your data has been recorded successfully</h4>
                </div>
            </div>";
            
        } else {
            echo "<div class='row text-center'>
                <div class='col'>
                    <h2 class='text-danger'>SORRY :(</h2>
                    <h4 class='text-muted'>Your data couldn't be added</h4>
                </div>
            </div>";
        }
        $stmt->close();
        $conn->close();
    } else {
        header('location: index.php');
    }
    ?>
    </body>
</html>