<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Become Vendor Page </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />
</head>

<body>

   @include('frontend.body.header')
    <!--End header-->

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span>  Become Vendor
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Become Vendor</h1>
         <p class="mb-30">Already have an Vendor account? <a href="{{ route('vendor.login') }}">Vendor Login</a></p>
                                        </div>


 <form method="POST" action="{{ route('vendor.register') }}">
            @csrf


    <div class="form-group">
        <input type="text" id="name" required="" name="name" placeholder="Shop Name" />
    </div>

      <div class="form-group">
        <input type="text" id="username" required="" name="username" placeholder="User Name" />
    </div>


    <div class="form-group">
        <input type="email"  id="email" required="" name="email" placeholder="Email" />
    </div>

    <div class="form-group">
        <input type="text" id="phone" required="" name="phone" placeholder="Phone" />
    </div>

    <div class="form-group">
        <input type="text" id="address" required="" name="address" placeholder="Address" />
    </div>


  


    <div class="form-group">
    <input required=""  id="password"  type="password" name="password" placeholder="Password" />
    <span id="password-error-message" class="text-danger"></span>
</div>
<div class="form-group">
    <input required="" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" />
    <span id="confirm-password-error-message" class="text-danger"></span>
</div>



<!-- Add this next to your checkbox in the form -->
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
    <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
</div>
<div id="checkbox-error-message" class="text-danger"></div>


    <div class="form-group mb-30">
        <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" id="submit-button" name="login">Submit &amp; Register</button>
    </div>
    <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
</form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                        <span>Continue with Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                        <span>Continue with Google</span>
                                    </a>
                                    <a href="#" class="social-login apple-login">
                                        <img src="assets/imgs/theme/icons/logo-apple.svg" alt="" />
                                        <span>Continue with Apple</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


     @include('frontend.body.footer')


   <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
   <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/assets/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/assets/js/shop.js?v=5.3') }}"></script>



    <!-- Add this script inside the <head> or at the end of the <body> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var passwordInput = document.getElementById('password');
        var confirmPasswordInput = document.getElementById('password_confirmation');
        var passwordErrorMessage = document.getElementById('password-error-message');
        var confirmPasswordErrorMessage = document.getElementById('confirm-password-error-message');

        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);

        function validatePassword() {
            if (passwordInput.value.length < 8) {
                passwordErrorMessage.textContent = 'Password must be at least 8 characters.';
            } else {
                passwordErrorMessage.textContent = '';
            }

            if (passwordInput.value !== confirmPasswordInput.value) {
                confirmPasswordErrorMessage.textContent = 'Passwords do not match.';
            } else {
                confirmPasswordErrorMessage.textContent = '';
            }
        }
    });
</script>

<!-- Add this inside the <head> or at the end of the <body> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var checkbox = document.getElementById('exampleCheckbox12');
        var checkboxErrorMessage = document.getElementById('checkbox-error-message');
        var submitButton = document.getElementById('submit-button'); // Add the correct ID for your submit button

        checkbox.addEventListener('change', validateCheckbox);
        submitButton.addEventListener('click', submitForm);

        function validateCheckbox() {
            if (!checkbox.checked) {
                checkboxErrorMessage.textContent = 'Please accept the terms and policy.';
            } else {
                checkboxErrorMessage.textContent = '';
            }
        }

        function submitForm(event) {
            if (!checkbox.checked) {
                event.preventDefault(); // Prevent the default form submission
                checkboxErrorMessage.textContent = 'Please accept the terms and policy.';
            }
        }
    });
</script>




</body>
</html>