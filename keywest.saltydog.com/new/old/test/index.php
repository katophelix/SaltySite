<?php
date_default_timezone_set('America/New_York');
ini_set('display_errors',1);
error_reporting(-1);
$images = glob('../slides/*.jpg');
?>
<!DOCTYPE html>
<html lang="en-US" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#444747">
<meta name="msapplication-navbutton-color" content="#444747">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link type="text/css" media="all" href="css/autoptimize_bfb07f5ab6db06606e8d0aec4064cb66.css" rel="stylesheet" />
<link type="text/css" media="screen" href="css/autoptimize_373d866d53645197a7ebc0db3718c214.css" rel="stylesheet" />
<title>Salty Dog Key West</title>
<!--[if lte IE 9]><link rel='stylesheet' id='theme-ie-only-css'  href='wp-content/themes/parallelus-caliber/assets/css/ie-only-ver=47cd76e43f74bbc2e1baaf194d07e1fa.css' type='text/css' media='all' /> <![endif]-->
<link rel='stylesheet' id='theme-google-font-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,600italic,700,700italic%7CRaleway:400,400italic,200,200italic,500,500italic,800,800italic&subset=latin,latin-ext' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1.12.3'></script><!--[if lt IE 9]> <script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js?ver=4.5.2'></script> <![endif]--><!--[if lt IE 9]> <script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js?ver=4.5.2'></script> <![endif]-->
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<style type="text/css">
.recentcomments a {
	display: inline !important;
	padding: 0 !important;
	margin: 0 !important;
}
</style>
</head>
<body class="home page page-id-40 page-template-default fl-builder boxed">
<div id="wrapper">
  <div class="navbar-wrapper">
    <header class="navbar navbar-default top-nav navbar-sticky navbar-static-top" id="top">
      <div class="container-fluid container-xl">
        <div class="navbar-header">
        <a href="index.html" title="Salty Dog Key West" rel="home" class="navbar-brand">
        <img src="http://keywest.saltydog.com/img/logo-dk.png" alt="Salty Dog Key West"></a>
          <button class="navbar-toggle squeeze collapsed" type="button" data-toggle="collapse" data-target="#navbar-main"> 
          <span class="sr-only">Toggle navigation</span> <span class="squeeze-box"> <span class="squeeze-inner"></span> </span> </button>
        </div>
        <nav class="collapse navbar-collapse" id="navbar-main">
          <ul id="nav-right" class="nav navbar-nav navbar-right">
            <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="our-work/index.html">Gallery</a></li>
            <!--<li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146"><a href="blog/index.html">Blog</a></li>
            <li id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145"><a href="team/index.html">Team</a></li>
            <li id="menu-item-149" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-149 dropdown show-on-hover"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Pages <span class="caret"></span></a>
              <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="page-left-sidebar/index.html">Left Sidebar</a></li>
                <li id="menu-item-154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-154"><a href="page-right-sidebar/index.html">Right Sidebar</a></li>
                <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a href="full-screen-pages/index.html">Full Screen Background</a></li>
                <li id="menu-item-412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-412"><a href="full-screen-header/index.html">Full Screen Headers</a></li>
                <li id="menu-item-288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288"><a href="wp-admin/index.html">Sign In</a></li>
                <li id="menu-item-289" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-289"><a href="404/index.html">Error Page</a></li>
              </ul>
            </li>-->
            <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="contact/index.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
  <div id="header" class="masthead masthead-medium middle-align" style="background-image:none;">
    <div class="section-wrapper">
      <div class="container-xl">
        <div id="static-content-42" class="static-content ">
          <p class="pre-heading">903 Simonton Street at Olivia, Key West, Florida 33040</p>
          <!--<h1>Solutions for a Connected World</h1>-->
          <p class="lead" style="margin-bottom: 0">Open Everyday 10am - 8pm 305.294.0036</h1>
          <!--<p class="lead" style="margin-bottom:</p>-->
          
        </div>
      </div>
    </div>
  </div>
 <div id="middle">
 <ul class="projects-grid hover-color hide-titles masonry" id="project-grid">
                  <?php
				  foreach($images as $img){
					  ?>            
                                <!-- project item -->
                                <li class="project-item mix photography">
                                    <a href="<?=$img?>" class="fancybox" data-rel="portfolio" data-title-id="img-01">
                                           <div class="project-img">
                                                <img src="<?=$img?>" alt="project" />
                                           </div>
                                          
                                    </a>
                                </li>
                                <?php
				  }
				  ?>
                                </ul>
 <!--   <div class="frontend-editor entry-content">
      <article id="page-40" class="post-40 page type-page status-publish hentry">
        <div class="fl-builder-content fl-builder-content-40 fl-builder-global-templates-locked" data-post-id="40">
          <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-570bdeb3a8f9e section-wrapper no-padding-x-r no-padding-y flex-wrapper" data-node="570bdeb3a8f9e">
            <div class="container-wrap">
              <div class="container-xl fluid-width auto-margin-l flex-cols-x-start flex-cols-y-center flex-container-wrap">
                <div class="fl-col-group fl-node-570bdeb3b27f7" data-node="570bdeb3b27f7">
                  <div class="fl-col fl-col-small flex-col flex-self-y-dafault fl-node-570bdeb3b2fc2" style="width: 50%;" data-node="570bdeb3b2fc2">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-heading fl-node-570bdf431a39e" data-node="570bdf431a39e"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fee-heading" style="text-align: left">
                            <h2 class="fee-heading x2">Freedom to Imagine</h2>
                            <p class="lead fee-lead">We take your brand forward by integrating it with your customer's daily routines, digital and beyond!</p>
                          </div>
                        </div>
                      </div>
                      <div class="fl-module fl-module-html fl-node-570bdeca393ff" data-node="570bdeca393ff"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-html">
                            <p> As a team we are serious about delivering great results from our award winning digital agency focused on buyer centered solutions. We deliver smart products, fulfilling experiences and outstanding results for clients around the world. <br>
                              <br>
                              <a href="../demo/team/index.html" class="btn btn-primary btn-lg" role="button">More About Us</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fl-col fl-col-small flex-col flex-self-y-dafault fl-node-570bdeb3b33ae" style="width: 50%;" data-node="570bdeb3b33ae">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-photo fl-node-570bdeb3bc80e" data-node="570bdeb3bc80e"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-photo fl-photo-align-right" itemscope itemtype="http://schema.org/ImageObject">
                            <div class="fl-photo-content"> <img class="fl-photo-img wp-image-35 size-full" src="wp-content/uploads/sites/5/monitor-large-right.png" alt="monitor-large-right" itemprop="image" srcset="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/monitor-large-right.png 885w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/monitor-large-right-300x256.png 300w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/monitor-large-right-768x654.png 768w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/monitor-large-right-158x135.png 158w" sizes="(max-width: 885px) 100vw, 885px" /></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-56d66af9269a0 section-wrapper" data-node="56d66af9269a0">
            <div class="container-wrap">
              <div class="container-xl fluid-width">
                <div class="fl-col-group fl-node-56d66af929490" data-node="56d66af929490">
                  <div class="fl-col fl-node-56d66af92987c" style="width: 100%;" data-node="56d66af92987c">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-heading fl-node-56eeaf952cd03" data-node="56eeaf952cd03"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fee-heading" style="text-align: center">
                            <p class="pre-heading fee-pre-heading">What We Do Best</p>
                            <h3 class="fee-heading x2">Just a few examples of our <em>award winning</em> work...</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-570c945a32175 section-wrapper no-padding-x no-padding-y" data-node="570c945a32175">
            <div class="container-wrap">
              <div class="container-xl fluid-width">
                <div class="fl-col-group fl-node-570c945a3e8c0" data-node="570c945a3e8c0">
                  <div class="fl-col fl-node-570c945a3f4c4 container-portfolio" style="width: 100%;" data-node="570c945a3f4c4">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-portfolio fl-node-56d66b9e76d74" data-node="56d66b9e76d74"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-portfolio small-portfolio"> <a id="post-123" class="portfolio-grid-item post-123 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-06.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Polar Surf Shop">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-06.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-06.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Polar Surf Shop</h2>
                                  <p class="item-description">Updated branding, graphics, illustration, logo, marketing and website redesign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-133" class="portfolio-grid-item post-133 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-02.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Orange Studio">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-02.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-02.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Orange Studio</h2>
                                  <p class="item-description">UI/UX consulting and national print advertising campaign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-132" class="portfolio-grid-item post-132 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-08.jpg"  data-lightbox="gallery_56d66b9e76d74" title="XERONE Fitness">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-08.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-08.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">XERONE Fitness</h2>
                                  <p class="item-description">Trainer experience development and new customer on boarding process design.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-131" class="portfolio-grid-item post-131 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-09.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Apex Productions">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-09.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-09.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Apex Productions</h2>
                                  <p class="item-description">Short theatrical play for use in feature films and stock footage resale promotion.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-130" class="portfolio-grid-item post-130 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-10.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Tiger Mobile">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-10.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-10.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Tiger Mobile</h2>
                                  <p class="item-description">Brand and advertising campaign for new EXPERIENCE phone release.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-129" class="portfolio-grid-item post-129 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-11.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Butterfly Energy">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-11.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-11.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Butterfly Energy</h2>
                                  <p class="item-description">Educational materials design for use in K-12 promotion to teach energy conservation and safety.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-128" class="portfolio-grid-item post-128 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-04.jpg"  data-lightbox="gallery_56d66b9e76d74" title="NerdLab Technologies">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-04.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-04.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">NerdLab Technologies</h2>
                                  <p class="item-description">UI/UX consulting and national print advertising campaign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-127" class="portfolio-grid-item post-127 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-13.jpg"  data-lightbox="gallery_56d66b9e76d74" title="FoxCom">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-13.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-13.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">FoxCom</h2>
                                  <p class="item-description">Updated branding, graphics, illustration, logo, marketing and website redesign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-126" class="portfolio-grid-item post-126 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-14.jpg"  data-lightbox="gallery_56d66b9e76d74" title="GEM Aerospace">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-14.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-14.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">GEM Aerospace</h2>
                                  <p class="item-description">UI/UX consulting and national print advertising campaign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-125" class="portfolio-grid-item post-125 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-15.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Molluscs Enterprises">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-15.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-15.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Molluscs Enterprises</h2>
                                  <p class="item-description">Updated branding, graphics, illustration, logo, marketing and website redesign.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-124" class="portfolio-grid-item post-124 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-19.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Tower Bank">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-19.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-19.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Tower Bank</h2>
                                  <p class="item-description">Bank teller experience development and new customer on boarding process design.</p>
                                </div>
                              </div>
                            </div>
                            </a><a id="post-134" class="portfolio-grid-item post-134 portfolio type-portfolio status-publish format-standard has-post-thumbnail hentry portfolio-category-lightbox" href="wp-content/uploads/sites/5/large-sample-image-16.jpg"  data-lightbox="gallery_56d66b9e76d74" title="Buzz Feeds">
                            <div class="item-image fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-16.jpg">
                              <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-16.jpg)"></div>
                            </div>
                            <div class="item-content-wrap">
                              <div class="content-inner">
                                <div class="inner-wrap">
                                  <h2 class="item-title">Buzz Feeds</h2>
                                  <p class="item-description">Focus group study on new UI/UX and consulting towards future solutions.</p>
                                </div>
                              </div>
                            </div>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-571e2c98a7a65 section-wrapper no-padding-y-b" data-node="571e2c98a7a65">
            <div class="container-wrap">
              <div class="container-xl fluid-width">
                <div class="fl-col-group fl-node-571e2e79c2ae6" data-node="571e2e79c2ae6">
                  <div class="fl-col fl-node-571e2e79c32b6" style="width: 100%;" data-node="571e2e79c32b6">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-heading fl-node-56eeb0c05d958" data-node="56eeb0c05d958"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fee-heading" style="text-align: center">
                            <h3 class="fee-heading x2">Shaping <em>user experience</em> to build <em>powerful connections</em>.</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fl-col-group fl-node-571e2e8752eb1" data-node="571e2e8752eb1">
                  <div class="fl-col fl-node-571e2e8753698" style="width: 100%;" data-node="571e2e8753698">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-photo fl-node-56d66c7354067" data-node="56d66c7354067"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-photo fl-photo-align-center" itemscope itemtype="http://schema.org/ImageObject">
                            <div class="fl-photo-content"> <img class="fl-photo-img wp-image-34" src="../demo/wp-content/uploads/sites/2/responsive-mockup-1.jpg" alt="responsive-mockup-1" itemprop="image" srcset="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1.jpg 1600w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1-300x200.jpg 300w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1-768x511.jpg 768w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1-1024x681.jpg 1024w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1-1200x798.jpg 1200w, http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/responsive-mockup-1-180x120.jpg 180w" sizes="(max-width: 1600px) 100vw, 1600px" /></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-fixed-width fl-row-bg-none fl-node-571e2eb1c49a6 section-wrapper no-padding-y-t" data-node="571e2eb1c49a6">
            <div class="container-wrap">
              <div class="container">
                <div class="fl-col-group fl-node-571e2eb1ce204" data-node="571e2eb1ce204">
                  <div class="fl-col fl-node-571e2eb1cedc5" style="width: 100%;" data-node="571e2eb1cedc5">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-heading fl-node-571e2cab11187" data-node="571e2cab11187"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fee-heading" style="text-align: center">
                            <p class="lead fee-lead">We're a digital agency focused on the user. Specializing in delivering an engaging experience to solve unique individual problems. We use our designs to build connections that are meaningful and powerful to our brands, products and the people they touch. It's what we do.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-570c949167094 section-wrapper no-padding-x no-padding-y" data-node="570c949167094">
            <div class="container-wrap">
              <div class="container-xl fluid-width">
                <div class="fl-col-group fl-node-570c94916d246" data-node="570c94916d246">
                  <div class="fl-col fl-node-570c94916ddff container-post" style="width: 100%;" data-node="570c94916ddff">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-posts fl-node-56d6796563a88" data-node="56d6796563a88"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-posts">
                            <article id="post-114" class="post-114 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-post tag-standard">
                              <div class="section-post-thumbnail">
                                <div class="entry-thumbnail">
                                  <figure> <img width="1200" height="800" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAMAAACDKl70AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF////AAAAVcLTfgAAAAF0Uk5TAEDm2GYAAAAOSURBVHjaYmBAAQABBgAADwAB1KgyvAAAAABJRU5ErkJggg==" class="placeholder" alt="placeholder"></figure>
                                </div>
                                <a href="making-a-better-and-more-beautiful-digital-landscape/index.html" rel="bookmark" class="entry-thumbnail-cover fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-17.jpg">
                                <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-17.jpg)"></div>
                                </a>
                                <div class="author-avatar"> <a href="author/claire/index.html" title="Posts by Claire Temple"> <img src="wp-content/uploads/sites/5/avatar-1-120x120.jpg" width="100" height="100" alt="Claire Temple" class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo" /> </a></div>
                              </div>
                              <div class="section-post-content">
                                <header class="entry-header">
                                  <h2 class="entry-title"><a href="making-a-better-and-more-beautiful-digital-landscape/index.html" rel="bookmark">Making a Better and More Beautiful Digital Landscape</a></h2>
                                </header>
                                <div class="entry-content">
                                  <p> Business plan iPhone stock traction validation non-disclosure agreement. Launch party social media seed money equity rockstar freemium venture mass market seed round supply chain ownership gen-z user experience. Growth hacking series A financing technology alpha startup network effects. Alpha traction &hellip; <br>
                                    <a href="making-a-better-and-more-beautiful-digital-landscape/index.html" rel="bookmark" class="more-link btn btn-default">More <span class="meta-nav">&#8594;</span></a></p>
                                </div>
                                <footer class="entry-meta"> <span class="author vcard"><a href="author/claire/index.html" title="Posts by Claire Temple" rel="author">Claire Temple</a></span> <span class="sep">/</span> <span class="posted-on">March 2, 2016</span> <span class="sep">/</span> <span class="comments-link"><a href="making-a-better-and-more-beautiful-digital-landscape/index.html#comments">3 Comments</a></span></footer>
                              </div>
                            </article>
                            <article id="post-112" class=" post-alt post-112 post type-post status-publish format-audio has-post-thumbnail hentry category-music category-post-formats tag-music tag-post-format tag-single post_format-post-format-audio">
                              <div class="section-post-thumbnail">
                                <div class="entry-thumbnail">
                                  <figure> <img width="1200" height="800" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAMAAACDKl70AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF////AAAAVcLTfgAAAAF0Uk5TAEDm2GYAAAAOSURBVHjaYmBAAQABBgAADwAB1KgyvAAAAABJRU5ErkJggg==" class="placeholder" alt="placeholder"></figure>
                                </div>
                                <div class="entry-thumbnail-cover fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-album-cover.jpg">
                                  <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-album-cover.jpg)"></div>
                                  <div id="jp_container_112" class="jp-container jp-audio" role="application" aria-label="media player">
                                    <div class="jp-type-single">
                                      <div id="jquery_jplayer_112" class="jp-jplayer jp-jplayer-audio" data-mp3="/themes/caliber/_demo_media/sample.mp3" data-ogg="/themes/caliber/_demo_media/sample.ogg"></div>
                                      <div class="jp-gui jp-interface">
                                        <div class="jp-controls">
                                          <div class="seperator-first"></div>
                                          <div class="seperator-second"></div>
                                          <button class="jp-play" tabindex="0"><i class="fa fa-play"></i><span>play</span></button>
                                          <button class="jp-pause" tabindex="0"><i class="fa fa-pause"></i><span>pause</span></button>
                                          <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i><span>mute</span></button>
                                          <button class="jp-unmute" tabindex="0"><i class="fa fa-volume-off"></i><span>unmute</span></button>
                                        </div>
                                        <div class="jp-progress-container">
                                          <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                              <div class="jp-play-bar"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="jp-volume-bar-container">
                                          <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="author-avatar"> <a href="author/karen/index.html" title="Posts by Karen Page"> <img src="wp-content/uploads/sites/5/avatar-5-120x120.jpg" width="100" height="100" alt="Karen Page" class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo" /> </a></div>
                              </div>
                              <div class="section-post-content">
                                <header class="entry-header">
                                  <h2 class="entry-title"><a href="team-zissou-that-1st-album/index.html" rel="bookmark">Team ZISSOU: That 1st Album</a></h2>
                                </header>
                                <div class="entry-content">
                                  <p> Business plan iPhone stock traction validation non-disclosure agreement. Launch party social media seed money equity rockstar freemium venture mass market seed round supply chain ownership gen-z user experience. Growth hacking series A financing technology alpha startup network effects. Alpha traction &hellip; <br>
                                    <a href="team-zissou-that-1st-album/index.html" rel="bookmark" class="more-link btn btn-default">More <span class="meta-nav">&#8594;</span></a></p>
                                </div>
                                <footer class="entry-meta"> <span class="author vcard"><a href="author/karen/index.html" title="Posts by Karen Page" rel="author">Karen Page</a></span> <span class="sep">/</span> <span class="posted-on">March 2, 2016</span> <span class="sep">/</span> <span class="comments-link"><a href="team-zissou-that-1st-album/index.html#comments">3 Comments</a></span></footer>
                              </div>
                            </article>
                            <article id="post-113" class="post-113 post type-post status-publish format-gallery has-post-thumbnail hentry category-post-formats tag-gallery tag-post-format tag-single post_format-post-format-gallery">
                              <div class="section-post-thumbnail">
                                <div class="entry-thumbnail">
                                  <figure> <img width="1200" height="800" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAMAAACDKl70AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF////AAAAVcLTfgAAAAF0Uk5TAEDm2GYAAAAOSURBVHjaYmBAAQABBgAADwAB1KgyvAAAAABJRU5ErkJggg==" class="placeholder" alt="placeholder"></figure>
                                </div>
                                <div class="entry-thumbnail-cover">
                                  <div class="post-format-gallery"> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-19.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-19.jpg)"></div>
                                    </a> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-05.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-05.jpg)"></div>
                                    </a> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-22.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-22.jpg)"></div>
                                    </a> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-20.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-20.jpg)"></div>
                                    </a> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-21.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-21.jpg)"></div>
                                    </a> <a href="day-of-the-gardens/index.html" class="item fast-load" data-image="http://para.llel.us/themes/caliber/boxed/wp-content/uploads/sites/5/large-sample-image-07.jpg">
                                    <div class="fast-load-img" style="background-image: url(wp-content/uploads/sites/5/large-sample-image-07.jpg)"></div>
                                    </a></div>
                                </div>
                                <div class="author-avatar"> <a href="author/wilson/index.html" title="Posts by Wilson Fisk"> <img src="wp-content/uploads/sites/5/avatar-4-120x120.jpg" width="100" height="100" alt="Wilson Fisk" class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo" /> </a></div>
                              </div>
                              <div class="section-post-content">
                                <header class="entry-header">
                                  <h2 class="entry-title"><a href="day-of-the-gardens/index.html" rel="bookmark">Day of the Gardens</a></h2>
                                </header>
                                <div class="entry-content">
                                  <p> Business plan iPhone stock traction validation non-disclosure agreement. Launch party social media seed money equity rockstar freemium venture mass market seed round supply chain ownership gen-z user experience. Growth hacking series A financing technology alpha startup network effects. Alpha traction &hellip; <br>
                                    <a href="day-of-the-gardens/index.html" rel="bookmark" class="more-link btn btn-default">More <span class="meta-nav">&#8594;</span></a></p>
                                </div>
                                <footer class="entry-meta"> <span class="author vcard"><a href="author/wilson/index.html" title="Posts by Wilson Fisk" rel="author">Wilson Fisk</a></span> <span class="sep">/</span> <span class="posted-on">March 2, 2016</span> <span class="sep">/</span> <span class="comments-link"><a href="day-of-the-gardens/index.html#comments">3 Comments</a></span></footer>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-fixed-width fl-row-bg-none fl-node-56d6799b0cf49 section-wrapper" data-node="56d6799b0cf49">
            <div class="container-wrap">
              <div class="container">
                <div class="fl-col-group fl-node-56eeb1e88be85" data-node="56eeb1e88be85">
                  <div class="fl-col fl-col-small fl-node-56eeb21ac4be2" style="width: 12.03%;" data-node="56eeb21ac4be2">
                    <div class="fl-col-content fl-node-content"></div>
                  </div>
                  <div class="fl-col fl-node-56eeb1e88c65e" style="width: 76%;" data-node="56eeb1e88c65e">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-heading fl-node-56eeb1adb85b1" data-node="56eeb1adb85b1"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fee-heading" style="text-align: center">
                            <p class="pre-heading fee-pre-heading">Brands &amp; Clients</p>
                            <p class="lead fee-lead">Clients ranging from start ups to enterprise and non-profit. These are just a few of the those we've been lucky enough to work with.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fl-col fl-col-small fl-node-56eeb222b17d5" style="width: 11.97%;" data-node="56eeb222b17d5">
                    <div class="fl-col-content fl-node-content"></div>
                  </div>
                </div>
                <div class="fl-col-group fl-node-56d6799b12d09" data-node="56d6799b12d09">
                  <div class="fl-col fl-node-56d6799b134d8" style="width: 100%;" data-node="56d6799b134d8">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-html client-logos fl-node-56d67dfeb2b75" data-node="56d67dfeb2b75"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-html">
                            <div class="row">
                              <div class="col-md-20 col-md-push-2 col-lg-24 col-lg-push-0">
                                <div style="text-align: center; font-size:0;"> <img src="../demo/wp-content/uploads/sites/2/client-logo-02.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-01.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-03.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-11.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-05.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-04.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-07.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-06.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-09.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-08.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-12.png" alt="Client Logo Sample"> <img src="../demo/wp-content/uploads/sites/2/client-logo-10.png" alt="Client Logo Sample"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fl-row fl-row-fixed-width fl-row-bg-photo fl-node-56d67eddba2e0 section-wrapper" data-node="56d67eddba2e0">
            <div class="container-wrap">
              <div class="container">
                <div class="fl-col-group fl-node-56d67eddc1bf7" data-node="56d67eddc1bf7">
                  <div class="fl-col fl-node-56d67eddc23c2" style="width: 100%;" data-node="56d67eddc23c2">
                    <div class="fl-col-content fl-node-content">
                      <div class="fl-module fl-module-html fl-node-56d67ee96e4bc" data-node="56d67ee96e4bc"  data-animation-delay="0.0" >
                        <div class="fl-module-content fl-node-content">
                          <div class="fl-html">
                            <div style="text-align: center; padding: 3% 0 52%;" class="x2 hidden-xs">
                              <h3 class="x2">We are thinkers, makers, finders and dreamers.</h3>
                              <p><br>
                                <a href="../demo/team/index.html" class="btn btn-primary btn-lg" role="button">Meet the Team</a></p>
                            </div>
                            <div style="text-align: center; padding: 0 0 55%;" class="visible-xs-block">
                              <h5>We are thinkers, makers, finders and dreamers.</h5>
                              <p><a href="../demo/team/index.html" class="btn btn-primary" role="button">Meet the Team</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>-->
    <div style="clear:both;"></div>
  </div>
  <footer id="footer" >
    <div class="container-xl">
      <div id="static-content-69" class="static-content ">
        <div class="row">
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12"> <small>Salty Dog, Inc.<br>
            Copyright © <?=date('Y');?>
            </small></div>
          <div class="col-md-12 text-right"> <a href="https://twitter.com/parallelus" target="_blank" rel="nofollow"><i class="fa fa-lg fa-twitter"></i></a> <a href="https://www.facebook.com/pages/Parallelus/197911100259679" target="_blank" rel="nofollow"><i class="fa fa-lg fa-fw fa-facebook"></i></a> <a href="https://plus.google.com/u/0/b/106678036607447578802/106678036607447578802/posts" target="_blank" rel="nofollow"><i class="fa fa-lg fa-fw fa-google-plus"></i></a> <a href="https://www.youtube.com/user/parallelusinc/" target="_blank" rel="nofollow"><i class="fa fa-lg fa-fw fa-youtube-play"></i></a></div>
        </div>
      </div>
    </div>
  </footer>
</div>
<script type="text/javascript" defer src="js/autoptimize_b24397e0a1d634fb6c5f63e2e903fe1e.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.easytabs.min.js"></script>	
<script src="js/jquery.sticky.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.zflickrfeed.min.js"></script>
<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/classie.js"></script>
<script src="js/search.js"></script>
<script src="js/gizmo.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<!-- Dynamic page generated in 0.720 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-05-23 12:47:51 -->

<!-- Compression = gzip -->
<!-- Localized -->