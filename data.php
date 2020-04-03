<?php
function ReturnHistoricalDataBCountry($Info){
  $servername = "69.16.238.106";
  $username = "simplate_rootuser";
  $password = "D4N7ht3lgZXE";
  $dbname = "simplate_covid19";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      echo("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO users (info) VALUES ('.$Info.')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>
