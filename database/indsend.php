<?php
include "../brugerflade/forside.html";
include "connect.php";

$navn = $_POST['navn'];
$antal = $_POST['antal'];
$dato = $_POST['dato'];

$navn = mysqli_real_escape_string($conn, $navn);
$antal = mysqli_real_escape_string($conn, $antal);
$dato = mysqli_real_escape_string($conn, $dato);

$sql = "INSERT INTO booking (navn, antal, dato)
          VALUES ('$navn', '$antal', '$dato')";

$conn->query($sql);

mysqli_close($conn);
?>
