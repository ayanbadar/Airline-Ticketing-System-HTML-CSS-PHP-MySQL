<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/index.css" />
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 215px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 30px;
			}
		</style>
	</head>
	<body>
		<nav>
            <div class="nav__logo">AA Airlines</div>
            <button class="btn"><a href="login_page.php">Logout</a></button>
        </nav>
		<div class="booking__nav">
            <span>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</span>
          </div>
		<form action="admin_view_booked_tickets_form_handler.php" method="post" style="display:flex; justify-content: center; margin-top: 10%">
			<div>
			<table cellpadding="5" style="display:flex; justify-content: center;" >
				<tr>
					<td class="fix_table">Enter a valid Flight No.</td>
					<td class="fix_table">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<div style="display:flex; justify-content: center">
			<input type="submit"  value="Submit" name="Submit" >
			</div>
			
			</div>
		</form>
	</body>
</html>