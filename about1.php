<?php
include 'connection.php';

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $number = $_POST["number"];
    $amount = $_POST["amount"];    
        // using sql to create a data entry query
        $sql = "INSERT INTO donation (fname, number, amount)
        VALUES ('$fname', '$number', '$amount')";
  
        // // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);

        // mysqli_close($con);
        header("Location: afterdonation.html");
}
?>