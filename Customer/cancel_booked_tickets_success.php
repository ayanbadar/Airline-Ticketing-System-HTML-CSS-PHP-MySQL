<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 68px
			}
		</style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
  <link rel="icon" type="image/png" href="assets/favicon1.png" sizes="32x32" />
	</head>
	<body>
	<nav>
    <div class="nav__logo">AA Airlines</div>
    <ul class="nav__links">
      <li class="link"><a href="/Customer/index.php">Home</a></li>
      <li class="link"><a href="/Customer/flights.php">Flight Status</a></li>
      <li class="link"><a href="/Customer/book.php">Book</a></li>
      <li class="link"><a href="/Customer/cancel.php">Cancel Booking</a></li>
      <li class="link"><a href="/Customer/about.php">About</a></li>
      <li class="link"><a href="/Customer/contact.php">Contact</a></li>
    </ul>
    <button class="btn"><a href="/Customer/login_page.php">Logout</a></button>
  </nav>
        <div style="display:flex; justify-content:center">
		<h3 style='padding-left: 40px;'>Your ticket has been cancelled successfully.<br><br>Your amount of <?php echo $_SESSION['refund_amount']?> will be refunded to your bank account (Cancellation charge on 15% of your ticket amount has been deducted).</td>
		</h3>
		<br>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
        </div>
	</body>
</html>