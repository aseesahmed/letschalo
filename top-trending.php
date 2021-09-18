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

            <div class="page-header" style="background-image:url(assets/images/header-1a.jpg)">
                <div class="container">
                    <h1 class="title">Top Trending Places</h1>
                   
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

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="pagination-wrapper">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="disabled"><a href="#">3</a></li>
                                        <li class="active"><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">9</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                </div>
            </div>
        </div>

        
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