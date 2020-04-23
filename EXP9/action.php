<?php
    if (isset($_POST['sub'])) {
        $webUrl = $_POST['URL'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $numPattern = '/^\+\d{12}$/'; //this pattern will only match if number includes + in the beginning, and consists, of max 12 characters, 
        if (preg_match('/^www\.[a-z-]+\.[a-z-.]{1,3}$/',$webUrl)) {
            echo "<p>Url format is valid</p>";
        } else {
            echo "<p>Invalid URL format</p>";
        }
        if (preg_match('/^[a-z_.-]+@[a-z.-]{1,9}\.[a-z]{2,5}$/',$email)) {
            echo "<p>Email format is valid</p>";
        } else {
            echo "<p>Invalid Email format</p>";
        }
        if (preg_match($numPattern,$contact)) {
            echo "<p>Contact format is valid</p>";
        } else {
            echo "<p>Invalid Contact format</p>";
        }
    }