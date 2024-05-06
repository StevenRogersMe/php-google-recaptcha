<!DOCTYPE html>
<html lang="en">

<head>
    <title>Google reCapctha Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script async src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script> -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LcVpdEpAAAAAH2K_vmWrK_el8RhKQX9sgEeKfhG"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="app d-flex justify-content-center">


        <div class="container captcha-form">

            <form action="" method="post">
                <h4 class="title">Start the Neurospa 30 Night/day trial at $14.95 $49.95.</h4>
                <div id="alert_message"></div>
                <div class="row g-2">
                    <div class="col-md form-floating mb-2">
                        <input type="text" id="firstName" class="form-control" placeholder="First name" name="fname"
                            required>
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="col-md form-floating mb-2">
                        <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lname"
                            required>
                        <label for="lastName">Last Name</label>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="email" class="form-control" placeholder="Email Adress" name="email" required>
                    <label for="email">Email Address</label>
                </div>

                <!-- billing address -->
                <h4 class="title">Billing Address</h4>
                <div class="row g-2">
                    <div class="col-md mb-2">
                        <select class="selectpicker countrypicker form-select px-2 py-3" data-flag="true"></select>

                    </div>
                    <div class="col-md form-floating mb-2">
                        <input type="text" id="department" class="form-control" placeholder="Department">
                        <label for="department">Department</label>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="address" class="form-control" placeholder="Adress">
                    <label for="address">Address</label>
                </div>
                <div class="row g-2">
                    <div class="col-md form-floating mb-2">
                        <input type="text" id="city" class="form-control" placeholder="City">
                        <label for="city">City</label>
                    </div>
                    <div class="col-md form-floating mb-2">
                        <input type="text" id="postalCode" class="form-control" placeholder="Postal Code">
                        <label for="postalCode">Postal Code</label>
                    </div>
                </div>
                <!-- End billing address -->

                <!-- payment info -->
                <h4 class="title">Payment information</h4>
                <div class="payment-form">
                    <div class="payment-form-inner">
                        <div class="d-flex py-1">
                            <span class="d-flex align-items-center"><svg class="icon-card" role="presentation"
                                    fill="var(--colorIcon)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 4a2 2 0 012-2h12a2 2 0 012 2H0zm0 2v6a2 2 0 002 2h12a2 2 0 002-2V6H0zm3 5a1 1 0 011-1h1a1 1 0 110 2H4a1 1 0 01-1-1z">
                                    </path>
                                </svg></span>
                            <p style="color: #0570de" class="ms-3 mb-0">Card</p>
                        </div>
                        <div class="row g-2 ">
                            <div class="col-md-6 mb-2">
                                <label for="cardNumber">Card Number</label>
                                <div class="input-group">
                                    <input type="text" id="cardNumber" class="form-control"
                                        placeholder="1234 1234 1234 1234">
                                    <span class=""><img class=""
                                            src="https://img.icons8.com/color/40/000000/mastercard-logo.png" /></span>
                                    <span class=""><img class=""
                                            src="https://img.icons8.com/color/40/000000/visa.png" /></span>

                                    <span class=""><img class=""
                                            src="https://img.icons8.com/color/40/000000/discover.png" /></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-2">
                                <label for="expiration">Expiration</label>
                                <input type="text" id="expiration" class="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col-md-3 col-sm-6 mb-2">
                                <label for="cvc">CVC</label>
                                <input type="text" id="cvc" class="form-control" placeholder="CVC">
                            </div>
                        </div>
                        <div>
                            <label for="country">Country</label>
                            <select class="selectpicker countrypicker form-select px-2 py-3" id="country"
                                data-flag="true"></select>
                        </div>
                        <p class="mt-3 note">By providing your card information, you allow NEUROBED to charge
                            your card
                            for
                            future
                            payments in accordance with their terms.</p>
                    </div>
                </div>

                <!-- End payment information -->

                <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                <div class="d-flex justify-content-end">
                    <input type="submit" name="submit" value="Submit" class="submit-btn">
                </div>
            </form>
        </div>


    </div>
    <script src="bootstrap-select-country.min.js"></script>
    <script>
        $('form').submit(function (event) {
            event.preventDefault(); //Prevent the default form submission
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcVpdEpAAAAAH2K_vmWrK_el8RhKQX9sgEeKfhG', { action: 'submit' }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                    // Making the simple AJAX call to capture the data and submit     
                    $.ajax({
                        url: 'submit_enquiry.php',
                        type: 'post',
                        data: $('form').serialize(),
                        dataType: 'json',
                        success: function (response) {
                            var error = response.error;
                            var success = response.success;
                            if (error != "") {
                                $('#alert_message').html(error);
                            }
                            else {
                                $('#alert_message').html(success);
                            }
                        },
                        error: function (jqXhr, json, errorThrown) {
                            var error = jqXhr.responseText;
                            $('#alert_message').html(error);
                        }
                    });

                });
            });
        });
    </script>

</body>

</html>