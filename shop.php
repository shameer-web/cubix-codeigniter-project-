<?php
include ('dbclass.php');
$obj = new database;



?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>cubix | products</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="../../../fonts.googleapis.com/csse119.css?family=Nunito+Sans:300,300i,400,400i,600,700,800,900%7CPoppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Start Header Area -->
     <?php include('header.php') ?>
    <!-- end Header Area -->


    <!-- offcanvas search form start -->
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Search entire storage here...">
                        <button class="search-btn"><i class="fa fa-search"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas search form end -->

    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h3 class="breadcrumb-title">SHOP</h3>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

<section style="padding-top: 0px;" class="product-gallery section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title"></h3>
                            <h4 class="sub-title"></h4>
                        </div>



 <div class="shop-top-bar">
                               <!--  <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                                
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–16 of 21 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> -->
                            </div>





                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-container">
                            <!-- product tab menu start -->
                            <div class="product-tab-menu">
                                <ul class="nav justify-content-center">
                                    <li><a href="#tab1" class="active" data-toggle="tab">MEN</a></li>
                                    <li><a href="#tab2" data-toggle="tab">WOMEN</a></li>
                                    <li><a href="#tab3" data-toggle="tab">KIDS</a></li>
                                </ul>
                            </div>
                            <!-- product tab menu end -->

                            <!-- product tab content start -->
                            <div class="tab-content">
                                <!-- single tab item start -->
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                        <!-- product single item start -->


                                         <?php
                               $res=$obj->products(" where category='1'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){

                              
          
                                ?>
                                        <div class="product-item">
                                            <div class="product-thumb" style="height: 300px">
                                                <a href="product-details.php?id=<?php echo $row['product_id'];?>">
                                                    <img src="cubix_admin/uploads/product/<?php echo $row['product_image']; ?>" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <!-- <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a> -->
                                                   <!--  <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> -->
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content" style="height: 150px">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="product-details.php"><?php echo $row['title']; ?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$<?php echo $row['price']; ?></del></span>
                                                        <span class="price-regular">$<?php echo $row['offer_price']; ?></span>
                                                    </div>
                                                    <!-- <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a> -->
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!-- product single item end -->
                                       <?php  }?>   
                                     

                                       

                                       

                                        

                                        

                                        

                                        

                                        

                                       
                                    </div>
                                </div>
                                <!-- single tab item end -->

                                <!-- single tab item start -->
                                <div class="tab-pane fade" id="tab2">
                                    <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                        <!-- product single item start -->

                                      
                                        <?php
                               $res=$obj->products(" where category='2'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>


                                        <div class="product-item">
                                            <div class="product-thumb" style="height: 300px">
                                                <a href="product-details.php?id=<?php echo $row['product_id'];?>">
                                                    <img src="cubix_admin/uploads/product/<?php echo $row['product_image']; ?>" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <!-- <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a> -->
                                                   <!--  <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> -->
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content" style="height: 150px">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="product-details.php"><?php echo $row['title']; ?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$<?php echo $row['price']; ?></del></span>
                                                        <span class="price-regular">$<?php echo $row['offer_price']; ?></span>
                                                    </div>
                                                    <!-- <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a> -->
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!-- product single item end -->
                                        <?php  }?>    
                                        

                                        

                                        

                                       

                                       

                                        

                                       

                                        

                                        
                                    </div>
                                </div>
                                <!-- single tab item end -->

                                <!-- single tab item start -->
                                <div class="tab-pane fade" id="tab3">
                                    <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                        <!-- product single item start -->




                                        <?php
                               $res=$obj->products(" where category='3'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>
                                        <div class="product-item">
                                            <div class="product-thumb" style="height: 300px">
                                                <a href="product-details.php?id=<?php echo $row['product_id'];?>">
                                                    <img src="cubix_admin/uploads/product/<?php echo $row['product_image']; ?>" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <!-- <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a> -->
                                                    <!-- <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> -->
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content" style="height: 150px">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="product-details.php"><?php echo $row['title']; ?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$<?php echo $row['price']; ?></del></span>
                                                        <span class="price-regular">$<?php echo $row['offer_price']; ?></span>
                                                    </div>
                                                    <!-- <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a> -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- product single item end -->

                                   <?php  }?>         

                                       

                                        

                                      

                                        

                                        

                                       

                                       

                                       
                                    </div>
                                </div>
                                <!-- single tab item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product gallery area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <!-- shop main wrapper start -->
                    <div class="col-lg-12">
                        <div class="shop-product-wrapper">
                            <!-- start pagination area -->
                            <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                    <li><a class="previous" href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- end pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->


    <!-- footer area start -->
     <?php include('footer.php') ?>
    <!-- footer area end -->



    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name">Premium Mens Sports Lather Keds</h3>
                                    
                                    <div class="price-box">
                                        <span class="price-old"><del>$90.00</del></span>
                                        <span class="price-regular">$70.00</span>
                                    </div>
                                    <h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
                                   
                                    <p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                   
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->
<style>
	.section-title .title {
     font-family: 'Josefin Sans', sans-serif;
    color: #00427a;
     font-size: 26px;
     font-weight: 700;
     text-transform: uppercase;

}
.section-title .sub-title {
    font-family: "Raleway", sans-serif;
    font-size: 18px;
    color: #666;
}
.product-tab-menu ul li a::before {
    width: 100%;
    height: 2px;
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #00427a;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
}
.product-tab-menu ul li a:hover, .product-tab-menu ul li a.active {
    color: #00427a;
}
.product-tab-menu ul li a {
    font-size: 16px;
    font-weight: 900;
    line-height: 1.2;
    color: #222222;
    text-transform: uppercase;
    position: relative;
    font-family: 'Josefin Sans', sans-serif;
}
.top-bar-left .product-view-mode a.active {
    color: #00427a;
}
.paginatoin-area .pagination-box li.active a {
    color: #fff;
    background-color: #00427a;
}
.product-name a:hover {
    color: #00427a;
}
.button-group a:hover {
    font-size: 18px;
    line-height: 38px;
    color: #fff;
    text-align: center;
    background-color:#00427a;
}
</style>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/countdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- jquery UI JS -->
    <script src="assets/js/plugins/jqueryui.min.js"></script>
    <!-- Image zoom JS -->
    <script src="assets/js/plugins/image-zoom.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- masonry  -->
    <script src="assets/js/plugins/masonry.pkgd.min.js"></script>
    <!-- mailchimp active js -->
    <script src="assets/js/plugins/ajaxchimp.js"></script>
    <!-- contact form dynamic js -->
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="assets/js/plugins/google-map.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>



</html>