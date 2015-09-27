<?php 
session_start();
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>YUPAY | Your Online Flee Market</title>
		<link href="css/YUPAYStyle.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<div id="nav">
				<div id="nav-header">
					<div class="left">YUPAY.COM</div>
					<div class="right">Welcome, Dave! | Magage Account Here</div>
					<?php if (false){?>
					<div class="right">Welcome, Admin! | Manage Accounts Here</div>
					<div class="right">Welcome, Guest! | Register Here</div>
					<?php }?>
				</div>
				<div id="nav-bar">
					<div class="left">
						<div class="nav-bar-item">HOME</div>
						<div class="nav-bar-item">PRODUCTS</div>
						<div class="nav-bar-item">CATEGORIES</div>
						<div class="nav-bar-item">SELLERS</div>
						<a href="account.php"><div class="nav-bar-item">YOUR ACCOUNT</div></a>
						<div class="nav-bar-item">ABOUT US</div>
					</div>
					<?php if (false){?>
					<div class="right login">
						<div class="left">
							Username
							<br><br>
							Password
						</div>
						<div class="right">
							<input type="text" value="myusername">
							<br><br>
							<input type="password" value="mypassword">
						</div>	
					</div>
					<?php }?>
				</div>
			</div>