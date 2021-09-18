<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Lets Chalo - Farm, Resort & Beach Huts Booking Site</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="css/bootstrap.min.css" />
    <link rel="stylesheet" media="all" href="css/animate.css" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" media="all" href="css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="css/hotel-icons.css" />
    <link rel="stylesheet" media="all" href="css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="css/datepicker.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" media="all" href="css/custom.css" />
    <link rel="stylesheet" media="all" href="css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">


</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        
        <!-- ========================  main header ======================== -->

        <?php include('include/main-header.php'); ?>

        <!-- ========================  Rooms ======================== -->

        <section class="page">

            <!-- ========================  Page header ======================== -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">Resorts</h2>
                    <p>List of Best Resorts in Karachi</p>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-60">
                            <div class="tab-filter-wrap">
                                <div class="product-tab-list-2 nav">
                                    <a href="#product-1" data-toggle="tab">
                                        <h4>New Arrivals </h4>
                                    </a>
                                    <a class="active" href="#product-2" data-toggle="tab">
                                        <h4>Best Sellers </h4>
                                    </a>
                                    <a href="#product-3" data-toggle="tab">
                                        <h4>Sale Items</h4>
                                    </a>
                                </div>
                                <div class="filter-active" id="showmenu">
                                    <i class="fa fa-plus"></i> filter
                                </div>
                            </div>
                            
                            <div class="product-filter-wrapper">
                                <div class="row">
                                    <!-- Product Filter -->
                                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                        <div class="product-filter">
                                            <h5>Sort by</h5>
                                            <ul class="sort-by">
                                                <li><a href="#">Default</a></li>
                                                <li><a href="#">Popularity</a></li>
                                                <li><a href="#">Average rating</a></li>
                                                <li><a href="#">Newness</a></li>
                                                <li><a href="#">Price: Low to High</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- Product Filter -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                        <div class="product-filter">
                                            <h5>No. of People</h5>
                                            <ul class="color-filter">
                                                <li><input type="checkbox" value=""> <a href="#">50-100</a></li>
                                                <li><input type="checkbox" value=""> <a href="#">101-200</a></li>
                                                <li><input type="checkbox" value=""> <a href="#">201-300</a></li>
                                                <li><input type="checkbox" value=""> <a href="#">300-400</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Filter -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                        <div class="product-filter">
                                            <h5>Location</h5>
                                            <input type="search" name="search" value="search">
                                            <div class="product-tags">
                                                <ul>
                                                    <li><a href="#">Kemari</a></li>
                                                    <li><a href="#">Thatta</a></li>
                                                    <li><a href="#">Kunt Malir</a></li>
                                                    <li><a href="#">Karachi</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Filter -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                        <div class="product-filter">
                                            <h5>Filter by price</h5>
                                            <div class="price-range-slider">
  
                                            <p class="range-value">
                                                <input type="text" id="amount" readonly>
                                            </p>
                                            <div id="slider-range" class="range-bar"></div>
                                            
                                            </div>
                                            <!-- <div class="price-filter mt-25">
                                                <div class="price-slider-amount">
                                                    <input type="text" id="amount" name="price" placeholder="Add Your Price">
                                                </div>
                                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 73.9583%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 73.9583%;"></span></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>


    </div>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>



    <!-- === Product content === -->

    <?php include('include/product-gallery.php'); ?>
    </section>

    <!-- ========================  Stretcher widget ======================== -->

    <section class="stretcher-wrapper">

        <!-- === stretcher header === -->

        <div class="section-header">
            <div class="container">
                <h2 class="title"><a href="#" class="btn btn-sm btn-clean-dark">View more</a></h2>
            </div>
        </div>

        <!-- === stretcher === -->


    </section>



  <!-- ================== Footer  ================== -->

  <?php include('include/main-footer.php'); ?>

    </div>
    <!--/wrapper-->

     <!--JS files-->
     <?php include('include/scripts.php'); ?>
     <script>
         $(document).ready(function() {
            $('#showmenu').click(function() {
                    $('.product-filter-wrapper').slideToggle("slow");
            });
        });

        $(function() {
	$( "#slider-range" ).slider({
	  range: true,
	  min: 25000,
	  max: 100000,
	  values: [ 130, 250 ],
	  slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});


     </script>
    


     
</body>

</html>