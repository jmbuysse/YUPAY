<?php include 'header.php';?>
			<div id="body">
				<div class="account-section left">
					<h2>User Information</h2>
					<?php inputfield("Username", "text", "username")?>
					<?php inputfield("First Name", "text", "firstname")?>
					<?php inputfield("Middle Initial", "text", "middleinitial")?>
					<?php inputfield("Last Name", "text", "lastname")?>
					<?php inputfield("Email Address", "text", "emailaddress")?>
					<?php inputfield("Cell Phone", "text", "cellphone")?>
				</div>
				<div class="account-section right">
					<h2>Billing Information</h2>
					<?php inputfield("Name", "text", "name")?>
					<?php inputfield("Street 1", "text", "street1")?>
					<?php inputfield("Street 2", "text", "street2")?>
					<?php inputfield("City", "text", "city")?>
					<?php inputfield("State", "text", "state")?>
					<?php inputfield("Zip Code", "text", "zipcode")?>
					<?php inputfield("Country", "text", "country")?>
				</div>
				<div class="account-section left">
					<h2>Shipping Information</h2>
					<?php inputfield("Name", "text", "name")?>
					<?php inputfield("Street 1", "text", "street1")?>
					<?php inputfield("Street 2", "text", "street2")?>
					<?php inputfield("City", "text", "city")?>
					<?php inputfield("State", "text", "state")?>
					<?php inputfield("Zip Code", "text", "zipcode")?>
					<?php inputfield("Country", "text", "country")?>
				</div>
				<div class="account-section right">
					<h2>Payment Information</h2>
					<?php inputfield("Name On Card", "text", "nameoncard")?>
					<?php inputfield("Card Type",
							array('dropdown',
								array(
									array('visa', 'VISA'),
									array('master','MASTER CARD')
								)
							), "")?>
					<?php inputfield("Card Number", "number", "cardnumber")?>
					<?php inputfield("ExpirationDate", "text", "expirationdate")?>
					<?php inputfield("Security Code", "number", "securitycode")?>
			</div>
<?php include 'footer.php';?>