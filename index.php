<?php
include ('dbclass.php');
$obj = new database;
?>



<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>cubix</title>
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
        <!-- slider area start -->
        <section class="hero-slider">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item hero-1 bg-img" data-bg="assets/img/slider/home1-slide2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-1">
                                        <h1 class="slide-title">Express elegance</h1>
                                        <h2 class="slide-subtitle">The choices from Cubix are awesome!</h2>
                                        <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->

                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item hero-1 bg-img" data-bg="assets/img/slider/home2-slide1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <h1 class="slide-title">Your attitude</h1>
                                        <h2 class="slide-subtitle">Enhance it with new collections from Cubix!</span></h2>
                                        <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
                 <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item hero-1 bg-img" data-bg="assets/img/slider/home2-slide1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <h1 class="slide-title">One step ahead</h1>
                                        <h2 class="slide-subtitle">The right steps keep you ahead always!</span></h2>
                                        <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- service policy start -->
        <section class="service-policy bg-gray mtn-100">
            <div class="container">
                <div class="row row-10">
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <div class="ser-icon"><img src="img/footware.png"></div>
                            <div class="policy-text">
                                <h4 class="policy-title">Make a difference</h4>
                                <p class="policy-desc">The designs of Cubix are definitely a class apart. Stay different among others with the footwear that
fits your tastes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <img src="img/shoe-icon.png">
                            <div class="policy-text">
                                <h4 class="policy-title">Trendy &amp; Fashionable</h4>
                                <p class="policy-desc">We are extremely dynamic is adapting new trends and fashions. Our in-house fashion designers are
keen to provide you the trendiest.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <img src="img/benifit.png">
                            <div class="policy-text">
                                <h4 class="policy-title">Benefits are aplenty</h4>
                                <p class="policy-desc">The footwear Cubix portray is the most versatile. They suits various occasions and situations that
may occur in your everyday life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <img src="img/qulity.png">
                            <div class="policy-text">
                                <h4 class="policy-title">Unmatched durability</h4>
                                <p class="policy-desc">Cubix promises world-class quality. Every single product undergoes strict quality control measures to
ensure you always get the best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service policy end -->

        <!-- about us area start -->
        <section class="about-us bg-gray section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb js-tilt" data-tilt-perspective="1000" data-tilt-scale="1" data-tilt-speed="500" data-tilt-max="15">
                            <img class="w-100" src="assets/img/about/about.jpg" alt="about thumb">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="about-title">WE ARE CLOSER TO YOUR FOOT, YOUR HEART</h2>
                            
                            <p>Offer the best is the guiding principle behind every process at Cubix. Find your nearest store and
explore the widest variety of options from us. We have choices to match the needs of our discerning
customers, that spans from school going kids to fashion seeking teenager to office going executive.
Experience the best in PVC with most advanced PU technology with Cubix.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us area end -->

        <!-- product gallery area start -->
        <section class="product-gallery section-padding">
            <div class="container new-arrival">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">NEW ARRIVALS</h3>
                            <p class="sub-title">Discover your heart’s choices here. Here are some of our latest collections. Please don’t forget to
check this column out often, as we keep on inventing new ones for you.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                           
                           <?php
                               $res=$obj->select_featured_products(" where category='1'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>

                            <!-- product single item start -->
                            <div class="product-item" >
                                <div class="product-thumb"style="height: 300px">

                                         <a href="featured-product-details.php?id=<?php echo $row['product_id'];?>">


                                        <img src="cubix_admin/uploads/featured_products/<?php echo $row['product_image']; ?>" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                       
                                       <!--  <a href="#" data-toggle="modal" data-target="#quick_views"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> -->
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    
                                </div>
                                <div class="product-content"style="height: 150px">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="#"><?php echo $row['title']; ?></a>
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
                </div>
            </div>
        </section>
        <!-- product gallery area end -->

        <!-- banner statistics area start -->
        <div class="banner-statistics-area">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-md-6">
                        <div class="banner-statistics mt-30">
                            <a href="#">
                                <img src="img/shopnow.jpg" alt="banner thumb">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-statistics mt-30">
                            <a href="#">
                                <img src="img/shopnow1.jpg" alt="banner thumb">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistics area end -->

        <!-- product tab area start -->
        <section class="product-tab-area section-padding">
            <div class="container when-ready">
                <div class="pos-special-products">
                    <div class="row">
                        <div class="col-lg-6 col-right">
                            <div class="deals-tab-wrapper">
                                <div class="deals-tab-area">
                                    <div class="deals-nav-carousel">
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-1.jpg" alt="deals thumb">
                                        </div>
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-2.jpg" alt="deals thumb">
                                        </div>
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-3.jpg" alt="deals thumb">
                                        </div>
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-4.jpg" alt="deals thumb">
                                        </div>
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-5.jpg" alt="deals thumb">
                                        </div>
                                        <div class="deals-nav-item">
                                            <img src="assets/img/product/product-6.jpg" alt="deals thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-content-wrapper">
                                    <div class="deals-content-carousel">
                                        <!-- single slide item start -->
                                        <div class="deals-slide-item">
                                            <div class="deals-content-item">
                                                <h2 class="deals-title"><a href="#">When you are ready,
We win together.</a></h2>
                                                
                                                <p class="deals-desc">The sports shoes series from Cubix, Sprint is always ready to strive hard to make you a winner.</p>
                                               
                                                <a class="shop-btn" href="shop.php">View this product</a>
                                               
                                            </div>
                                        </div>
                                        <!-- single slide item end -->
                                        <!-- single slide item start -->
                                        <div class="deals-slide-item">
                                            <div class="deals-content-item">
                                                <h2 class="deals-title"><a href="#">When you are ready,
We win together.</a></h2>
                                               
                                                <p class="deals-desc">The sports shoes series from Cubix, Sprint is always ready to strive hard to make you a winner.</p>
                                                
                                                <a class="shop-btn" href="shop.php">View this product</a>
                                               
                                            </div>
                                        </div>
                                        <!-- single slide item end -->
                                        <!-- single slide item start -->
                                        <div class="deals-slide-item">
                                            <div class="deals-content-item">
                                                <h2 class="deals-title"><a href="#">When you are ready,
We win together.</a></h2>
                                                
                                                <p class="deals-desc">The sports shoes series from Cubix, Sprint is always ready to strive hard to make you a winner.</p>
                                               
                                                <a class="shop-btn" href="shop.php">View this product</a>
                                                
                                            </div>
                                        </div>
                                        <!-- single slide item end -->
                                        <!-- single slide item start -->
                                        <div class="deals-slide-item">
                                            <div class="deals-content-item">
                                               <h2 class="deals-title"><a href="#">When you are ready,
We win together.</a></h2>
                                                
                                                <p class="deals-desc">The sports shoes series from Cubix, Sprint is always ready to strive hard to make you a winner.</p>
                                               
                                                <a class="shop-btn" href="shop.php">View this product</a>
                                               
                                            </div>
                                        </div>
                                        <!-- single slide item end -->
                                        <!-- single slide item start -->
                                        <div class="deals-slide-item">
                                            <div class="deals-content-item">
                                                 <h2 class="deals-title"><a href="#">When you are ready,
We win together.</a></h2>
                                                
                                                <p class="deals-desc">The sports shoes series from Cubix, Sprint is always ready to strive hard to make you a winner.</p>
                                               
                                                <a class="shop-btn" href="shop.php">View this product</a>
                                            </div>
                                        </div>
                                        <!-- single slide item end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product tab area end -->

        <!-- category area start -->
        <section class="category-area bg-set bg-img section-padding pb-0" data-bg="assets/img/bg/bg-listcate.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title text-white">FIND YOURS FROM OUR FASCINATING SERIES</h3>
                            <h4 class="sub-title text-white">Though we have products in a vast number of categories, you can generally segregate them into
three, Men, Women and Kids.</h4>
                        </div>
                    </div>
                </div>
                <div class="row category-wrapper">
                    <div class="col-12">
                        <div class="catagory-carousel-active slick-row-15">
                            <div class="single-category-item">
                                <div class="category-title">
                                    <a href="shop.php">MEN</a>
                                </div>
                                <div class="category-thumb">
                                    <a href="shop.php">
                                        <img src="assets/img/category/category-1.png" alt="category thumb">
                                    </a>
                                </div>
                                <div class="shop-collection text-center">
                                    <a class="shop-btn" href="shop.php">View Collections</a>
                                </div>
                            </div>
                            <div class="single-category-item">
                                <div class="category-title">
                                    <a href="shop.php">WOMEN</a>
                                </div>
                                <div class="category-thumb">
                                    <a href="shop.php">
                                        <img src="assets/img/category/category-2.png" alt="category thumb">
                                    </a>
                                </div>
                                <div class="shop-collection text-center">
                                    <a class="shop-btn" href="shop.php">View Collections</a>
                                </div>
                            </div>
                           
                            <div class="single-category-item">
                                <div class="category-title">
                                    <a href="shop.php">KIDS</a>
                                </div>
                                <div class="category-thumb">
                                    <a href="shop.php">
                                        <img src="assets/img/category/category-3.png" alt="category thumb">
                                    </a>
                                </div>
                                <div class="shop-collection text-center">
                                    <a class="shop-btn" href="shop.php">Shop Collections</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- product gallery area start -->
        <section class="product-gallery section-padding mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">FEATURED PRODUCTS</h3>
                            <h4 class="sub-title">Cubix is the favourite choice of millions of people in India, Middle East and across the world. The
stylish designs of our featured products are sure to capture any individual.</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-container">
                            <!-- product tab menu start -->
                            <div class="product-tab-menu">
                                <ul class="nav justify-content-center">
                                    <li><a href="#tab1" class="active" data-toggle="tab">New Arrival</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Best Seller</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Featured Products</a></li>
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
                               $res=$obj->select_featured_products(" where category='1'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>
                                        <div class="product-item" >
                                            <div class="product-thumb" style="height: 300px">
                                                 <a href="featured-product-details.php?id=<?php echo $row['product_id'];?>">
                                                    <img src="cubix_admin/uploads/featured_products/<?php echo $row['product_image']; ?>" alt="product thumb">
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
                                                        <a href="#"><?php echo $row['title']; ?></a>
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
                               $res=$obj->select_featured_products(" where category='2'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>
                                        <div class="product-item">
                                            <div class="product-thumb"style="height: 300px">
                                                
                                                 <a href="featured-product-details.php?id=<?php echo $row['product_id'];?>">
                                                    <img src="cubix_admin/uploads/featured_products/<?php echo $row['product_image']; ?>" alt="product thumb">
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
                                                        <a href="#"><?php echo $row['title']; ?></a>
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
                               $res=$obj->select_featured_products(" where category='3'&& delete_status='0'");
                               while($row=mysqli_fetch_assoc($res)){
          
                                ?>
                                        <div class="product-item">
                                            <div class="product-thumb" style="height: 300px">
                                                <a href="#">
                                                    <img src="cubix_admin/uploads/featured_products/<?php echo $row['product_image']; ?>" alt="product thumb">
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
                                                        <a href="#"><?php echo $row['title']; ?></a>
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

        <!-- testimonial area start -->
        <section class="testimonial-area bg-img section-padding" data-bg="assets/img/bg/bg-testimonial.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-carousel">
                                <!-- slide item start -->
                                <div class="testimonial-slide-item">
                                    <div class="testimonial-item text-center">
                                        <p class="testimonial-desc">
                                            “The Cubix shoes I bought last week was really a fantastic product. My cousin suggested this brand
to me, Thanks to him.”
                                        </p>
                                        <div class="testimonial-author">
                                            <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                        </div>
                                        <h6 class="author-designation">Sujith Warkey, Thodupuzha</h6>
                                    </div>
                                </div>
                                <!-- slide item end -->
                                <!-- slide item start -->
                                <div class="testimonial-slide-item">
                                    <div class="testimonial-item text-center">
                                        <p class="testimonial-desc">
                                            “Wonderful design, I bought 3 pairs to match to my new wardrobe. The colours never fade, and you
can wash them any time, best fit for harsh weathers”.
                                        </p>
                                        <div class="testimonial-author">
                                            <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                        </div>
                                        <h6 class="author-designation">Saleena Gopan, Dubai</h6>
                                    </div>
                                </div>
                                <!-- slide item end -->
                                <!-- slide item start -->
                                <div class="testimonial-slide-item">
                                    <div class="testimonial-item text-center">
                                        <p class="testimonial-desc">
                                           “I have been using Cubix for last 7 years and I will buy any model blindfolded. Because I am so
convinced of the quality they offer”.
                                        </p>
                                        <div class="testimonial-author">
                                            <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                        </div>
                                        <h6 class="author-designation">Askhar Ali, Kochi</h6>
                                    </div>
                                </div>
                                <!-- slide item end -->
                            </div>
                        </div>
                        <div class="brand-logo-wrapper">
                            <div class="brand-logo-carousel slick-row-10 slick-arrow-style">
                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/1.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->

                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/2.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->

                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/3.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->

                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/4.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->

                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/5.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->

                                <!-- single brand start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="assets/img/brand/6.png" alt="">
                                    </a>
                                </div>
                                <!-- single brand end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

       
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
                                    
                                    <p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        
                                    </div>
                                   
                                   
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
 .slide-title {
    font-family: 'Josefin Sans', sans-serif;
    font-size: 46px;
    font-weight: bold;
    line-height: 1;
    color: #e2e2e2;
    
}    
.hero-slider-item.hero-1 .slide-title {
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
}
.slide-subtitle {
    font-size: 20px;
    font-weight: normal;
    line-height: 1.1;
    color: #c4c4c4;
    font-family: "Raleway", sans-serif;
}
.slick-arrow-style_hero button.slick-arrow:hover {
    color: #fff;
    background-color: #0a99d0;
}
.slick-arrow-style_hero button.slick-arrow {
    font-size: 30px;
    left: 0;
    width: 35px;
    height: 35px;
    background-color: #f6f6f6;
    border-radius: 9%;
    line-height: 50px;
    z-index: 1;
    border: none;
}
.btn-bg {
    background-color: #00adea;
    padding: 10px 16px;
    border: 1px solid #00adea;
}
.btn-large {
    font-size: 14px;
     font-family: 'Josefin Sans', sans-serif;
    font-weight: 700;
   text-transform: uppercase;
    padding: 10px 20px;
    
    border-radius: 50px;
}
.btn-bg:hover {
    color: #fff;
    background-color: #00427a;
    border: 1px solid #00427a;
}
.policy-text .policy-title {
    font-family: 'Josefin Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
    color: #00427a;

}
.policy-text .policy-desc {
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    color: #666;

}
.policy-block {
    padding: 40px 15px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
    min-height: 355px;
}
.about-title {
    font-family: 'Josefin Sans', sans-serif;
    font-size: 38px;
    color: #00427a;
    font-weight: 700;
    line-height: 1.1;
    margin-top: 11%;
    margin-bottom: 18px;

}
.about-content p{   font-family: "Raleway", sans-serif;
    font-size: 16px;
    color: #666;
text-align: justify;}
.new-arrival{}
.new-arrival h3{ font-family: 'Josefin Sans', sans-serif;
    font-size: 26px;
    color: #00427a;
    
    font-weight: 700;
    text-transform: uppercase;
    }
.new-arrival p{ font-family: "Raleway", sans-serif;
    font-size: 16px;
    color: #666;
    }
.deals-content-item .deals-title a {
    font-family: 'Josefin Sans', sans-serif;
    color: #00427a;
     font-size: 26px;
     font-weight: 700;
     text-transform: uppercase;
}
.deals-content-item .deals-desc {
    font-family: "Raleway", sans-serif;
    font-size: 18px;
    color: #666;
   
    line-height: 1.4;
    padding-top: 20px;
}
.deals-content-item {
    border: 1px solid #e5e5e5;
    background-color: #fff;
    padding: 30px 50px 30px 20px;
    min-height: 530px;
}
.deals-content-item .deals-title a:hover {
    color: #ed1d24;
}
.shop-btn {
    color: #fff;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 12px;
    line-height: 1;
    font-weight: 700;
    padding: 15px 25px;
    display: inline-block;
    background-color: #00427a;
    border-radius: 50px;
    text-transform: uppercase;
    margin-top: 40px;
}
.shop-btn:hover {
    color: #0067b1;
    background-color: #fff;
}
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
.single-category-item::after {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
    background-image: url(img/cat-hover.jpg);
    background-repeat: no-repeat;
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
.testimonial-area p{  font-size: 26px;
    font-weight: 400;
 
  
   
   
    font-family: 'Josefin Sans', sans-serif;  }
    .author-designation {
    color: #fff;
    font-family: "Raleway", sans-serif;
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