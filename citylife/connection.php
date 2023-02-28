<?php
  $DB_Host = 'sql308.epizy.com';
  $DB_User = 'epiz_33470203';
  $DB_Pass = 'DzYFj1PnKn4sL';
  $DB_Name = 'epiz_33470203_citylife_simulator';
  //Connecting to the database, catching any errors that can be present.
  try{
    $DBconnection = new PDO("mysql:host=$DB_Host; dbname=$DB_Name" , $DB_User, $DB_Pass);
    $DBconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $ex){
    echo "Exception error: " . $ex->getMessage();// for testing purposes.
    die($ex->getMessage());
  }

?>