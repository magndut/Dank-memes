<?php
include "../brugerflade/forside.html";
include "connect.php";

$id = $_GET["navn"];

mysqli_query($conn, "DELETE FROM myDB.booking WHERE id='".$id."'");

$conn->close();
?>
