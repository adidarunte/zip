<?php include 'header.php'; ?>

    <main class="page-contact-us">

        <!-- <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="img\gallery\DSC_2467.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Hotel Five Elements</small>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div> -->
        <div class="hero full-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns" src="img\gallery\DSC_2467.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                        <small class="slide-animated one">Hotel Five Elements</small>
                        <h1 class="slide-animated two">Contact Us</h1>
                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_explore">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- / mouse -->
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <!-- <i class="bi bi-geo-alt"></i> -->
                                <h4>Address</h4>
                                <div><strong>Hotel Five Elements -The Resort Stay</strong><br>
                                    Plot no 49 
                                    Opp Hotel Sumant Palace,
                                    Behind Baar Baar Dhaba,
                                    Next to Celebrity Wax Museum,
                                    Old Mumbai Pune Highway,
                                    Varsoli, Lonavala-410401</div>
                            </li>
                            <li>
                                <!-- <i class="bi bi-envelope-paper"></i> -->
                                <h4>Email address</h4>
                                <div>
                                <a href="mailto:fiveelementshotel@gmail.com">fiveelementshotel@gmail.com</a>
                                <a href="mailto:bookings.fiveelements@gmail.com">bookings.fiveelements@gmail.com</a>
                            </div>
                            </li>
                            <li>
                                <!-- <i class="bi bi-telephone"></i> -->
                                <h4>Telephone</h4>
                                <div>+ 91 830 830 8373 <br>+ 91 814 995 8373<br></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                   
                    <form method="post" action="backend/process_contact.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name">
                                    <label for="name_contact">Name*</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name">
                                    <label for="lastname_contact">Last name*</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email">
                                    <label for="email_contact">Email*</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" minlength="10" maxlength="10" name="phone_contact" placeholder="Telephone">
                                    <label for="phone_contact">Mobile*</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                            <label for="message_contact">Message*</label>
                        </div>
                         <div id="message-contact" style="
    text-align: center;
"></div>
                        <div class="row mt-3">
              <div class="col-lg-12 text-end" style="margin-bottom: 20px;">
                <button type="submit" class="btn_1 outline">Enquiry Now</button>
              </div>
            </div>
                    </form>
                    
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->

        <div class="map_contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.8996190415364!2d73.4334824752426!3d18.758020282382187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be8019c390c4fff%3A0x90978f693d8c5119!2sHotel%20Five%20Elements%20-%20Resort%20-%20Lonavala!5e0!3m2!1sen!2sus!4v1738579173033!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!-- /container -->
        </div>

        
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contactform");

    contactForm.addEventListener("submit", function (event) {
        let isValid = true;

        // Clear previous error messages
        document.querySelectorAll(".error-message").forEach(error => error.remove());

        // Function to show error message
        function showError(inputField, message) {
            isValid = false;
            if (!inputField.parentNode.querySelector(".error-message")) { // Prevent duplicate messages
                const errorDiv = document.createElement("div");
                errorDiv.className = "error-message";
                errorDiv.style.color = "red";
                errorDiv.style.fontSize = "14px";
                errorDiv.style.marginTop = "5px";
                errorDiv.innerText = message;
                inputField.parentNode.appendChild(errorDiv);
            }
        }

        // Get field values
        const nameContact = document.getElementById("name_contact");
        const lastNameContact = document.getElementById("lastname_contact");
        const emailContact = document.getElementById("email_contact");
        const phoneContact = document.getElementById("phone_contact");
        const messageContact = document.getElementById("message_contact");

        // Name Validation
        if (nameContact.value.trim().length < 3) {
            showError(nameContact, "Name must be at least 3 characters long.");
        }

        // Last Name Validation
        if (lastNameContact.value.trim().length < 3) {
            showError(lastNameContact, "Last name must be at least 3 characters long.");
        }

        // Email Validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailContact.value.trim())) {
            showError(emailContact, "Enter a valid email address.");
        }

        // Phone Number Validation (10 digits)
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phoneContact.value.trim())) {
            showError(phoneContact, "Enter a valid 10-digit phone number.");
        }

        // Message Validation
        if (messageContact.value.trim() === "") {
            showError(messageContact, "Message cannot be empty.");
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    // Restrict Name & Last Name to Alphabets Only
    document.getElementById("name_contact").addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z ]/g, "");
    });
    document.getElementById("lastname_contact").addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z ]/g, "");
    });

    // Restrict Phone Number to Numbers Only
    document.getElementById("phone_contact").addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");
    });
});
</script>

</main>


    <?php include 'footer.php'; ?>