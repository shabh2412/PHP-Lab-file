<?php
    if(isset($_POST['Mod-button'])){
        modifyCookie();
    }
    if(isset($_POST['Del-button'])){
        delCookie();
    }
    if(isset($_POST['Res-button'])){
        resetCookie();
    }
    if(isset($_POST['Chk-button'])){
        checkCookie();
    }
    function checkCookie(){
        $cookieName = "user";
        $cookieValue = "Rishabh Panesar";
        setcookie($cookieName,$cookieValue,time()+(180),"/");
        if(count($_COOKIE)>0){
            echo "<h1 class='text-success text-center'>Cookies Are Enabled! </h1>";
        } else {
            echo "<h1 class='text-danger text-center'>Cookies Are Not Enabled! </h1>";
        }
    }
    function delCookie(){
        $cookieName = "user";
        setcookie($cookieName,"",time()-99999,"/");
        if (!isset($_COOKIE['$cookieName'])) {
            echo "<h4 class=' text-center'>Cookie : $cookieName is now Deleted</h4><h1 class='text-muted text-center'>You may set cookie by </h1><h4 class='text-muted text-center'>Clicking modify button or reset button</h4>";
        }
    }
    function chkCookie($cookieName){
        if(isset($_COOKIE[$cookieName])){
            echo '<script type="text/JavaScript">alert("If you don\'t see any change, then, kindly reload the page once again");</script>';
            echo "<h1 class='text-muted text-center'>COOKIE SET!</h1>";
            $x = $_COOKIE[$cookieName];
            echo "<h4 class='text-muted text-center'>Cookie Name : $cookieName <br>Value : $_COOKIE[$cookieName]</h4>";
        } else {
            echo "<h4 class=' text-center'>Cookie : $cookieName is not Set</h4><h1 class='text-muted text-center'>SETTING COOKIE...</h1><h4 class='text-muted text-center'>RELOAD THE PAGE NOW</h4>";
        }
    }
    function modifyCookie(){
        $cookieName = "user";
        $cookieValue = "Rishabh P";
        setcookie($cookieName,$cookieValue,time()+180,"/");
        chkCookie($cookieName);
    }

    function resetCookie(){
        $cookieName = "user";
        $cookieValue = "Rishabh Panesar";
        setcookie($cookieName,$cookieValue,time()+(180),"/");
        chkCookie($cookieName);
    }
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
            <form action="index.php" method="POST" class="form">
                <div class="row text-center p-3 m-4">
                    <div class="col">
                        <button class="btn btn-dark" name="Mod-button">Modify Cookie Value</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-danger" name="Del-button">Delete Cookie</button>
                    </div>
                </div>
                <div class="row text-center p-3 m-4">
                    <div class="col">
                        <button class="btn btn-success" name="Chk-button">Check if Cookie is Enabled</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" name="Res-button">Set Default Cookie</button>
                    </div>
                </div>
                
            </form>
    </body>
</html>