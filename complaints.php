<?php
include 'connection.php';

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mobilenumber = $_POST["mobilenumber"];
    $gender = $_POST["gender"];
    $reason = $_POST["reason"];
    $address = $_POST["address"];
    
        // using sql to create a data entry query
        $sql = "INSERT INTO complaints (firstname, lastname, dob, email, mobile, gender, reason, address)
        VALUES ('$firstname', '$lastname', '$dob', '$email', '$mobilenumber', '$gender', '$reason', '$address')";
  
        // // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);

        // mysqli_close($con);
        header("Location: submit.html");
}
?>