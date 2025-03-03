<?php include 'header.php'; ?> 
    <main class="policy">

    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="img\OUTDOOR EXCLUSIVE NIGHT VIEW\BANNER 2.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Hotel Five Elements</small>
                  <h3 class="slide-animated two">Rules & Regulations</h3>
              </div>
          </div>
    </div>
        <!-- <div class="container margin_120_95">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-12">
                <p>
                    <h3>
                        Rules & Regulations
                    </h3><br>
                    

    
                </p>
              </div>
            </div>
        </div> -->


        <div class="container margin_120_95 refun">

    <?php
    $rules = [
        "Check-in & Check-out" => [
            "Check-in time: 12:00 PM",
            "Check-out time: 11:00 AM",
            "Early check-in and late check-out are subject to availability and additional charges.",
            "Valid government-issued ID is required at check-in."
        ],
        "Payment Method" => [
            "We Accept all major cards, Master Card, Visa.",
            "Credit cards allowed."
        ],
        "Reservations & Payments" => [
            "Full or partial payment may be required at the time of booking.",
            "Cancellation policies vary; please check at the time of booking.",
            "Guests must use a valid credit/debit card or cash for payments."
        ],
        "Guest Conduct" => [
            "Respect fellow guests and hotel staff.",
            "Loud music, parties, and disturbances are not allowed after 10:00 PM.",
            "Any damage to hotel property will be charged to the guest."
        ],
        "Visitors & Additional Guests" => [
            "Visitors are allowed only in common areas.",
            "Overnight visitors are not permitted without prior approval."
        ],
        "Smoking & Alcohol Policy" => [
            "Smoking is not allowed in non-smoking rooms and public areas.",
            "Alcohol consumption is allowed only in designated areas."
        ],
        "Pets Policy" => [
            "Pets are allowed."
        ],
        "Safety & Security" => [
            "The hotel is not responsible for lost or stolen valuables; use in-room safes.",
            "Firearms and hazardous materials are strictly prohibited."
        ],
        "Parking" => [
            "Free parking is available for guests, subject to availability.",
            "The hotel is not responsible for any damage or theft of vehicles."
        ],
        "Housekeeping & Maintenance" => [
            "Rooms are cleaned daily between 9:00 AM – 2:00 PM.",
            "Guests should inform reception for any maintenance issues."
        ],
        "Cancellation & Refund Policy" => [
            "Cancellations made 24 hours before check-in are eligible for a refund (subject to terms).",
            "No-shows will be charged the full booking amount."
        ],
        "Hotel Rights" => [
            "The hotel reserves the right to refuse service to any guest violating these policies.",
            "Guests who cause disturbances or damage hotel property may be asked to leave without a refund."
        ]
    ];
    ?>

    <div class="accordion" id="rulesAccordion">
        <?php
        $index = 0;
        foreach ($rules as $category => $points) {
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                        <?= $category ?>
                    </button>
                </h2>
                <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#rulesAccordion">
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
        <p><strong>📞Contact Us:</strong> +91 830 830 8373</p>
    </div>
</div>




    </main>


    <?php include 'footer.php'; ?>