﻿<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/head.php'); ?>

</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

       
       <!-- ========================  main header ======================== -->
        
       <?php include('include/main-header.php'); ?>

        <!-- ========================  Checkout ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">Confirm your reservation</h2>
                    <p>Guest information</p>
                </div>
            </div>

            <!-- ===  Step wrapper === -->

            <div class="step-wrapper">
                <div class="container">
                    <div class="stepper">
                        <ul class="row">
                            <li class="col-md-4 active">
                                <a href="reservation-1.php"><span data-text="Pricing"></span></a>
                            </li>
                            <li class="col-md-4 active">
                                <a href="reservation-2.php"><span data-text="Reservation"></span></a>
                            </li>
                            <li class="col-md-4">
                                <a href="reservation-3.php"><span data-text="Checkout"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ===  Checkout === -->

            <div class="checkout">

                <div class="container">

                    <div class="clearfix">

                        <!-- ========================  Register Now Form with Payment cart ======================== -->

                        <div class="cart-wrapper">

                            <div class="note-block">

                                <div class="row">

                                    <!-- === left content === -->

                                    <div class="col-md-12">

                                        <!-- === login-wrapper === -->

                                        <div class="login-wrapper">

                                            <div class="white-block">

                                                <!--signin-->

                                                <div class="login-block login-block-signin">

                                                    <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                                    <hr />

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="User ID">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="password" value="" class="form-control" placeholder="Password">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-6">
                                                            <span class="checkbox">
                                                                <input type="checkbox" id="checkBoxId3">
                                                                <label for="checkBoxId3">Remember me</label>
                                                            </span>
                                                        </div>

                                                        <div class="col-xs-6 text-right">
                                                            <a href="#" class="btn btn-main">Login</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/signin-->
                                                <!--signup-->

                                                <div class="login-block login-block-signup">

                                                    <div class="h4">Register now</div>

                                                    <hr />

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="First name: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="Last name: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="Address:">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="Zip code: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="City: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="Email: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control" placeholder="Phone: *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <hr />
                                                            <span class="checkbox">
                                                                <input type="checkbox" id="checkBoxId1">
                                                                <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as well as read and understood our terms of <a href="#">business contidions</a></label>
                                                            </span>

                                                            <hr />
                                                        </div>



                                                    </div>
                                                </div>
                                                <!--/signup-->
                                            </div>
                                        </div>
                                        <!--/login-wrapper-->
                                    </div>
                                    <!--/col-md-6-->
                                    <!-- === right content === -->

                                    

                                </div>
                            </div>
                        </div>

                        <!-- ========================  Cart wrapper bottom ======================== -->

                        <?php include('include/cart-wrapper-bottom.php'); ?>                    

                    </div>

                </div>
                <!--/container-->
            </div>
            <!--/checkout-->

        </section>





        <!-- ================== Footer  ================== -->

        <?php include('include/main-footer.php'); ?>

    </div>
    <!--/wrapper-->

     <!--JS files-->
   <?php include('include/scripts.php'); ?>
</body>

</html>