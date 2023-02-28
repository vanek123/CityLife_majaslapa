<?php 
    session_start();
    require_once 'connection.php';
    
    
// initializing variables
$username = "";
$email = "";
$errors = array();

//$check = "SELECT username FROM users WHERE username = '$username' ";
//$reg = $DBconnection->query($check);
//if ($check->rowCount() > 0) {
//    flash('Username already exists!');
//    header('Location: index.php'); // return to index.php
//    die; //stop script
//}
//$result = $DBconnection->query($check);

//REGISTER USER
if (isset($_POST['reg_user'])) {
    //receive all input values from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //form validation: ensure that the form is correctly filled...
    //by adding (array_push()) corresponding errors into $errors array
    if (empty($username)) { array_push($errors, "Username is required");}
    if (empty($email)) { array_push($errors, "Email is required");}
    if (empty($password)) { array_push($errors, "Password is required");}
    
    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT User_ID, username, email, password, role_ID FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    //$result = mysqli_query($DBconnection, $user_check_query);
    $result = $DBconnection->query($user_check_query);
    $user = $result->fetch();

    //if ($user) { //if user exists
    //    if ($user['username'] === $username) {
    //        array_push($errors, "Username already exists!");
    //    }

    //    if ($user['email'] === $email) {
    //        array_push($errors, "email already exists");
     //   }
    //}
    if (empty($username) || empty($email) || empty($password)) {
        header("location: index.php?activity=empty");
        exit();
    } elseif ($user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            array_push($errors, "Username or email taken!");
            header("location: index.php?activity=username_or_email_taken");
            exit();
            }
    } elseif (!preg_match("/^[A-Za-z][A-Za-z0-9]{4,31}$/", $username)) {
        header("location: index.php?activity=char");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: index.php?activity=email_format_is_wrong");
        exit();
    }

        if (COUNT($errors) == 0) {
        $passwordMD5 = md5($password); //encrypt the password beofre saving in the database

        $query = "INSERT INTO users (username, email, password, role_ID)
                  VALUES('$username', '$email', '$passwordMD5', 0)";
        $DBconnection->query($query);
        $_SESSION['username'] = $username;
        header('location: index.php?activity=success');
        exit();
        }
    
    
    
}

    //FInally, register user if there are no earrors in the form
    
else 
{
    header('location: index.php?activity=registration_canceled'); //cancel registration
    exit();
}



?>