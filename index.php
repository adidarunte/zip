



    <?php include 'header.php'; ?>




    
    <main class="page-home">




    <!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<!-- Hero Section -->
<div class="hero home-search full-height">
    <!-- Swiper Container -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\BANNER 1.jpg" alt="Image 1"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\BANNER 2.jpg" alt="Image 2"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2406.jpg" alt="Image 3"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2407.jpg" alt="Image 4"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2409.jpg" alt="Image 5"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2411.jpg" alt="Image 6"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2416.jpg" alt="Image 7"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2417.jpg" alt="Image 8"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2423.jpg" alt="Image 9"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2428.jpg" alt="Image 10"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2433.jpg" alt="Image 11"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2436.jpg" alt="Image 12"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2438.jpg" alt="Image 13"></div>
            <div class="swiper-slide"><img src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\DSC_2442.jpg" alt="Image 14"></div>
        </div>
        <!-- Pagination and Navigation -->
        <div class="swiper-pagination"></div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>

    <!-- Content Overlay -->
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Hotel Five Elements</small>
            <h3 class="slide-animated two">A unique Experience<br>where to stay</h3>
            <div class="row justify-content-center slide-animated three">
                <div class="col-xl-10">
                    <button class="btn_1" data-bs-toggle="modal" data-bs-target="#bookingModal">Enquiry Now</button>
                </div>
            </div>
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_scrollto">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- /mouse_wp -->
    </div>
</div>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        speed: 2000, // Smoother transition speed (1s)
        effect: 'fade', // Smooth fade transition instead of slide
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<!-- Add some styles -->
<style>
    .hero {
        position: relative;
        overflow: hidden;
    }
    .swiper-container {
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }
    .swiper-slide img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }
    .opacity-mask {
        position: relative;
        z-index: 2;
    }
</style>

        <!-- <div class="hero home-search full-height jarallax" data-jarallax-video="mp4:./video/sunset.mp4,webm:./video/sunset.webm,ogv:./video/sunset.ogv" data-speed="0.2">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Hotel Five Elements</small>
                    <h3 class="slide-animated two">A unique Experience<br>where to stay</h3>
                    <div class="row justify-content-center slide-animated three">
                        <div class="col-xl-10">
                                <div class="row g-0 booking_form">
                                <div class="col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="dates" id="dates" placeholder="Check in / Check out" readonly="readonly">
                                        <i class="bi bi-calendar2"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 pe-lg-0 pe-sm-1">
                                    <div class="qty-buttons">
                                        <label>Adults</label>
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 ps-lg-0 ps-sm-1">
                                    <div class="qty-buttons">
                                        <label>Childs</label>
                                        <input type="button" value="+" class="qtyplus" name="childs">
                                        <input type="text" name="childs" id="childs" value="" class="qty form-control">
                                        <input type="button" value="-" class="qtyminus" name="childs">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div> 
                            <button class="btn_1" data-bs-toggle="modal" data-bs-target="#bookingModal">Enquiry Now</button>

                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                
            </div>
        </div> 
        /jarallax video background -->

        <div class="pattern_2">
            <div class="container margin_120_95" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5 hide-on-mobile">
                        <div class="parallax_wrapper">
                            <img src="img\gallery\BANNER 2.jpg" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="img\gallery\BANNER 1.jpg" alt="" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2>The experience of unique holidays</h2>
                            </div>
                            <!-- <p class="lead">This hotel offers room service, a 24-hour front desk and free WiFi.</p> -->
                            <p>A vegetarian breakfast is available every morning at the accommodation.</p>
                            <p>At the hotel, all rooms are fitted with a wardrobe. Complete with a private bathroom fitted with a shower and free toiletries, all guest rooms at Treebo Five Elements, Lonavala have a flat-screen TV and air conditioning, and some rooms also offer a balcony. All rooms feature bed linen.</p>
                            <!-- <p><em>Couple Freaky Environment</em></p>
                            <p><em>Pet Allowed</em></p> -->
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <div class="pinned-image pinned-image--medium">
                <div class="pinned-image__container" id="section_video">
                    <video loop="loop" muted="muted" id="video_home">
                        <source src="video/swimming_pool_2.mp4" type="video/mp4">
                        <source src="video/swimming_pool_2.webm" type="video/webm">
                        <source src="video/swimming_pool_2.ogv" type="video/ogg">
                    </video>
                    <div class="pinned-image__container-overlay"></div>
                </div>
                <div class="pinned_over_content">
                    <div class="title white">
                        <small data-cue="slideInUp" data-delay="200">Hotel Five Elements</small>
                        <h2 data-cue="slideInUp" data-delay="300">Enjoy in a very<br> Immersive Relax</h2>
                    </div>
                </div>
            </div>
            <!-- /pinned content -->
        </div>
        <!-- /Pattern  -->   

        <div class="container margin_120_95">
            <div class="title mb-3">
                <small data-cue="slideInUp">Luxury experience</small>
                <h2 data-cue="slideInUp" data-delay="200">Rooms</h2>
            </div>
            <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 rooms">
                    <a href="lilly-standard.php" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(img/gallery/DSC_2184.jpg)"></div>
                            <div class="info">
                                <h3>Lilly Standard</h3>
                                <span>Read more</span>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 rooms">
                    <a href="orchid-deluxe.php" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(img/gallery/DSC_2181.jpg)"></div>
                            <div class="info">
                                <h3>Orchid Deluxe</h3>
                                <span>Read more</span>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 rooms">
                    <a href="tulip-suite.php" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(img/gallery/DSC_2151.jpg)"></div>
                            <div class="info">
                                <h3>Tulip Suite</h3>
                                <span>Read more</span>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 rooms">
                    <a href="sunflower-suite.php" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(img/gallery/DSC_2178.jpg)"></div>
                            <div class="info">
                                <h3>Sunflower Suite</h3>
                                <span>Read more</span>
                            </div>
                        </figure>
                    </a>
                </div>
                <p class="text-end"><a href="lilly-standard" class="btn_1 outline mt-2">View all Rooms</a></p>
            </div>
            <!-- /row-->

            <div class="title text-center mb-5">
                <!-- <small data-cue="slideInUp">Hotel Five Elements</small> -->
                <h2 data-cue="slideInUp" data-delay="100">Main Amenities</h2>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-md-6 ">
                    <div class="box_facilities no-border" data-cue="slideInUp">
                        <i class="customicon-private-parking"></i>
                        <h3>Parking</h3>
                        <!-- <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-swimming-pool"></i>
                        <h3>Swimming Pool</h3>
                        <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-cocktail"></i>
                        <h3>Restaurant</h3>
                        <!-- <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-wifi"></i>
                        <h3>High Speed Wifi</h3>
                        <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities no-border" data-cue="slideInUp">
                        <img  src="img\sedan.png" class="icon">
                        <h3>Pickup & Drop</h3>
                        <!-- <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <img  src="img\service.png" class="icon">
                        <h3>Room Service</h3>
                        <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-breakfast"></i>
                        <h3>Breakfast</h3>
                        <!-- <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p> -->
                    </div>
                </div>
               
            </div>
            <!-- /Row -->
        </div>
        <!-- /container-->

        <!-- <div class="marquee">
            <div class="track">
                <div class="content">&nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience</div>
            </div>
        </div> -->
        <!-- /marquee-->

        <!-- /bg_white -->

        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="img/gallery/DSC_2428.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="title white">
                                <small class="mb-1">Testimonials</small>
                                <h2>What Customer Says</h2>
                            </div>
                            <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/dummy-pic.png" alt="" class="img-circle">
                                            </figure>
                                            <h4>Akshada<small>12 Oct</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Great expeiance with affordable price. Very Good property , well maintained rooms. Very Good staff."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/dummy-pic.png" alt="" class="img-circle">
                                            </figure>
                                            <h4>Mahima<small>2 Nov</small></h4>
                                        </div>
                                        <div class="comment">
                                            "The staff was great, very friendly, polite, professional, and willing to help. The room I got for my second and third night was nice. The bed was comfortable, the hot water came on immediately, nice natural light, the wifi and AC worked well. The breakfast was fresh and tasty every morning. The nearby vegetarian restaurant Saptagiri was great."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/dummy-pic.png" alt="" class="img-circle">
                                            </figure>
                                            <h4>Harold<small>3 Dec</small></h4>
                                        </div>
                                        <div class="comment">
                                            "It was a great stay, The food was good and most of our requirements were met on time. The property is at a favorable location with regards to place we wanted to visit. The follow up from reception regarding our arrival and guiding us to destiny.."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/dummy-pic.png" alt="" class="img-circle">
                                            </figure>
                                            <h4>Sajit<small>11 Dec</small></h4>
                                        </div>
                                        <div class="comment">
                                            "The hotel is affordable. The staff is friendly. Hot water is always available. The food in the in-house restaurant is very good. The pool is kept clean. The front area is good for a walk in the evening if you like. There are other food outlets nearby. Wax museum is very close- you could walk to it."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/dummy-pic.png" alt="" class="img-circle">
                                            </figure>
                                            <h4>Kamal<small>23 Dec</small></h4>
                                        </div>
                                        <div class="comment">
                                            "The room interiors were warm and cozy, with all necessary toiletries provided, ensuring a comfortable stay. The entire hotel, including the exterior, passages, and interiors, was clean. My family particularly enjoyed the swimming pool, which added a fun element to our stay. The hotel's restaurant offered delicious food at very reasonable prices, which was a pleasant surprise."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /parallax_section_1-->


       
        <!--/bg_white -->

        <?php include 'booking.php'; ?>
        <!-- /container -->

    </main>


    <?php include 'footer.php'; ?>