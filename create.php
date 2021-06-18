<?php
    // Dit zijn de benodigde gegevens voor het contact maken met de mysqlserver
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "pro-3";

    $conn = mysqli_connect($servername, $username, $password, $databasename);

    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    
    $query = "INSERT INTO `registreren` (`id`, `email`, `wachtwoord`, `userrole`) VALUES (NULL, 'Sir.ali.fatman@gmail.com', 'Cocaine', 'customer');";

    mysqli_query($conn, $query);
    header("Refresh: 2; ./index.php")
?>
<h1>Redirecting</h1>