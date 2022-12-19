<?php
  $DB_Host = 'localhost';
  $DB_User = 'root';
  $DB_Pass = 'Citylife123';
  $DB_Name = 'citylife_simulator';
  //Connecting to the database, catching any errors that can be present.
  try{
    $DBconnection = new PDO("mysql:host=$DB_Host; dbname=$DB_Name" , $DB_User, $DB_Pass);
    $DBconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $ex){
    echo "Exception error: " . $ex->getMessage();// for testing ourposes.
    die($ex->getMessage());
  }

?>