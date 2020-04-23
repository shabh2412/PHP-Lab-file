<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGGED IN</title>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
</head>
<body>
    
    <?php
        date_default_timezone_set("Asia/Kolkata");
        session_start();
        if(isset($_SESSION['userName'])){
        if((time() - $_SESSION['last_login_timestamp']) > 30 ){ // 60x2=120
            header('location: logout.php');
        } else {
            $_SESSION['last_login_timestamp'] = time();
    ?>
        <div class="row p-2 m-2">
            <div class="col p-2 ml-5 m-2">
    <?php
            echo "<h2>User : ".$_SESSION['userName']."</h2>";
    ?>
            </div>
            <div class="col m-2 p-2">
    <?php
            echo "<h2>Last Logged in : ".date('H:i:s',$_SESSION['last_login_timestamp'])."</h2>";
    ?>
            </div>
            </div>
            <div class="row my-2 text-center">
                <div class="col-11">
    <?php
            echo "If you don't refresh the page within 30 sec, you will be logged out";
        }
    ?>
                </div>
            </div>
    <?php
        } else{
            header('location:login.php');
        }
    ?>
</body>
</html>