<?php
include "../brugerflade/forside.html";
include "connect.php";

  $sql = "SELECT * FROM myDB.booking";
  $result = mysqli_query($conn, $sql);

$conn->close();
?>

<style>
  .display-middle{
    top: 5%;
  }
  .active2 {
    background-color: white;
    color: black;
  }
</style>
<div class="tider">
  <table align="center " width="100%">
    <tr>
      <th></th>
      <th>navn</th>
      <th>antal</th>
      <th>tid</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {

      echo "<tr>";
      echo "<td class='blank'>";
      echo "<a href='slet.php?navn=".$row ["id"]."'><button class='slet'>X</button></a>";
      echo "</td>";
      echo "<td width='33%'>";
      echo $row ["navn"];
      echo "</td>";
      echo "<td width='33%'>";
      echo $row ["antal"];
      echo "</td>";
      echo "<td width='33%'>";
      echo $row ["dato"];
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</div>
