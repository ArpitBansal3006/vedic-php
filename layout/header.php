<?php
session_start(); 
$authenticated = false;
if(isset($_SESSION["email"])){
    $authenticated = true;
}
?> 

<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vedic Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Navbar Styles */
        .navbar {
            background: black;
            backdrop-filter: blur(10px);
            height: 80px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        /* Hero Section Styles */
        .carousel-item {
            height: 100vh;
            background: no-repeat center center scroll;
            background-size: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 15px;
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
            max-width: 800px;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .hero-btn {
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            margin: 10px;
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* Footer Styles */
        .footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 60px 0 30px;
        }

        .footer h5 {
            color: #fff;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #a8a8a8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-bottom {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #333;
            text-align: center;
            color: #a8a8a8;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.3rem;
            }

            .hero-btn {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
        
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
  </head> 
  <body> 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top"> 
        <div class="container">
            <div class="row w-100">
                <!-- Website Name on the Right -->
                <div class="col-4 text-end">
                    <a class="navbar-brand text-light" href="/index.php">Vedic Collections</a> 
                </div>

                <!-- Navigation Links Centered -->
                <div class="col-4 text-center">
                    <ul class="navbar-nav d-flex justify-content-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/contact.php">Contact</a>
                        </li>
                        <!-- Add more nav items as needed -->
                    </ul>
                </div>

                <!-- Login/Register Buttons on the Right -->
                <div class="col-4 text-end">
                    <?php if ($authenticated) { ?> 
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION["first_name"] ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profile.php">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } else { ?> 
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-primary me-2" href="/register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="/login.php">Login</a>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div> 
    </nav> 

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb2mEaAs2m3uM4I2t6tgLONXw6ta5/2ha6O2v8qggoXsR1y6g" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-cuC6kLXLKmRkbbGjwHk8VA5+d8ZmkmMlHrk1GmKgEgeesZhtPhQe3e0u55phJmT8" crossorigin="anonymous"></script>
  </body>
</html>