<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <title>AA Airlines</title>
</head>
<body>
    <nav>
        <div class="nav__logo">AA Airlines</div>
        <button class="btn"><a href="login_page.php">Logout</a></button>
    </nav>

    <div class="flight-btn">
        <button class="btn" style="padding-left: 10%;padding-right: 10%;margin-top: 50px"><a href="/Admin/all_bookings.php">View All flights</a></button>
    </div>
    <div class="flight-btn">    
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/admin_view_booked_tickets.php">Search Booked Tickets </a></button>
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/add_flight_details.php">Add Flight</a></button>
    </div>

    <div class="flight-btn">
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/delete_flight_details.php">Delete Flight</a></button>
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/add_jet_details.php">Add Aircraft Details</a></button>
    </div>

    <div class="flight-btn">
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/activate_jet_details.php">Activate Aircraft</a></button>
        <button class="btn" style="padding-left: 10%;padding-right: 10%;"><a href="/Admin/deactivate_jet_details.php">Deactivate Aircraft</a></button>
    </div>

</body>
</html>