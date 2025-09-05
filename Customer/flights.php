<?php
	session_start();
?>
<html>
	<head>
		<title>
			AA Airlines
		</title>
		<style>
			table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #3d5cb8;
            color: white;
        }

		</style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
		<h3 class='set_nice_size' style="margin-top: 10%"><center><u>Upcoming Trips</u></center></h3>
		<?php
			$todays_date=date('Y-m-d');
			$thirty_days_before_date=date_create(date('Y-m-d'));
			date_sub($thirty_days_before_date,date_interval_create_from_date_string("30 days")); 
			$thirty_days_before_date=date_format($thirty_days_before_date,"Y-m-d");
			
			$customer_id=$_SESSION['login_user'];
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? AND journey_date>=? AND booking_status='CONFIRMED' ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"ss",$customer_id,$todays_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h3><center>No upcoming trips!</center></h3>";
			}
			else
			{
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
				while(mysqli_stmt_fetch($stmt)) {
        			echo "<tr>
        			<td>".$pnr."</td>
        			<td>".$date_of_reservation."</td>
					<td>".$flight_no."</td>
					<td>".$journey_date."</td>
					<td>".$class."</td>
					<td>".$booking_status."</td>
					<td>".$no_of_passengers."</td>
					<td>".$payment_id."</td>
        			</tr>";
    			}
    			echo "</table> <br>";
			}
			echo "<br><h3 class=\"set_nice_size\"><center><u>Completed Trips</u></center></h3>";

			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? and journey_date<? and journey_date>=? ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"sss",$customer_id,$todays_date,$thirty_days_before_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h3 style=\"margin-bottom: 10%\"><center>No trips completed in the past 30 days!</center></h3>";
			}
			else
			{
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
				while(mysqli_stmt_fetch($stmt)) {
        			echo "<tr>
        			<td>".$pnr."</td>
        			<td>".$date_of_reservation."</td>
					<td>".$flight_no."</td>
					<td>".$journey_date."</td>
					<td>".$class."</td>
					<td>".$booking_status."</td>
					<td>".$no_of_passengers."</td>
					<td>".$payment_id."</td>
        			</tr>";
    			}
    			echo "</table> <br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>

<footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <h3>AA Airlines</h3>
                <p>
                    Where Excellence Takes Flight. With a strong commitment to customer
                    satisfaction and a passion for air travel, AA Airlines offers
                    exceptional service and seamless journeys.
                </p>
                <p>
                    From friendly smiles to state-of-the-art aircraft, we connect the
                    world, ensuring safe, comfortable, and unforgettable experiences.
                </p>
            </div>
            <div class="footer__col">
                <h4>INFORMATION</h4>
                <p>Home</p>
                <p>About</p>
                <p>Book</p>
                <p>Flights</p>
            </div>
            <div class="footer__col">
                <h4>CONTACT</h4>
                <p>Support</p>
                <p>Media</p>
                <p>Socials</p>
            </div>
        </div>
        <div class="section__container footer__bar">
            <p>Copyright © 2023 AA Airlines. All rights reserved.</p>
            <div class="socials">
                <span><i class="ri-facebook-fill"><a href="#"></a></i></span>
                <span><i class="ri-twitter-fill"></i></span>
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-youtube-fill"></i></span>
            </div>
        </div>
    </footer>
	</body>
</html>