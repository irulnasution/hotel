<?php include 'inc/header.php' ?>

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
                    <form action="?act=input_pesanan" method="post">
                        <div class="booking-wrap d-flex justify-content-between align-items-center">
                            <!-- select in date -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span> Check In Date:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input id="datepicker1" placeholder="10/12/2020" name="tanggal_masuk" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span>Check OutDate:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input id="datepicker2" placeholder="12/12/2020" name="tanggal_keluar" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Jenis Kamar:</span>
                                </div>
                                <?php

                                $data_kamar = mysqli_query($conn, "select * from kamar");
                                ?>
                                <div class="select-this">
                                    <div class="select-itms">
                                        <select id="select3" name="jenis_kamar">
                                            <?php while ($data = mysqli_fetch_array($data_kamar)) { ?>
                                                <option value="<?= $data['id_kamar'] ?>"><?= $data['nama_kamar'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Rooms:</span>
                                </div>
                                <div class="select-this">
                                    <div class="select-itms">
                                        <select id="select3" name="jumlah_kamar">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box pt-45 mb-30">
                                <input type="submit" class="btn select-btn" value="Book Now">
                            </div>

                        </div>
                    </form>
                    <?php
                    if (isset($_GET['act']) and $_GET['act'] == 'input_pesanan') {

                        $jumlah_kamar = $_POST['jumlah_kamar'];

                        $tgl_msk = $_POST['tanggal_masuk'];
                        $tgl_masuk = explode("/", $tgl_msk);
                        // print_r($tgl_masuk);
                        $tanggal_masuk = $tgl_masuk[2] . '-' . $tgl_masuk[1] . '-' . $tgl_masuk[0];

                        $tgl_klr = $_POST['tanggal_keluar'];
                        $tgl_keluar = explode("/", $tgl_klr);
                        $tanggal_keluar = $tgl_keluar[2] . '-' . $tgl_keluar[1] . '-' . $tgl_keluar[0];

                        $input = mysqli_query($conn, "INSERT INTO pesanan (id_member, id_kamar, tanggal_masuk, tanggal_keluar,
                                    jumlah_kamar) VALUES ('$_SESSION[id_member]', $_POST[jenis_kamar], '$tanggal_masuk', '$tanggal_keluar', '$jumlah_kamar')") or die(mysqli_error($conn));

                        if ($input) {
                            echo "Data Berhasil Disimpan";
                        }
                    } 
                    ?>
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
                <?php
                $data_kamar = mysqli_query($conn, "SELECT * FROM kamar ORDER BY id_kamar");
                while ($data = mysqli_fetch_array($data_kamar)) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="admin/uploads/product/<?= $data['gambar'] ?>" alt=""></a>

                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html"><?= $data['nama_kamar'] . ' (' . $data['deskripsi'] . ')'; ?></a></h3>
                                <div class="per-night">
                                    <span><u>$</u><?= $data['harga'] ?> <span>/ par night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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