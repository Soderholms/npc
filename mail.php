<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "anton.soderholm@icloud.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error");

echo '

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NextProjectConsulting</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	 <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<header>
		<img src="img/NPC.png">
		

		<ul class="navlist">
			<li><a href="index.html#start" class="active">Start</a></li>
		    <li><a href="index.html#konsult">Projektkonsult</a></li>
			<li><a href="index.html#om">Om mig</a></li>
            <li><a href="index.html#projekt">Tidigare projekt</a></li>
			<li><a href="index.html#kontakt">Kontakta mig</a></li>
		</ul>

		<div class="bx bx-menu" id="menu-icon">
			
		</div>
	</header>

	<div class="header-div"></div>

    <div class="sent">

		<section class="about" id="om">
			
	
			<div class="about-text">
				<h2>Ditt meddelande har nu skickats!<span></span></h2>
				<h4>Jag är återkommer så fort som möjligt</h4>
				<p></p>
				<a href="index.html#start" class="btn">Till startsidan</a>
			</div>
			
		</section>
    </div>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>


';

?>