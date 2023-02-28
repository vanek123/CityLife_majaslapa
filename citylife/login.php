<?php
    session_start(); //Start the session.
    require_once 'connection.php'; //Require connection file to connect to database.
    
    if(isset($_POST['login']))  //if email and password are set.
    {
       $userPassword = $_POST['password'];//Get password and username
       $username = $_POST['username'];
        
       $hashedPassword = md5($userPassword);//Getting the hash to compare
        
       $SQL_stmt = "SELECT User_ID, username, email, password, role_ID FROM users
       WHERE username = '".$username."' AND password = '".$hashedPassword."'";
        
       //$result = 0;
        
       $result = $DBconnection->query($SQL_stmt);
        $row = $result->fetch();

       if (empty($username) || empty($userPassword)) {
        header("location: index.php?activity=login_empty");
        exit();
    }
    elseif ($row) {
            $_SESSION['User_ID'] = $row['User_ID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role_ID'] = $row['role_ID'];

        header('location: index.php?activity=successful');
        exit();
        }    

        else {
            header('location: index.php?activity=incorrect_user_login_credentials');
            exit(); 
        }
        
    

    }
    else
    {
        header('location: index.php?activity=username_or_password_not_set');
        exit();
    }
?>