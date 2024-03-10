<?php
// session_start();
// include "index.php";
include "dbconnect.php";
// if($_SERVER['REQUEST_METHOD'] == "POST") {
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    if(!empty($email) && !empty($password) && !is_numeric($email)) {
        $query="INSERT INTO `form` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`) VALUES
        ('1', '$firstname', '$lastname', '$gender' ,'$email', '$password')";
        mysqli_query($conn,$query);
        // echo "<script type='text/javascript'> alert('Successfully Register') </script>";
        header("location:index.php");
    }
    else {
        echo "<script type='text/javascript'> alert('Please entered correct value') </script>";
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signin.css"/>
    <title>sign-up </title>
</head>
<body>
<section class="container forms">
    <div class="form login">
        <header>sign up</header>
        <form method="POST">
        <div class="field input-field">
            <label> First name </label>
            <input type="text" name="firstname" Required>
        </div>
        <div class="field input-field">
            <label> Last name </label>
            <input type="text" name="lastname" Required>
        </div>
        <div class="field input-field">
            <label> Gender </label>
            <input type="text" name="gender" Required>
        </div>
        <div class="field input-field">
            <label> email </label>
            <input type="email" name="email" Required>
        </div>
        <div class="field input-field">
            <label> Password </label>
            <input type="password" name="password" Required>
        </div>
        <div class="field button-field">
            <input type="submit" name="" value="submit">
        </div>

        </form>
        <p> Already have an account? <a href="sample.php"> login</a></p>
</section>
</body>
</html>