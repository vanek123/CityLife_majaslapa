
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $DB_Host = 'localhost';
  $DB_User = 'root';
  $DB_Pass = 'citylife';
  $DB_Name = 'citylife_simulator';
  //Connecting to the database, catching any errors that can be present.
  try{
    $DBconnection = new PDO("mysql:host=$DB_Host; dbname=$DB_Name" , $DB_User, $DB_Pass);
    $DBconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $ex){
    echo "Exception error: ". mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT)  . mysqli_connect_error(). $ex->getMessage();// for testing purposes.
    die($ex->getMessage());
  }

?>