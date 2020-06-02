<?php

if (count($_POST) > 0) {
    $conn = mysqli_connect('localhost:3306', 'root', '', 'bl_donors') or die ("Unable to connect to database");
    $sql = "insert into perm_donors values ('".$_POST["dname"]."', '".$_POST["age"]."', '".$_POST["bl_group"]."', '".$_POST["address"]."', '".$_POST["cnct_num"]."')";
    mysqli_query($conn, $sql) or die ("Donor Already Registered");
    header("Location: index.html");
}

?>
