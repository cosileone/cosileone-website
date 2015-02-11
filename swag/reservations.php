<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Mini Swag</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/formStyle.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
	<script src="galleria/galleria-1.3.5.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="banner-container">
		<div id="headshot-container" class="box-shadow">
			<h2>Mini Swag: Swag for Kids</h2>
		</div>
	</div>
	<div id="nav-wrapper">
		<ul>
			<li><a href="k_swag.html">Kid Swag</a></li>
<!-- 			<li><a href="#">Sportswear</a></li> -->
<!-- 			<li><a href="#">Accessories</a></li> -->
<!-- 			<li><a href="#">Formal Wear</a></li> -->
			<li><a href="reservations.php">Reserve &amp; Order</a></li>
			<li><a href="credits.html">Credits</a></li>
			<li><a href="http://cosileone.tumblr.com">Blog</a></li>
		</ul>
	</div>
	<div id="content-wrapper">
		<div id="wrap">
      <h1><b>Reserve Some Swag</b></h1>
      <form id="contactform" action="php/processForm.php" method="post">
        <table>
          <tr>
            <td></td>
            <td><input type="text" id="name" name="name" placeholder="Name"/></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="text" id="email" name="email" placeholder="Email"/></td>
          </tr>
          <tr>
            <td></td>
            <td><textarea id="message" name="message" rows="5" cols="20" placeholder="Additional Details"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Reserve Now" id="send" /></td>
          </tr>
        </table>
      </form>
      <div id="response"></div>
    </div>
	</div>
</body>
</html>