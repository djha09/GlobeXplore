<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>
<link rel="stylesheet" href="./css/signin.css"/>

<!-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form method="post">
											<h3>Signin with your account </h3>
	<input type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" id="password" placeholder="Password" value="" required="">	
											<h4><a href="forgot-password.php">Forgot password</a></h4>
											
											<input type="submit" name="signin" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

            <body>
                <section class="container forms">
                    
                    <div class="form login">
                        <div class="form-content">
                            <!-- <img src="./assets/images/logo.jpg"> -->
                            <header>Login</header>
                            
                            <form action="#">
                                <div class="field input-field">
                                    <input type="email" placeholder="Email" class="input">
                                </div>
        
                                <div class="field input-field">
                                    <input type="password" placeholder="Password" class="password">
                                    <i class='bx bx-hide eye-icon'></i>
                                </div>
        
                                <div class="form-link">
                                    <a href="#" class="forgot-pass">Forgot password?</a>
                                </div>
        
                                <div class="field button-field">
                                    <button>Login</button>
                                </div>
                            </form>
        
                            <div class="form-link">
                                <span>Don't have an account? <a href="signup.php" class="link signup-link">Signup</a></span>
                            </div>
                        </div>
        
                        <!-- <div class="line"></div>
        
                        <div class="media-options">
                            <a href="#" class="field facebook">
                                <i class='bx bxl-facebook facebook-icon'></i>
                                <span>Login with Facebook</span>
                            </a>
                        </div>
        
                        <div class="media-options">
                            <a href="#" class="field google">
                                <img src="#" alt="" class="google-img">
                                <span>Login with Google</span>
                            </a>
                        </div> -->
        
                    </div>
        
                    <!-- Signup Form -->
        
                    <div class="form signup">
                        <div class="form-content">
                            <header>Signup</header>
                            <form action="#">
                                <div class="field input-field">
                                    <input type="email" placeholder="Email" class="input">
                                </div>
        
                                <div class="field input-field">
                                    <input type="password" placeholder="Create password" class="password">
                                </div>
        
                                <div class="field input-field">
                                    <input type="password" placeholder="Confirm password" class="password">
                                    <i class='bx bx-hide eye-icon'></i>
                                </div>
        
                                <div class="field button-field">
                                    <button>Signup</button>
                                </div>
                            </form>
        
                            <div class="form-link">
                                <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                            </div>
                        </div>
        
                        <div class="line"></div>
        
                        <div class="media-options">
                            <a href="#" class="field facebook">
                                <i class='bx bxl-facebook facebook-icon'></i>
                                <span>Login with Facebook</span>
                            </a>
                        </div>
        
                        <div class="media-options">
                            <a href="#" class="field google">
                                <img src="#" alt="" class="google-img">
                                <span>Login with Google</span>
                            </a>
                        </div>
        
                    </div>
                </section>
        
                <!-- JavaScript
                <script src="js/script.js"></script>
            </body> -->
        