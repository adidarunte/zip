<?php include 'header.php'; ?> 
    <main class="policy">

    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\BANNER 2.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Hotel Five Elements</small>
                  <h3 class="slide-animated two">Frequently Asked Questions</h3>
              </div>
          </div>
    </div>
        <!-- <div class="container margin_120_95">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-12">
                <p>
                    <h3>
                        Help & FAQ
                    </h3><br>
                    

                    


                     <b>We accept major cards Master and Visa...</b><br>
                    <strong>Credit cards Allowed</strong> 

                </p>
              </div>
            </div>
        </div> -->



        <div class="container margin_120_95">
    <!-- <h2 class="mb-4 text-center">Hotel Five Elements - FAQ</h2> -->

    <div class="card p-3 mb-4">
        <h4>About Hotel Five Elements</h4>
        <p>Welcome to Hotel Five Elements, a premium hotel offering luxurious accommodations, fine dining, and top-notch amenities. Enjoy your stay with our world-class hospitality.</p>
        <ul><p><strong>Address:</strong>
                            Hotel Five Elements -The Resort Stay<br>
                            Plot no 49 
                            Opp Hotel Sumant Palace,
                            Behind Baar Baar Dhaba,<br>
                            Next to Celebrity Wax Museum,
                            Old Mumbai Pune Highway,<br>
                            Varsoli, Lonavala-410401<br><br>
                            <strong>Call  : <a href="tel:8308308373">830 830 8373</a></strong><br>
                        <strong><span style="
    visibility: hidden;"> Call  :</span> <a href="tel:8149958373">814 995 8373</a></strong>
                        </ul>
    </div>

    <div class="accordion" id="faqAccordion">
        <?php
        $faqs = [
            ["question" => "What are the check-in and check-out timings?", "answer" => "Check-in time is 12:00 PM, and check-out time is 11:00 AM."],
            ["question" => "Do you offer free Wi-Fi?", "answer" => "Yes, high-speed Wi-Fi is available for all guests free of charge."],
            ["question" => "What amenities does the hotel provide?", "answer" => "We offer a Swimming pool, Parking, Restaurant, Children Play area, and In-Door Games."],
            ["question" => "Is parking available?", "answer" => "Yes, we provide free parking for our guests."],
            ["question" => "How can I book a room?", "answer" => "You can book through our website or contact us directly at +91 830 830 8373."],
        ];

        foreach ($faqs as $index => $faq) {
            $serial = $index + 1; // Add serial number
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                        <?= $serial . ". " . $faq["question"] ?> <!-- Serial number added -->
                    </button>
                </h2>
                <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <?= $faq["answer"] ?>
                    </div>
                </div>
            </div>
            <?php
        }
                ?>
            </div>
        </div>




    </main>


    <?php include 'footer.php'; ?>