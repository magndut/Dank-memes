<?php
include "../brugerflade/forside.html";
include "connect.php";

// sql to create table
$sql = "CREATE TABLE myDB.booking (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
navn VARCHAR(30) NOT NULL,
antal VARCHAR(30) NOT NULL,
dato VARCHAR(50) NOT NULL)";

$conn->query($sql);

$conn->close();
?>

<style>
  .display-middle{
    top: 5%;
  }
  .active1 {
    background-color: white;
    color: black;
  }
</style>
<div class="booking">
  <form action="indsend.php" method="post">
    <label for="name">navn</label>
    <input type="text" name="navn" placeholder="Indtast fulde navn" required>

    <label for="count">antal</label>
    <input type="number" min="1" max="50" name="antal" placeholder="Antal gæster" required>

    <label for="date_time">dato og tid</label>
    <input type="datetime-local" name="dato" value="2018-08-29T12:00" required>

    <input type="submit" name="submit" value="indsend">
  </form>
</div>
