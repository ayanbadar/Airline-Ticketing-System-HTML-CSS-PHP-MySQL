<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>

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
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>Your payment of <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h3>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
    </div>
	</body>
</html>