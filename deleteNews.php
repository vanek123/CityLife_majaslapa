<?php

session_start(); //Start the session.
require_once 'connection.php'; //Require connection file to connect to database.
$sql = "SELECT * FROM info ORDER BY Info_ID DESC";

if(isset($_GET['Info_ID'])) {
   $id = $_GET['Info_ID'];
   $delete = "DELETE FROM `info` WHERE `Info_ID` ='$id'";
   $result = $DBconnection->query($delete);

      header("Location: index.php?success=successfully_deleted");

}else {
   header("Location: ../index.php?error=smth_gone wrong");
}

?>