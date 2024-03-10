<?php

include 'navbar.php';
include "dbconnect.php";
 // Initilize varibles
$email = $name = $password = $conf_password = $succ_msg = $email_err = $err_msg = ""; 
$error = false; 
if (isset($_POST['submit'])) {    // if Form is submitted
	// store form data into variables
	$email 		= trim($_POST['email']);
	$name 		= trim($_POST['name']);  
	$password = trim($_POST['password']);

	// generate md5 hash
	$password = md5($password);
	// validate email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$email_err = "Invalid email format";
  	$error = true;
	}
	// check if email already exists
    $sql = "select * from users where email = '$email'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		$email_err = "Email already exists";
		$error = true;
    }
	if (!$error) {
		// $signup_date = date('Y-m-d');
		// write SQL statement to insert into database table
		$sql = "insert into users (email,name,password) values ('$email','$name','$password')";
		// Execute query
		$result = mysqli_query($conn,$sql);
		if ($result)
			$succ_msg = "Signup Successful";
            header("location:index.php");
    }
		else
        {
			$err_msg = "Error in Signup";
		}
	}
	?>	
   <link rel="stylesheet" href="css/sample.css?v=2">
    <section class="login">
    <div class="form login">
    <div class="form-content">  
        <h1>Signup</h1>
    <form class="form-1" action="signup.php" method ="post">
	 	
	 	<?php if ($succ_msg !="") ?>
	 	<p class="succ-msg"><?php echo $succ_msg; $succ_msg=""; ?></p>
	 	<?php if ($err_msg !="") ?>
	 	<p class="err-msg"><?php echo $err_msg; $err_msg ="";?></p>

	 	<div class="text">
			 	<!-- <label>Email Id</label> -->
			 	<input type = "text" class="input" name="email" id = "email" maxlength="255" value="<?php echo $email;?>" placeholder ="Enter your Email Id" required>
			 	<div class="error"><?php if ($email_err !="") echo $email_err;?></div>
		</div>
		<div class="text">
			 	<!-- <label>Name</label> -->
			 	<input type = "text" class="input" name="name" maxlength="255" value="<?php echo $name;?>" placeholder ="Enter your Name" required>
		</div>
		<div class="text">
			 	<!-- <label>Password</label> -->
			 	<input type = "password" class="input" name="password" id = "password" maxlength="20" placeholder ="Enter Password" required>
		</div>
		<div class="text">
	 			<!-- <label>Confirm Password</label> -->
	 			<input type = "password" class="input" name="conf_password" id = "conf_password" maxlength="20" value="<?php echo $conf_password;?>" placeholder ="Re Enter Password" required>
		</div>
		<!-- <div class="col-md-12 form-group">
	 			<input type="checkbox" class="check" onclick="togglePwd()">Show Password
		</div> -->
		<div class="button">
	 			<button type="submit" class="btn" name="submit">Submit</button>
		</div>
	</form>
<!-- <script>
  $(document).ready(function() { 
       $("#signup").addClass("active"); 
    });
</script> -->
</body>
</html>