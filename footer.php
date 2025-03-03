

<footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(img/gallery/DSC_2433.jpg)"></div>
        </div>
        <div class="container">
            <div class="row foot">
                <div class="col-lg-4 col-md-12">
                    <h5>Contacts</h5>
                    <ul>
                        <li>Hotel Five Elements -The Resort Stay<br>
                            Plot no 49 
                            Opp Hotel Sumant Palace,
                            Behind Baar Baar Dhaba,
                            Next to Celebrity Wax Museum,
                            Old Mumbai Pune Highway,
                            Varsoli, Lonavala-410401<br><br></li>

                        <li><strong> Call: <a href="tel:8308308373">830 830 8373</a></strong></li>
                        <li><strong><span style="visibility: hidden;"> Call: </span><a href="tel:8149958373">814 995 8373</a></strong><br><br></li>
                        <li><strong> Email:<a href="mailto:fiveelementshotel@gmail.com">fiveelementshotel@gmail.com</a></strong></li>
                        <li><strong><span style="visibility: hidden;"> Email:</span><a href="mailto:bookings.fiveelements@gmail.com">bookings.fiveelements@gmail.com</a></strong></li>
                        
                    </ul>
                    
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Quick Links</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li class="suboptions"><a href="explore">Places to visit in Lonavala</a></li>
                            <li><a href="about-us">About Us</a></li>
                            <!-- <li><a href="room-list-1.html">Rooms</a></li> -->
                            <!-- <li><a href="news-1.html">News &amp; Events</a></li> -->
                            <li><a href="contact-us">Contact Us</a></li>
                        </ul>
                        <div class="social">
                        <ul>
                            <li><a href="https://www.instagram.com/fiveelementshotel/profilecard/?igsh=NmZ0M2MxcWVzanVs"><i class="bi bi-instagram"></i></a></li>
                            <!-- <li><a href="https://wa.me/8308308373"><i class="bi bi-whatsapp"></i></a></li> -->
                            <li><a href="https://www.facebook.com/share/1AE7jmeJFk/?mibextid=qi2Omg"><i class="bi bi-facebook"></i></a></li>
                            <!-- <li><a href="#0"><i class="bi bi-twitter-x"></i></a></li> -->
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Support</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="help-faq">Help & FAQ​</a></li>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="rules-regulations">Rules & Regulations</a></li>
                            <li><a href="terms-conditions">Terms and Conditions</a></li>
                            <li><a href="refund-cancellation">Refund and Cancellation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                <div class="left">
                    <a href="https://websartech.com/">© 2025 Hotel Five Elements -The Resort Stay. All Rights Reserved</a>
                </div>

                <!-- <div class="middle">
                    <a href="#">Rights of Admission Reserved.</a>
                </div> -->
                <div class="right">
                    <a href="https://websartech.com/">Designed and Developed by Websar IT Solutions</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- /back to top -->
<!-- Bootstrap JS and CSS (Ensure you have them included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Enquiry Now Button -->
<!-- Modal -->
<!-- <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true"> -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Booking Form -->
        <form id="bookingForm" action="backend/process_booking.php" method="POST">
          <div class="booking_wrapper">
            <!-- Guest Details Section -->
            <div class="row">
              <div class="col-lg-6 marg">
                <label for="guest_name">Full Name*</label>
                <input type="text" id="guest_name" name="guest_name" class="form-control" placeholder="Enter your full name">
              </div>
              <div class="col-lg-6">
                <label for="guest_email">Email*</label>
                <input type="email" id="guest_email" name="guest_email" class="form-control" placeholder="Enter your email">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-6 marg">
                <label for="guest_mobile">Mobile Number*</label>
                <input type="tel" id="guest_mobile" name="guest_mobile" minlength="10" maxlength="10" class="form-control" placeholder="Enter your mobile number">
              </div>
              <div class="col-lg-6">
                <label for="room_type">Select Room*</label>
                <div class="custom_select">
                  <select id="room_type" name="room_type" class="wide form-control">
                    <option value="" disabled selected>Select Room</option>
                    <option>Lilly Standard</option>
                    <option>Orchid Deluxe</option>
                    <option>Tulip Suite</option>
                    <option>Sunflower Suite</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Date Selection Section -->
            <div class="row mt-3">
              <div class="col-lg-6 marg">
                <label for="checkin_date">Check-in Date*</label>
                <input type="text" id="checkin_date" name="checkin_date" class="form-control" placeholder="Select check-in date">
              </div>
              <div class="col-lg-6">
                <label for="checkout_date">Check-out Date*</label>
                <input type="text" id="checkout_date" name="checkout_date" class="form-control" placeholder="Select check-out date">
              </div>
            </div>

            <!-- Room Selection & Guest Count -->
            <div class="row mt-3">
              <div class="col-6 marg">
                <label for="adults_booking">Adults*</label>
                <div class="qty-buttons mb-3 version_2">
                  <input type="button" value="+" class="qtyplus" name="adults_booking">
                  <input type="number" name="adults_booking" id="adults_booking" class="form-control" min="0" value="1">
                  <input type="button" value="-" class="qtyminus" name="adults_booking">
                </div>
              </div>
              <div class="col-6">
                <label for="childs_booking">Children*</label>
                <div class="qty-buttons mb-3 version_2">
                  <input type="button" value="+" class="qtyplus" name="childs_booking">
                  <input type="number" name="childs_booking" id="childs_booking" class="form-control" min="0" value="0">
                  <input type="button" value="-" class="qtyminus" name="childs_booking">
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-lg-12 text-end" style="margin-bottom: 20px;">
                <button type="submit" class="btn_1 outline">Enquiry Now</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const bookingForm = document.getElementById("bookingForm");

    bookingForm.addEventListener("submit", function (event) {
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
        const guestName = document.getElementById("guest_name");
        const guestEmail = document.getElementById("guest_email");
        const guestMobile = document.getElementById("guest_mobile");
        const roomType = document.getElementById("room_type");
        const checkinDate = document.getElementById("checkin_date");
        const checkoutDate = document.getElementById("checkout_date");
        const adultsBooking = document.getElementById("adults_booking");

        // Name Validation
        if (guestName.value.trim().length < 3) {
            showError(guestName, "Full Name must be at least 3 characters long.");
        }

        // Email Validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(guestEmail.value.trim())) {
            showError(guestEmail, "Enter a valid email address.");
        }

        // Mobile Number Validation (10 digits)
        const mobilePattern = /^[0-9]{10}$/;
        if (!mobilePattern.test(guestMobile.value.trim())) {
            showError(guestMobile, "Enter a valid 10-digit mobile number.");
        }

        // Room Type Validation
        if (roomType.value.trim() === "") {
            showError(roomType, "Please select a room type.");
        }

        // Check-in and Check-out Date Validation
        if (!checkinDate.value.trim() || !checkoutDate.value.trim()) {
            showError(checkinDate, "Check-in and check-out dates are required.");
            showError(checkoutDate, "Check-in and check-out dates are required.");
        } else {
            const checkin = new Date(checkinDate.value);
            const checkout = new Date(checkoutDate.value);
            if (isNaN(checkin.getTime()) || isNaN(checkout.getTime())) {
                showError(checkinDate, "Invalid date format.");
                showError(checkoutDate, "Invalid date format.");
            } else if (checkin >= checkout) {
                showError(checkoutDate, "Check-out date must be after check-in date.");
            }
        }

        // Adults Validation (Must be at least 1)
        if (parseInt(adultsBooking.value) < 1) {
            showError(adultsBooking, "At least one adult must be selected.");
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    // Restrict Name Input to Alphabets and Spaces Only
    document.getElementById("guest_name").addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z ]/g, "");
    });

    // Restrict Mobile Number to Numbers Only
    document.getElementById("guest_mobile").addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");
    });
});
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/datepicker_search.js"></script>
<script src="js/datepicker_inline.js"></script>
<script src="phpmailer/validate.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname.split("/").pop() || "index.php"; // Default to "index.php" if no page is found
    let navLinks = document.querySelectorAll("#mainNav ul li a");

    let isActiveSet = false;

    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
            isActiveSet = true;
        }
    });

    // If no link matches, set "Home" as active
    if (!isActiveSet) {
        let homeLink = document.querySelector("#mainNav ul li a[href='index.php']");
        if (homeLink) {
            homeLink.classList.add("active");
        }
    }
});

</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#date_booking", {
            dateFormat: "Y-m-d", // Adjust format as needed
            minDate: "today", // Prevent past dates selection
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Check-in Date Picker
        flatpickr("#checkin_date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            allowInput: true,
            defaultDate: null,
            placeholder: "Select check-in date",
            onChange: function(selectedDates, dateStr) {
                let minCheckoutDate = new Date(selectedDates[0]);
                minCheckoutDate.setDate(minCheckoutDate.getDate() + 1); // Ensure checkout is after check-in

                // Initialize Check-out Date Picker
                flatpickr("#checkout_date", {
                    dateFormat: "Y-m-d",
                    minDate: minCheckoutDate,
                    allowInput: true,
                    defaultDate: null,
                    placeholder: "Select check-out date"
                });
            }
        });

        // Initialize Check-out Date Picker with Default Min Date
        flatpickr("#checkout_date", {
            dateFormat: "Y-m-d",
            minDate: "tomorrow",
            allowInput: true,
            defaultDate: null,
            placeholder: "Select check-out date"
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#bookingForm").submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        $.ajax({
            type: "POST",
            url: "backend/process_booking.php",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function () {
                $(".btn_1").text("Submitting...").prop("disabled", true);
            },
            success: function (response) {
                if (response.status === "success") {
                    // Show Thank You message inside modal
                    $(".modal-body").html(
                        `<div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/5290/5290058.png" width="80" />
                            <h3 class="mt-3">Thank You!</h3>
                            <p>${response.message}</p>
                        </div>`
                    );

                    // Close modal after 3 seconds and refresh page
                    setTimeout(function () {
                        $("#bookingModal").modal("hide");
                    }, 3000);

                    // Refresh the page after modal closes
                    $("#bookingModal").on("hidden.bs.modal", function () {
                        location.reload();
                    });
                } else {
                    $(".modal-body").prepend(
                        `<div class="alert alert-danger">${response.message}</div>`
                    );
                }
            },
            error: function () {
                $(".modal-body").prepend(
                    `<div class="alert alert-danger">Something went wrong. Please try again.</div>`
                );
            },
            complete: function () {
                $(".btn_1").text("Enquiry Now").prop("disabled", false);
            }
        });
    });
});
</script>



<script>
  var myModal = new bootstrap.Modal(document.getElementById('bookingModal'), {
    backdrop: 'static',
    keyboard: false
  });
</script>


</body>

</html>
