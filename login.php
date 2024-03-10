<?php
session_start();
// include("index.php");
include("dbconnect.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "select * from form where email = '$email' and password='$password'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        // $_SESSION['name'] = $row['name'];
			  // $_SESSION['userid'] = $email;
        if($count>0) {
            $_SESSION['login']=$_POST['firstname'];
            // $_SESSION['name'] = $row['name'];
			      // $_SESSION['userid'] = $email;
            header("location:index.php");
        }
        else {
            echo '<script>
                
                alert("Login failed . Invalid username or password!!")
                </script>';
        }

        
        echo "<script type='text/javascript'> alert('wrong username or password ') </script>";
    }
    else {
        echo "<script type='text/javascript'> alert('wrong username or password ') </script>";
    }
}
?>
<link rel="stylesheet" href="./css/signin.css"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <section class="container">
  <div class="form login">
    <div class="form-content">
        <header> Login </header>
        <form method="POST">
        <div class="field input-field">
            <label > Email </label>
            <input type="email" class="input" name ="email" Required>
        </div>
        <div class="field input-field">
            <label> Password </label>
            <input type="password" class="input" name="password" Required>
        </div>
        <div class="field button-field">
          <input type="submit" name="" value="Submit">
        </div>
        </form>
        <p> Don't have an account? <a href="aashish.php"> Sign-up here </a></p>
    </div>
  </div>
  
</section>
</body>
</html>