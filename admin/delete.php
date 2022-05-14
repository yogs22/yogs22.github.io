<?php
include "function.php";

$sql = "DELETE FROM pengalaman WHERE id = ". $_GET['id'];

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
