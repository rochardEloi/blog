<?php
include "./class/auth.class.php";
$auth = new Authentificator();
$user = $auth->verifySession("http://google.com");
?>


<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Game Blog</title>

   

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="assets/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links">
                

                
                -->
            </ul>
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                
                
                <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge">27</span>
                    </span>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images/logo.png" alt="GoodGames" width="199">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    
        <li class=" nk-drop-item">
            <a href="elements.html">
               Categories
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="categories.php">
                Aventure
                
            </a>
        </li>
        <li>
            <a href="categiries.php">
                Action
                
            </a>
        </li>
       
                    </ul>
        </li>
        <li class="active nk-drop-item">
            <a href="blog-list.html">
                Types
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="news.html">
                News
                
            </a>
        </li>
      
        <li>
            <a href="type.php">
                PC
                
            </a>
        </li>
                    </ul>
        </li>
        <li>
            <a href="gallery.html">
                Gallery
                
            </a>
        </li>
        
                    </ul>
        </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="#">Blog</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Blog Grid</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">

            <!-- START: Posts Grid -->
            <div class="nk-blog-grid">
                <div class="row">
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-1-mid.jpg" alt="Smell magic in the air. Or maybe barbecue">
                                <span class="nk-post-comments-count">4</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="35"> by <a href="#">Hitman</a> in Sep 18, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-2-mid.jpg" alt="Grab your sword and fight the Horde">
                                <span class="nk-post-comments-count">7</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">Grab your sword and fight the Horde</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="#">Witch Murder</a> in Sep 5, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-3-mid.jpg" alt="We found a witch! May we burn her?">
                                <span class="nk-post-comments-count">7</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in Aug 27, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-4-mid.jpg" alt="For good, too though, in consequence">
                                <span class="nk-post-comments-count">23</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="35"> by <a href="#">Hitman</a> in Aug 14, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                                <span class="nk-post-comments-count">13</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in Jul 23, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-7-mid.jpg" alt="At length one of them called out in a clear">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="#">Witch Murder</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-8-mid.jpg" alt="For good, too though, in consequence">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="#">Witch Murder</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-9-mid.jpg" alt="He made his passenger captain of one">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="35"> by <a href="#">Hitman</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                </div>

                <!-- START: Pagination -->
                <div class="nk-pagination nk-pagination-center">
                    <a href="#" class="nk-pagination-prev">
                        <span class="ion-ios-arrow-back"></span>
                    </a>
                    <nav>
                        <a class="nk-pagination-current" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">14</a>
                    </nav>
                    <a href="#" class="nk-pagination-next">
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
                <!-- END: Pagination -->
            </div>
            <!-- END: Posts Grid -->

        </div>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type something...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
    <div class="nk-widget-content">
        <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
        
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Video</span></h4>
    <div class="nk-widget-content">
        <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=vXy8UBazlO8"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="assets/images/post-1-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="assets/images/post-2-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="assets/images/post-3-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn her?</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
            </div>
        
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Screenshots</span></h4>
    <div class="nk-widget-content">
        <div class="nk-popup-gallery">
            <div class="row sm-gap vertical-gap">
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-1-thumb.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4>Called Let</h4>
                            Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-2-thumb.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-3-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-4-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-5-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="assets/images/gallery-6-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
    <div class="nk-widget-content">
        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
            </a>
        </div>

        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
            </a>
        </div>

        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-4.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score bg-dark-1">
                        0 : 0
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 23.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 32.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                <div class="nk-product-price">€ 14.00</div>
            </div>
        
    </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                <a target="_blank" href="">Blog</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/bg-top-2.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->


    
</body>
</html>
