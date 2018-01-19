<?php
require('conexion.php');
$sql = 'DELETE FROM perfiles WHERE nombre="'.$_POST["id"].'"';

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>