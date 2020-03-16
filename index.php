<?php include 'inc/header.php' ?>
<div class="header-area header-sticky">
    <div class="main-header ">
        <div class="container">
            <div class="row align-items-center">
                <!-- logo -->
                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <!-- main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Service</a></li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="rooms.html">Rooms</a>
                                        <li><a href="elements.html">Element</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <!-- header-btn -->
                    <div class="header-btn">
                        <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
</header>
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active dot-style">
            <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9">
                            <div class="h1-slider-caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9">
                            <div class="h1-slider-caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9">
                            <div class="h1-slider-caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Booking Room Start-->
    <div class="booking-area">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <form action="">
                        <div class="booking-wrap d-flex justify-content-between align-items-center">

                            <!-- select in date -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span> Check In Date:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input id="datepicker1" placeholder="10/12/2020" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span>Check OutDate:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input id="datepicker2" placeholder="12/12/2020" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Adults:</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Children:</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select2">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Rooms:</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select3">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box pt-45 mb-30">
                                <a href="#" class="btn select-btn">Book Now</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br>
    <!-- Booking Room End-->

    <!-- Room Start -->
    <section class="room-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Our Rooms</h3>
                        </div>
                        <h3 class="archivment-back">Our Rooms</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="assets/img/rooms/room1.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="assets/img/rooms/room2.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"> <img src="assets/img/rooms/room3.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="assets/img/rooms/room4.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="assets/img/rooms/room5.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"> <img src="assets/img/rooms/room6.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="#" class="btn view-btn1">View more <i class="ti-angle-right"></i> </a>
                </div>
            </div>
        </div>

    </section>
    <!-- Room End -->

    <!-- Dining Start -->
    <div class="dining-area dining-padding-top">
        <!-- Single Left img -->
        <div class="single-dining-area left-img">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption">
                            <span>Our resturent</span>
                            <h3>Dining & Drinks</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single Right img -->
        <div class="single-dining-area right-img">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption text-right">
                            <span>Our Pool</span>
                            <h3>Swimming Pool</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dining End -->

    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="assets/img/logo/testimonial.png" alt="">
                                </div>
                                <h3 class="archivment-back">Testimonial</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier, <span>Regular Client</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial  pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="assets/img/logo/testimonial.png" alt="">
                                </div>
                                <h3 class="archivment-back">Testimonial</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                </p>
                                <div class="testimonial-ratting">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier, <span>Regular Client</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="blog-area blog-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Seciton Tittle  -->
                    <div class="font-back-tittle mb-50">
                        <div class="archivment-front">
                            <h3>Our Blog</h3>
                        </div>
                        <h3 class="archivment-back">Recent News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="assets/img/our_blog/blog-img1.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"> <img src="assets/img/our_blog/blog-img2.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="assets/img/our_blog/blog-img3.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Gallery img Start-->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-active owl-carousel">
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery img End-->
</main>
<?php include 'inc/footer.php' ?>