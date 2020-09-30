<?php
include ('dbclass.php');
$obj = new database;

 $base_url = "http://willowy.website/Willowy/cubix/";
$id = $_GET['id'];

if(isset($id) and $id != ''){
$res=$obj->product($id);

$details = mysqli_fetch_assoc($res);
// $images = mysqli_fetch_all($res2);


}


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
                                    <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <?php if(isset($details)) {?>
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                         <?php
                                $res2=$obj->product_images($id);

                               while($row=mysqli_fetch_assoc($res2)) 
                                                {

                              
          
                                ?>
                                        <div class="pro-large-img img-zoom">
                                            <img src="<?php echo $base_url.'cubix_admin/uploads/product/'.$row['image']; ?>" alt="product-details" />
                                        </div>
                                        
                                        
                                        <?php } ?>
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">

                                            <?php
                                $res2=$obj->product_images($id);

                               while($row=mysqli_fetch_assoc($res2)) 
                                                {

                              
          
                                ?>
                                        <div class="pro-nav-thumb">
                                            <img src="<?php echo $base_url.'cubix_admin/uploads/product/'.$row['image']; ?>" alt="product-details" />
                                        </div>


                                <?php  }?>   
                                       <!--  <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                        </div> -->
                                        <!-- <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                        </div> -->
                                        <!-- <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <h3 class="product-name"><?= $details['title']?></h3>
                                       <!--  <div class="ratings d-flex">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div> -->
                                        <div class="price-box">
                                            <?php

                                            if($details['offer_price'] or $details['offer_price'] === 0){ ?>
                                            <span class="price-old">₹ <del><?= $details['price'] ?></del></span>
                                            <span class="price-regular">₹ <?= $details['offer_price']; ?></span>
                                        <?php }
                                        else{
                                            ?>
                                            <span class="price-regular">₹ <?= $details['price']; ?></span>
                                        <?php
                                        }
                                        ?>
                                        </div>
                                      
                                       
                                       
                                        <p class="pro-desc"><?= $details['description']?></p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                           <!--  <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="#">Add To Cart</a>
                                            </div> -->
                                        </div>
                                        <div class="useful-links">
                                            <!-- <a href="#" data-toggle="tooltip" title="Compare"><i
                                                class="fa fa-refresh"></i>compare</a>
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="fa fa-heart-o"></i>wishlist</a> -->
                                        </div>
                                        <div class="like-icon">
                                           <!--  <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                       
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        <?php } ?>
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
.product-name{ 
  
    
    font-family: 'Josefin Sans', sans-serif;  color: #00427a;}


    .btn-cart2 {
    height: 40px;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    line-height: 40px;
    border-radius: 50px;
    padding: 0 25px;
    background-color: #00427a;
}
.btn-cart2:hover {
    color: #fff;
    background-color: #222222;
}
.product-review-info .nav.review-tab li a {
    color: #fff;
    display: block;
    font-size: 16px;
    line-height: 1;
    text-transform: capitalize;
    padding: 8px 10px;
    border: 1px solid #00427a;
        border-bottom-color: rgb(135, 177, 6);
        border-bottom-style: solid;
        border-bottom-width: 1px;
    border-bottom: none;
    background-color: #00427a;
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