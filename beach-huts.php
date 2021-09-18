<!DOCTYPE html>
<html lang="en">

<head>


<?php include('include/head.php'); ?>

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
                    <h2 class="title">Beach Huts</h2>
                    <p>List of Beach Huts in Karachi</p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-filter-wrap mb-60">
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
                            <div class="filter-active">
                                <a href="#"><i class="fa fa-plus"></i> filter</a>
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
</body>

</html>