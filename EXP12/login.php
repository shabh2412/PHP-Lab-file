<?php
    session_start();
    if(isset($_POST['btn'])){
        $_SESSION['userName'] = $_POST['user'];
        $_SESSION['last_login_timestamp'] = time();
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Start Session</title>
    </head>
    <body>
        <form method="post" class="form">
            <div class="row p-2 m-2">
                <div class="col">
                    <label for="user">Enter User Name to start session </label>
                </div>
                <div class="col">
                    <input type="text" name="user" id="user">
                </div>
            </div>
            <div class="row p-2 m-2">
                <div class="col p-2 m-2 btn">
                    <button name="btn">Enter</button>
                </div>
            </div>
        </form>
    </body>
</html>