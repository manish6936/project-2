<?php
$update = false;
$insert = false;
$delete = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("sorry we failed to connect: '" . mysqli_connect_error());
}
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = '$sno'";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['snoEdit'])) {
    // Update the record
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

    // Sql query to be executed
    $sql = "UPDATE `notes` SET `title` = '$title' ,`description` = '$description' WHERE `notes`.`sno` = '$sno'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $update = true;
      // echo "success";
    } else {
      echo "We could not update the record successfully";
    }
  } else {
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Sql query to be executed
    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
      $insert = true;
    } else {
      echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
    }
  }
}

?>