<?php
include 'connection.php';

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $mobilenumber = $_POST["mobilenumber"];
    $gender = $_POST["gender"];
    // $occupation = $_POST["occupation"];
    // $address = $_POST[""];
    
        // using sql to create a data entry query
        $sql = "INSERT INTO registration (fname, lname, age, email, mobile, gender)
        VALUES ('$fname', '$lname', '$age', '$email', '$mobilenumber', '$gender')";
  
        // // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);

        // mysqli_close($con);
        header("Location: submit.html");
}
?>