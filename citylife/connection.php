<?php
  $DB_Host = 'sql200.epizy.com';
  $DB_User = 'epiz_33230964';
  $DB_Pass = 'qjQKIKGG3vbu';
  $DB_Name = 'epiz_33230964_CityLife_Simulator2';
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