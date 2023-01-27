<?php

if (!isset($_GET['signup'])) {
    exit();
}
else {
    $signupCheck = $_GET['signup']; }
    
    if ($signupCheck == "empty") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You did not fill in all fields!
      </div>";
        exit();
    }
    elseif ($signupCheck == "char") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You used invalid characters!
      </div>";
        exit();
    }
    elseif ($signupCheck == "email_format_is_wrong") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You used an invalid email!
      </div>";
    exit();
    }
    elseif ($signupCheck == "username_or_email_taken") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        The username or email is taken!
      </div>";
    exit();
    }
    elseif ($signupCheck == "success") {
        echo "<div id='alert' class='alert_su'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You have been signed up!
      </div>";
    exit();
    }

?>