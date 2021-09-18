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
        <!-- ======================== Contact ======================== -->

        <section class="page">

            <!-- ===  Contact Form === -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">CONTACT US</h2>
                    <p>The best choice, our services & our team</p>
                </div>
            </div>

            <!-- ===  Contact === -->

            <div class="contact">

                <div class="container">

                    <!-- === Google map === -->

                    <div class="map" id="map"></div>

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                            <!-- === Contact block === -->

                            <div class="contact-block">

                                <!-- === Contact banner === -->

                                <div class="banner">
                                    <div class="row">
                                        <div class="col-md-offset-1 col-md-10 text-center">
                                            <h2 class="title">Send an email</h2>
                                            <p>
                                                Please use this form if you have any questions about our booking <br /> and we'll get back with you very soon.
                                            </p>

                                            <div class="contact-form-wrapper">

                                                <a class="btn btn-clean open-form" data-text-open="Contact us via form" data-text-close="Close form">Contact us via form</a>

                                                <div class="contact-form clearfix">
                                                    <form action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="" class="form-control" placeholder="Your name" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" value="" class="form-control" placeholder="Your email" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <input type="text" value="" class="form-control" placeholder="Subject" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" placeholder="Your message" rows="10"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" class="btn btn-clean" value="Send message" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- === Contact info === -->
                                <?php include('include/contact-info.php'); ?>


                            </div>
                            <!--/contact-block-->
                        </div>
                        <!--col-sm-8-->
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
            <!--/contact-->
        </section>

        <!-- ================== Footer  ================== -->

        <?php include('include/main-footer.php'); ?>

    </div>
    <!--/wrapper-->

    <!--JS files-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.bootstrap.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.owl.carousel.js"></script>
    <script src="js/main.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_UQuWHzqyOqHbp4IeFE7-Fa8m41uMTRg&callback=initMap"></script>
    <script>
        function initMap() {
            var contentString =
                '<div class="map-info-window">' +
                '<p><img src="assets/images/logo-dark.png" alt=""></p>' +
                '<p><strong>Resort</strong></p>' +
                '<p><i class="fa fa-map-marker"></i> 200 12th Ave, New York, NY 10001, USA</p>' +
                '<p><i class="fa fa-phone"></i> +12 33 444 555</p>' +
                '<p><i class="fa fa-clock-o"></i> 10am - 6pm</p>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            //set default pposition
            var myLatLng = {
                lat: 40.7459772,
                lng: -74.0545504
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng,
                styles: [{
                    "featureType": "administrative.locality",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#2c2e33"
                    }, {
                        "saturation": 7
                    }, {
                        "lightness": 19
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#ffffff"
                    }, {
                        "saturation": -100
                    }, {
                        "lightness": 100
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#ffffff"
                    }, {
                        "saturation": -100
                    }, {
                        "lightness": 100
                    }, {
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "hue": "#bbc0c4"
                    }, {
                        "saturation": -93
                    }, {
                        "lightness": 31
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{
                        "hue": "#bbc0c4"
                    }, {
                        "saturation": -93
                    }, {
                        "lightness": 31
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [{
                        "hue": "#bbc0c4"
                    }, {
                        "saturation": -93
                    }, {
                        "lightness": -2
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "hue": "#e9ebed"
                    }, {
                        "saturation": -90
                    }, {
                        "lightness": -8
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#e9ebed"
                    }, {
                        "saturation": 10
                    }, {
                        "lightness": 69
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#e9ebed"
                    }, {
                        "saturation": -78
                    }, {
                        "lightness": 67
                    }, {
                        "visibility": "simplified"
                    }]
                }]
            });
            //set marker
            var image = 'assets/images/map-icon.png';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "Hello World!",
                icon: image
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>

</body>

</html>