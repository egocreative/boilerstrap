<?php

  $title = "Boilerstrap";
  $js = array(
  	'vendor/jquery.validate',
  	'vendor/jquery.form',
  	'contact'
  );
  include('includes/document-header.php');

?>

<section>
	<div class="row">
		<h1 class="twelve column">Contact Us</h1>
	</div>

	<div id="contact-map"></div>

	<div class="row">

		<h2 class="twelve column">Send us an email</h2>

		<form action="contact.php" method="post" class="nine column" id="contact-form">

			<div class="row">
				<div class="four columns">
					<label for="name">Name <span class="required">*</span></label>
					<input type="text" name="name" placeholder="Enter your name" required="required">
				</div>
				<div class="four columns">
					<label for="email">Email <span class="required">*</span></label>
					<input type="email" name="email" placeholder="Enter your email address" required="required">
				</div>
				<div class="four columns">
					<label for="telephone">Telephone</label>
					<input type="tel" name="telephone" placeholder="Enter your phone number" class="phone-uk">
				</div>
			</div>

			<label for="subject">Subject</label>

			<input type="text" name="subject" placeholder="Enter a subject">

			<label for="message">Message <span class="required">*</span></label>

			<textarea name="message" placeholder="Message" required="required" class="resize-vert"></textarea>

			<button class="button" type="submit">Send</button>

		</form>

		<aside class="three column">

			<h4>Our Address</h4>
			<address>The Water Tower, Hartley Wintney, Hampshire, RG27 8AS</address>

			<h4>Call us</h4>
			<address>01252 820470</address>

			<h4>Email us</h4>
			<ul class="no-bullets">
				<li><address><a href="mailto:info@ego-creative.com">info@ego-creative.com</a></address></li>
				<li><address><a href="mailto:support@ego-creative.com">support@ego-creative.com</a></address></li>
			</ul>

		</aside>

	</div>

</section>

<?php include('includes/document-footer.php'); ?>