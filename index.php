<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>CourierCarT</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><i class="ri-store-3-line"></i><span>CourierCarT</span></a>
        <ul class="navbar">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="navigation">
            <button class="user btnLogin-popup"><i class="ri-user-fill"></i>Login</button>
            <!-- <a href="#" class="user"><i class="ri-user-fill"></i>SignIn</a> -->
            <!-- <a href="#">Register</a> -->
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <section class="background firstsection" id="home">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">The Future of Courier Tracking is here...</p>
                <p class="text-small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni qui, a aut
                    aspernatur corrupti quos amet expedita,
                    quod tenetur rem harum dolorum necessitatibus.</p>
                <div class="button">
                    <button class="btn btn1" id="myBtn">Track Your Courier Here</button>

                </div>
                <div id="myModal" class="modal">
                    <form action="track.php" method="post">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="search-pad">
                                <span class="close">&times;</span>
                                <input type="text" name="Track" id="Track" placeholder="   Enter Your AWB Tracking No.">
                                <div class="modal-body">
                                    <button class="btn btn-sm">Track</button>
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>


                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btns btn-su">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>

            </div>
            <div class="form-box register">
                <h2>Sign Up</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>


                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox"> I agree to the terms & conditions
                        </label>

                    </div>
                    <button type="submit" class="btns btn-sum">Sign Up</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <section class="why" id="service">
        <div class="us">
            <p class="text-size">
                Why <span class="under-line"> Choose </span><span class="colored">Us?</span>
            </p>
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="secTag text-big">Real-time Tracking</p>
            <p class="secSubTag text-small">The tracking method that makes use of GPS as well as logistics
                databases to determine the current location of an object at any moment in time</p>
        </div>
        <div class="thumbnail">
            <img src="img/time.png" alt="Real-time" class="imgFluid">
        </div>
    </section>
    <section class="section section-left">
        <div class="paras">
            <p class="secTag text-big">Easy to Use</p>
            <p class="secSubTag text-small">Easy & fast retrieval of information. Well designed reports.
                Decrease the load of the person involve in existing manual system.</p>
        </div>
        <div class="thumbnail">
            <img src="img/easy.png" alt="Easy" class="imgFluid">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="secTag text-big">Secure</p>
            <p class="secSubTag text-small">Enter Secure Express Courier Tracking number in online tracker system
                (Look Below) to track and trace your Courier, Parcel, Consignment, Shipping and Get Real time delivery
                status information instantly.</p>
        </div>
        <div class="thumbnail">
            <img src="img/shield.png" alt="Secure" class="imgFluid">
        </div>
    </section>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>CourierCarT<span><i class="ri-store-3-line"></i></span></h3>
            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                <a href="#">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Faq</a>
                <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">CourierCarT © 2023</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>NH 12. Simhat</span> Simhat, Nadia</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+91 7548030931</p>
            </div>
            <div id="contact">
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@couriercart.com">support@couriercart.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about" id="about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
                vehicula sit amet.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
                <a href="#"><i class="ri-links-fill"></i></a>
                <a href="#"><i class="ri-github-line"></i></a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>