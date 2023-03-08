<?php 
    session_start();
    require_once 'connection.php';

    
// initializing variables
$User_ID = $_SESSION['User_ID'];
$title = "";
$description = "";
$date = "";

if (isset($_POST['submit_news'])) {
    //receive all input values from the form
    $title = $_POST['title'];
    $description = $_POST['description'];

    $info_check_query = "SELECT * FROM info WHERE title='$title' OR description='$description' ";
    $result = $DBconnection->query($info_check_query);
    $info = $result->fetch();


        $query = "INSERT INTO info (title, description, date, User_ID)
                  VALUES('$title', '$description', now(), '$User_ID')";
        $result = $DBconnection->query($query);
        
        header('location: index.php');


    }
else 
{
        header('location: index.php ');
}

?>