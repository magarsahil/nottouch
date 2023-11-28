<?php
    @include("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive contact us page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/9f13f22c71.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./css/contact.css">
    <style>
        .contact{
            background-image: url("./image/farmer.jpg");
        }
    </style>
</head>
<body>
	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>If you have any queries about our website you can contact us from here.Its our pleasure to help you.
			</p>
		</div>
			<div class="container">
				<div class="ContactInfo">
					<div class="box">
						<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
						<div class="text">
							<h3>Address</h3>
							<p>Prithivichowk,<br>Pokhara,Kaski<br>57576</p>
						</div>
					</div>
						<div class="box">
						<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
						<div class="text">
							<h3>Phone</h3>
							<p>+977 9801100100</p>
						</div>
					</div>
					<div class="box">
						<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
						<div class="text">
							<h3>Email</h3>
							<p>nepalfarmermarket33700@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
	</section>

</body>
</html>
<?php
    @include("footer.php");
?>