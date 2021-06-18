<?php
    include("./connect_db.php");
    include("./functions.php");

    $bmidb = sanitize($_POST["bmidb"]);
    $idv = sanitize($_POST["idv"]);

    $sql = "SELECT * FROM `registreren` WHERE `id` = '$idv'"; 

    $result = mysqli_query($conn, $sql);

    $query = "UPDATE `registreren` SET `bmi` = '$bmidb', `activated` = b'1' WHERE `id` = '$idv'";

    mysqli_query($conn, $query);

    header("Refresh: 1; ./index.php?content=v-home");
?>