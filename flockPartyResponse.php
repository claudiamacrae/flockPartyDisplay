<?php
$file = fopen('flockParty.csv', 'a');
$name = $_GET["name"];
$email = $_GET["email"];
fputcsv($file, array($name, $email));
fclose($file);
?>

<html>
	<head>
		<link rel='stylesheet' type='text/css' href='flockStylesResponse.php'>
		<img src="groupMeQR.png" alt="qr code to groupchat" class="qr"/>
		<img src="sumacTrans.png" alt="sumac logo" class = "logo"/>
	</head>
<body>

<form action="flockPartyResponse.php" method="_POST">
			<p>
			<label for="fname" class = "lab">NAME</label>
			<input type="text" name="name" placeholder="Your first and last name.."><br>
			<label for="email" class = "lab">EMAIL</label>
			<input type="text" name="email" placeholder="Your email.."><br>
			</p>
			<input type="image" src="button.png" alt="submit button" width="200">
		</form>
		<img src="groupMeQR.png" alt="qr code to groupchat" class="qr"/>

</body>
<div id="success"><?php echo $email ?> was added to the email list. Thanks <?php echo $name ?> !</div>
</html>