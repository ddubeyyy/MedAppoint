?>
<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "147896325");
  define("DB_DATABASE", "edoc");

  $database = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  // you could test connection eventually using a if and else conditional statement, 
  // feel free to take out the code below once you see Connected!
  if ($database) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>