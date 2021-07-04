
<?php

$msg="";

    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD']=='POST')
{

	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function


	//Load Composer's autoloader
	require 'assets/plugins/mailer/PHPMailer.php';
	require 'assets/plugins/mailer/SMTP.php';
	require 'assets/plugins/mailer/Exception.php';



	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
    $mail2 = new PHPMailer(true);

	try {
	    //Server settings
	    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();    
	    $mail2->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com'; 
	    $mail2->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;  
	    $mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'phpcodetset@gmail.com';  
	    $mail2->Username   = 'phpcodetset@gmail.com';                     //SMTP username
                   //SMTP username
	    $mail->Password   = 'phpcodetest1'; 
	    $mail2->Password   = 'phpcodetest1';                               //SMTP password
                              //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
	    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 

	               //Enable implicit TLS encryption
	    $mail->Port       = 465;
	    $mail2->Port       = 465;    
    
	                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom('phpcodetset@gmail.com', 'website admin');
	    $mail->addAddress('prog.basma1@gmail.com', 'callcenter');     //Add a recipient

	    $mail->addReplyTo($_POST['email'], $_POST['name']);

	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'problem from website';
	    $mail->Body    =  $_POST['message'];
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();


		/***************************/

	     $mail2->setFrom('phpcodetset@gmail.com', 'website admin');
	    $mail2->addAddress($_POST['email'], $_POST['name']);     //Add a recipient

	    $mail2->addReplyTo('prog.basma1@gmail.com', 'call center');

	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail2->isHTML(true);                                  //Set email format to HTML
	    $mail2->Subject = 'thanks for contact with us';
	    $mail2->Body    =  "we deliverd your problem and we will  replpy during 24 hours ";
	    $mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail2->send();


	    $msg= 'Message has been sent';
		} catch (Exception $e) {
		   $msg= "Message could not be sent.";
		}


}



?>



<?php
include('includes/header.php');


?>
<!-- end header -->

<!-- start main content -->
<main class="main-container">
<!-- contact content -->


	<!-- Start Contact Us -->

	<div id="Contact" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="Contact-Form">
							<?php
							if($_SERVER['REQUEST_METHOD']=='POST'):


							?>
							<h3><?php echo $msg;?></h3>
							<?php
						    else:
							?>

							<form class="leave-comment contact-form" method="post" action="#" id="cform" autocomplete="on">
								<div class="Contact-us">
									<div class="form-input col-md-4">
										<input type="text" name="name" placeholder="Your Name" required>
									</div>
									<div class="form-input col-md-4">
										<input type="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-input col-md-4">
										<input type="text" name="contact_phone" placeholder="Phone">
									</div>
									<div class="form-input col-md-12">
										<textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="Message" spellcheck="true" required></textarea>
									</div>
									<div class="form-submit col-md-12">
										<input type="submit" class="btn btn-custom-6" value="Send Message">
									</div>
								</div>
							</form>
							<?php
							endif;
							?>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">

					<div class="Contact-Info">
						<h4>Contact Details</h4>
						<div class="tex-contact">
							<p>Lorem ipsum dolor sit amet, adipiscing condimentum tristique vel, eleifend sed turpis. Amet, consectetur adipising elit Integer.</p>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Phone :</p>
							<ul>
								<li>
									<i class="fa fa-phone"></i>
									<span>+0 (123) 456 - 7890</span>
								</li>
								<li>
									<i class="fa fa-fax"></i>
									<span>+0 (123) 456 - 7890</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Email :</p>
							<ul>
								<li>
									<i class="fa fa-envelope"></i>
									<span>demo@metlife.com</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-12">
							<p>Address :</p>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>3453 corn street, Sanford, FL 34232.</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Us -->
<!-- end contact content -->

	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
							</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- end main content -->
<div class="clearfix"></div>

<!-- start footer area -->
<?php

include('includes/footer.php');
?>
<!-- footer area end -->



