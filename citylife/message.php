<?php

if (!isset($_GET['activity'])) {
    exit();
}
else {
    $activityCheck = $_GET['activity']; }
    
    if ($activityCheck == "empty") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You did not fill in all fields!
      </div>";
      exit();
    }
    elseif ($activityCheck == "char") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You used invalid characters!
      </div>";
      exit();
    }
    elseif ($activityCheck == "email_format_is_wrong") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You used an invalid email!
      </div>";
      exit();
    }
    elseif ($activityCheck == "username_or_email_taken") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        The username or email is taken!
      </div>";
      exit();
    }
    elseif ($activityCheck == "login_empty") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You did not fill in all fields!
      </div>";
      exit();
    }
    elseif ($activityCheck == "incorrect_user_login_credentials") {
        echo "<div id='alert' class='alert'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        Incorrect username or password!
      </div>";
      exit();
    }
    elseif ($activityCheck == "successful") {
        echo "<div id='alert' class='alert_su'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You are logged in!
      </div>";
      exit();
    }
    elseif ($activityCheck == "success") {
        echo "<div id='alert' class='alert_su'>
        <span class='closebtn' onclick='closeAlert()'>&times;</span>
        You have been signed up!
      </div>";
    exit();
    }
    
?>