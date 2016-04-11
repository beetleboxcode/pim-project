<?php 

defined('_BDZ') or die; 
 ?>

 <div class="wrapper">
 	<div class="container">
 		<div class="login-box-wrapper">
 			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
	 			<div class="login-box-container">
	 				<div class="login-title"><h1>Login</h1></div>
	 				<div class="login-control">
	 					<div class="login-label">Username</div>
	 					<div class="login-sepp"></div>
	 					<div class="login-input">
	 						<input type="text" name="username">
	 					</div>
	 				</div>
	 				<div class="login-control">
	 					<div class="login-label">Password</div>
	 					<div class="login-sepp"></div>
	 					<div class="login-input">
	 						<input name="password" type="password">
	 					</div>
	 				</div>
	 				<div class="login-control">
	 					<div class="login-input-button">
	 						<div class="warning-text"><?php echo $warningLogin; ?></div>
	 					</div>
	 				</div>	
	 				<div class="login-control">
	 					<div class="login-input-button">
	 						<input class="right" type="submit" name="login" value="Submit">
	 					</div>
	 				</div>	
	 			</div>
 			</form>
 		</div>
 	</div>
 </div>