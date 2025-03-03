<?php include 'header.php'; ?> 
    <main class="policy">

    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\BANNER 2.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Hotel Five Elements</small>
                  <h3 class="slide-animated two">terms and conditions</h3>
              </div>
          </div>
    </div>



        <div class="container margin_120_95 refun">
        <?php
    $terms = [
        "Your Agreement" => [
            "By accessing, using, viewing, transmitting, caching, or storing this Site or any of its services, you agree to be bound by these Terms and Conditions.",
            "Please read this section carefully before proceeding. If you do not accept these Conditions, you must refrain from using the Site."
        ],
        "Site Content" => [
            "The Site provides information about Hotel Five Elements & Resort-owned or managed properties.",
            "The Site contains trademarks, logos, and other intellectual property owned by Hotel Five Elements & Resort.",
            "You may not use this intellectual property without our written permission."
        ],
        "Copyright" => [
            "The Site and its content are copyrighted by Hotel Five Elements & Resort or its third-party providers.",
            "You may download or print information for personal, non-commercial use only."
        ],
        "Restrictions on Use" => [
            "You may not use the Site for any commercial purpose.",
            "You may not interfere with the Site’s software or use automated tools to access the Site."
        ],
        "Limitation of Liability" => [
            "Hotel Five Elements & Resort is not liable for any loss or damage arising from your use of the Site.",
            "Your sole remedy for dissatisfaction with the Site is to discontinue use."
        ],
        "Hotel Reservations" => [
            "The reservation feature is for making legitimate reservations only.",
            "You must be at least 18 years old and financially responsible for all bookings made under your account."
        ],
        "Termination of Access" => [
            "Hotel Five Elements & Resort may terminate your access to the Site for any reason at any time."
        ],
        "General" => [
            "These Conditions are governed by the laws of India.",
            "Hotel Five Elements & Resort is not liable for any failure to comply with these Conditions due to circumstances beyond its control."
        ]
    ];
    ?>

    <div class="accordion" id="termsAccordion">
        <?php
        $index = 0;
        foreach ($terms as $category => $points) {
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                        <?= $category ?>
                    </button>
                </h2>
                <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#termsAccordion">
                    <div class="accordion-body">
                        <ul>
                            <?php foreach ($points as $point) { ?>
                                <li><?= $point ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            $index++;
        }
        ?>
    </div>

    <div class="text-center mt-4">
        <p><strong>📞 Contact Us:</strong> +91 830 830 8373</p>
    </div>
</div>





    </main>


    <?php include 'footer.php'; ?>