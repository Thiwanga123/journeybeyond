<?php      

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "journeybeyond";

    $conn = mysqli_connect($servername,$username,$password,$databasename);

    if(!$conn){
        die ("Connection Failed : " .mysqli_connect_error());
    }

?>