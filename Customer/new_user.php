<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css" />
    <link rel="icon" type="image/png" href="assets/favicon1.png" sizes="32x32" />
    <title>AA Airlines</title>
</head>

<body>
    <nav>
        <div class="nav__logo">AA Airlines</div>
        <button class="btn"><a href="/Customer/login_page.php">Login</a></button>
    </nav>

    <div class="form__box">
        <form class="row g-3" action="new_user_form_handler.php" method="POST" id="new_user_from">
            <div class="col-md-6">
                <label for="uname" class="form-label">Username</label>
                <input type="text" class="form-control" id="uname" name="username" required>
            </div>
            <div class="col-md-6">
                <label for="pass" class="form-label">Set Password</label>
                <input type="password" class="form-control" id="pass" name="password" required>
            </div>
			<div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
			<div class="col-md-6">
                <label for="pno" class="form-label">Phone no.</label>
                <input type="text" class="form-control" id="pno" name="phone_no" required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="lname" name="address" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="Submit" name="Submit">Sign up</button>
            </div>
        </form>
    </div>

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