<?php
$conn = mysqli_connect('localhost', 'root', '', 'snesystem');


if (isset($_GET['_id'])) {
    $id = $_GET['_id'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM notes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

}?>