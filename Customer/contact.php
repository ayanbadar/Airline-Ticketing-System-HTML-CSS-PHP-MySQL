<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css" />
    <link rel="icon" type="image/png" href="assets/favicon1.png" sizes="32x32"/>
    <title>AA Airlines</title>
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

    <section class="section__container travellers__container">
        <h2 class="section__header">Contact our Developers</h2>
        <div class="developers__grid">
            <div class="travellers__card">
                <img src="assets/me.jpg" alt="traveller" />
                <div class="travellers__card__content">
                    <h4>Ayan Badar</h4>
                    <p>Front-end Developer</p>
                    <p>+92 322 2935897</p>
                </div>
            </div>
            <div class="travellers__card">
                <img src="assets/ayan.jpg" alt="traveller" />
                <div class="travellers__card__content">
                    <h4>Ayan Bin Rizwan</h4>
                    <p>Back-end Developer</p>
                    <p>+92 312 2873190</p>
                </div>
            </div>
    </section>

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