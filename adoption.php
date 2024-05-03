<?php
include 'connection.php';

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mobilenumber = $_POST["mobilenumber"];
    $gender = $_POST["gender"];
    $occupation = $_POST["occupation"];
    $address = $_POST["address"];
    
        // using sql to create a data entry query
        $sql = "INSERT INTO adoption (firstname, lastname, dob, email, mobile, gender, occupation, address)
        VALUES ('$firstname', '$lastname', '$dob', '$email', '$mobilenumber', '$gender', '$occupation', '$address')";
  
        // // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);

        // mysqli_close($con);
        header("Location: submit.html");
}
?>