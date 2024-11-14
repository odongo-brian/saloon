<?php
    $conn = mysqli_connect("localhost", "root", "", "salon_db");
     if(!$conn){
        echo "<script>alert('Unable to connect to Database')</script>";
     }

?>