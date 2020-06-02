<?php

  $check = 0;
  if (count($_POST) > 0) {

    // echo $_POST["city"];

    $conn = mysqli_connect('localhost:3306', 'root', '', 'bl_donors');
    $sql1 = "select dname, age, bl_group, cnct_num from perm_donors where bl_group = '".$_POST["bgroup"]."' and address like '%".$_POST["city"]."%' ";
    $sql2 = "select dname, age, bl_group, cnct_num from temp_donors where bl_group = '".$_POST["bgroup"]."' and address like '%".$_POST["city"]."%' ";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);

  //   if (mysqli_num_rows($result) > 0) {
  //     while ($row = mysqli_fetch_assoc($result)) {
  //       echo "Name: ".$row["dname"];
  //       echo "Age: ".$row["age"];
  //       echo "Blood Group: ".$row["bl_group"];
  //       echo "Contact Number: ".$row["cnct_num"];
  //     }
  //   }
  //   else {
  //     echo "No available Donors";
  //   }
  //
  // mysqli_close($conn);
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <!-- Main style sheet file -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div style="overflow-x: auto;">

    <?php
        if (mysqli_num_rows($result1) > 0) {
            echo "
            <table>
            <tr>
            <th>Name</th>
            <th>Age </th>
            <th>Blood group</th>
            <th>Phone Number</th>
            </tr>
            ";
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<tr>";
                echo "<td>".$row["dname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["bl_group"]."</td>";
                echo "<td>".$row["cnct_num"]."</td>";
                echo "</tr>";
            }
            $check = 1;
            echo "</table>";
        }

        if (mysqli_num_rows($result2) > 0) {
            echo "
            <table>
            <tr>
            <th>Name</th>
            <th>Age </th>
            <th>Blood group</th>
            <th>Phone Number</th>
            </tr>
            ";
            while ($row = mysqli_fetch_assoc($result2)) {
                echo "<tr>";
                echo "<td>".$row["dname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["bl_group"]."</td>";
                echo "<td>".$row["cnct_num"]."</td>";
                echo "</tr>";
            }
            $check = 1;
            echo "</table>";
        }

        if ($check != 1) {
            echo "No Available donors.";
        }
        mysqli_close($conn);
    ?>
    </div>

</body>
</html>