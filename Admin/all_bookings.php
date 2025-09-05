<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<div  style="display:flex; justify-content: center; margin-top: 10%;">
		<?php
			
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT * FROM flight_details ";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$arrival_date,$departure_time,$arrival_time,$seats_economy,$seats_business,$price_economy,$price_business,$Aircraft_id);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<h1>No booked tickets information is available!</h1>";
					}
					else
					{
						echo "<table cellpadding=\"10\"";
						echo "<tr><th>flight_no</th>
						<th>from_city</th>
						<th>to_city</th>
						<th>departure_date</th>
						<th>arrival_date</th>
						<th>departure_time</th>
                        <th>arrival_time</th>
                        <th>seats_economy</th>
                        <th>seats_business</th>
                        <th>price_economy</th>
                        <th>price_business</th>
                        <th>Jet_id</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
							<td>".$flight_no."</td>
							<td>".$from_city."</td>
							<td>".$to_city."</td>
							<td>".$departure_date."</td>
							<td>".$arrival_date."</td>
							<td>".$departure_time."</td>
                            <td>".$arrival_time."</td>
                            <td>".$seats_economy."</td>
                            <td>".$seats_business."</td>
                            <td>".$price_economy."</td>
                            <td>".$price_business."</td>
                            <td>".$Aircraft_id."</td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					// else
					// {
					// 	echo "Submit Error";
					// 	echo mysqli_error();
					// }
				
		?>
		</div>
	</body>
</html>