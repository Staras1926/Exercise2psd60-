<!DOCTYPE html>
<html lang="zxx">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcelona Official page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="search-btn search-switch">
            <i class="fa fa-search"></i>
        </div>
        <div class="header__top--canvas">

            <div class="ht-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <ul class="main-menu mobile-menu">
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="./club.html">Club</a></li>
            <li><a href="./schedule.html">Schedule</a></li>
            <li><a href="./result.html">Results</a></li>
           
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                    <li><a href="schedule.html">Schedule</a></li>
                    <li><a href="results.html">Results</a></li>
                </ul>
            </li>
            <li><a href="./contact.html">Contact Us</a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ht-info">
                            <ul>
                                <li>20:00 - May 19, 2019</li>
                                <li><a href="#">Sign in</a></li>
                                <li><a href="#">Log in</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ht-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php"><img src="img/barca logo.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <ul class="main-menu">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./club.html">Club</a></li>
                                <li><a href="./schedule.html">Schedule</a></li>
                                <li><a href="./result.html">Results</a></li>
                                
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="schedule.html">Schedule</a></li>
                                        <li><a href="result.html">Results</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="./contact.html">Contact Us</a></li>
                            </ul>
                            <div class="nm-right search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.271618925628!2d-73.6794031851738!3d41.019313126695636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c29772c9aecd8b%3A0x7bb929f83bd76a38!2sBetsy%20Brown%20Rd%2C%20Rye%2C%20NY%2010573%2C%20USA!5e0!3m2!1sen!2sbd!4v1580843692833!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Contact Form</h2>
                        <form action="#">
                            <div class="group-in">
                                <label for="name">Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="group-in">
                                <label for="email">Email</label>
                                <input type="text" name="email">
                            </div>
                            <div class="group-in">
                                <label for="message">Message</label>
                                <textarea name="message"></textarea>
                            </div>
                            <button type="submit">Submit Now</button>
                        </form>
                    <?php

if (isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $query3 = "INSERT into contact (name, email, message) VALUES ('$name', '$email','$message')";
        $result1 = mysqli_query($conn,$query3);
        
    }
?>
					
					
					</div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Contact Info</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            distribution of letters.</p>
                        <div class="ci-address">
                            <h5>Karlovasi Samos Office</h5>
                            <ul>
                                <li>Karlovasi,Samos,</li>
                                <li>1-234-567-89011</li>
                                <li>icsd.gr</li>
                            </ul>
                        </div>
                        <div class="ci-address">
                            <h5>Barcelona Office</h5>
                            <ul>
                                <li>Vasileiou 4 Barcelona, Spain</li>
                                <li>1-234-567-89011</li>
                                <li>icsd.gr </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="fs-logo">
                        <div class="logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-envelope"></i> kplats620@gmail.com</li>
                            <li><i class="fa fa-copy"></i> +(12) 345 6789 10</li>
                            <li><i class="fa fa-thumb-tack"></i> Karlovasi,Samos,Greece</li>
                        </ul>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1">
                    <div class="fs-widget">
                        <h4>Top Club</h4>
                        <ul class="fw-links">
                            <li><a href="#">Brazil</a></li>
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">Italy</a></li>
                            <li><a href="#">Argentina</a></li>
                            <li><a href="#">France</a></li>
                        </ul>
                        <ul class="fw-links">
                            <li><a href="#">England</a></li>
                            <li><a href="#">Netherlands</a></li>
                            <li><a href="#">Hungary</a></li>
                            <li><a href="#">Croatia</a></li>
                            <li><a href="#">Poland</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fs-widget">
                        <h4>Recent News</h4>

                        <div class="fw-item">
                            <h5><a href="#">England win shows they have the spark to go far at World Cup</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 25, 2020</li>
                                <li><i class="fa fa-edit"></i> 15 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-item">
                            <h5><a href="#">Barca vs Real Madrit: Cricket World Basketball Cup 2020 – live!</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 23, 2020</li>
                                <li><i class="fa fa-edit"></i> 104 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-option">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/konstantinos.platsatouras/" target="_blank">Kostas Platsatouras</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="co-widget">
                            <ul>
                                <li><a href="#">Copyright notification</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="fa fa-close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>