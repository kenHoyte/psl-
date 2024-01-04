@extends('frontend.main')
@section('welcome');
<head>
    <!--Form Wizard-->
    <link rel="stylesheet" href="plugins/jquery-steps/jquery.steps.css">

    <!-- App css -->
    <link href="assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets1/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets1/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets1/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets1/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Apply Now</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                <li>Pages</li>
                <li>User</li>
                <li>Fixed Deposit</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Sign Up Area -->
<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

        
                        <form action="" method="" id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="investor_account_number" class="col-lg-3 col-form-label">Investor Account Number</label>
                                            <div class="col-lg-9">
                                                <input id="investor_account_number" name="investor_account_number" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="date" class="col-sm-2 col-form-label text-right">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2024-01-01" id="date" name="date">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="account_type" class="col-lg-3 col-form-label">Account Type</label>
                                            <div class="col-lg-9">
                                                <select id="account_type" name="account_type" class="form-control">
                                                    <option value="">--Please Select--</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Joint">Joint</option>
                                                    <option value="ITF">ITF</option>
                                                    <option value="corporate">Corporate</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                            </fieldset><!--end fieldset-->
        
                            <h3>Customer Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-lg-3 col-form-label">Name Of Customer</label>
                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="id_type" class="col-lg-3 col-form-label">ID Type</label>
                                            <div class="col-lg-9">
                                                <select id="id_type" name="id_type" class="form-control">
                                                    <option value="">--Please Select--</option>
                                                    <option value="Ghana Card">National ID / Ghana Card</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="id_number" class="col-lg-3 col-form-label">ID No.</label>
                                            <div class="col-lg-9">
                                                <input id="id_number" name="id_number" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="issue_date" class="col-sm-2 col-form-label text-right">Issue Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2024-01-01" id="issue_date" name="date">
                                        </div>
                                    </div>
                                    </div><!--end col-->
                                </div><!--end row-->
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityShipping" class="col-lg-3 col-form-label">Company UIN</label>
                                            <div class="col-lg-9">
                                                <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Declaration</label>
                                            <div class="col-lg-9">
                                                <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </fieldset><!--end fieldset-->
        
                            <h3>Bank Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Name on Card</label>
                                            <div class="col-lg-9">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card Type</label>
                                            <div class="col-lg-9">
                                                <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                                    <option value="">--Please Select--</option>
                                                    <option value="AE">American Express</option>
                                                    <option value="VI">Visa</option>
                                                    <option value="MC">MasterCard</option>
                                                    <option value="DI">Discover</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Credit Card Number</label>
                                            <div class="col-lg-9">
                                                <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Card Verification Number</label>
                                            <div class="col-lg-9">
                                                <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Expiration Date</label>
                                            <div class="col-lg-9">
                                                <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </fieldset><!--end fieldset-->
        
                            <h3>Confirm Detail</h3>
                            <fieldset>
                                <div class="p-3">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">I agree with the Terms and Conditions.</span>
                                    </label>
                                </div>
                            </fieldset><!--end fieldset-->
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Apply Now!</h3>
                        <p class="form-desc">With your social network.</p>
                    </div>
                    <form method="post">
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        I agree with Prudential Securities Limited's
                                        <a href="sign-up.html#">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="agree-label">
                                    <input type="checkbox" id="chb2">
                                    <label for="chb2">
                                        I agree with Prudential Securities Limited's
                                        <a href="sign-up.html#">Terms of Services</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Register Account
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Already have an account?
                                    <a href="log-in.html"> Login</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sign Up Area -->
 <!-- jQuery  -->
 <script src="assets1/js/jquery.min.js"></script>
 <script src="assets1/js/jquery-ui.min.js"></script>
 <script src="assets1/js/bootstrap.bundle.min.js"></script>
 <script src="assets1/js/metismenu.min.js"></script>
 <script src="assets1/js/waves.js"></script>
 <script src="assets1/js/feather.min.js"></script>
 <script src="assets1/js/jquery.slimscroll.min.js"></script>
 <script src="plugins/apexcharts/apexcharts.min.js"></script> 

 <script src="plugins/jquery-steps/jquery.steps.min.js"></script>
 <script src="assets1/pages/jquery.form-wizard.init.js"></script>
 
 <!-- App js -->
 <script src="assets1/js/app.js"></script>
@endsection