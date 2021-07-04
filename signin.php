



<?php

$msg="";

include('includes/header.php');


?>
<!-- end header -->

<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store7";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM users WHERE user_name=:username");
  $stmt->bindParam(':username', $_POST['username']);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->fetchAll();
  if($result){

	 foreach ($result as $row) {
	  	if($row['user_password']==md5($_POST['password']))
	  	{
	  		$_SESSION['username']=$row['user_name'];

	  		header('location:index.php');
	  		echo "welcome";
           

	  	}
	  	else{
	  		$msg="this password doesnot match for this username , <a href='#'> forgot passowrd? </a>";
	  		


	  	}
	  }

  }
  else{

  	$msg="this username not found in DB";
  	
  }
 


 
} catch(PDOException $e) {
 $msg="problem in sign in with this data";
}
$conn = null;


}

?>



<!-- start main content -->
<main class="container">

	<section>

		<div class="signinpanel">

			<div class="row">

				<div class="col-md-5 col-md-offset-1">
					<?php
					if($msg):
					?>

					<h3 class="alert alert-danger p-2">
						<?php echo $msg; ?>
							
					</h3>

					<?php
				     endif;

					?>
					<form method="post" action="#">
						<h4 class="nomargin">Sign In</h4>
						<p class="mt5 mb20">Login to access your account.</p>

						<input type="text" class="form-control uname" placeholder="Username" name="username" />
						<input type="password" class="form-control pword" placeholder="Password" name="password" />
						<a href="#"><small>Forgot Your Password?</small></a>
						<button class="btn btn-success btn-block">Sign In</button>

					</form>
				</div><!-- col-sm-5 -->

				<div class="col-md-5 col-md-push-1">

					<div class="signin-info">
						<div class="logopanel">
							<h1><span>[</span> LookCare <span>]</span></h1>
						</div><!-- logopanel -->

						<div class="mb20"></div>

						<h5><strong>Welcome to Ecommerce Bootstrap 3 Template!</strong></h5>
						<ul>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Fully Responsive Layout</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> HTML5/CSS3 Valid</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Ecommerce Template</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Easy Customize</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
						</ul>
						<div class="mb20"></div>
						<strong>Not a member? <a href="signup.html">Sign Up</a></strong>
					</div><!-- signin0-info -->

				</div><!-- col-sm-7 -->



			</div><!-- row -->


		</div><!-- signin -->

	</section>
</main>
<!-- end  main content -->

<!-- start footer area -->

<?php

include('includes/footer.php');
?>
<!-- footer area end -->




<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>


</html>

