<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->
<meta property="og:url"                content="https://kate-fiedler.com/work/001" />
<meta property="og:type"               content="Logo Design" />
<meta property="og:title"              content="Eunice Branding" />
<meta property="og:description"        content="Logo design and branding for Eunice The Label" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/eunice/eunice_homepage02.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/eunice/eunice_homepage02" />
<meta name="twitter:image:alt"         content="Logo Design">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<!-- BEGIN NAVIGATION -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>
<!-- END NAVIGATION -->

<!-- Grabs the title for the project from /partials/portfolionav.php. Update the title there and switch out so $nameXXX is the correct corrisponding number-->
<?php $thisName =  $name001; ?> 

<!-- BEGIN PORTFOLIO BODY -->
<div itemscope itemtype="http://schema.org/NewsArticle" class="section-sm pt-lg">
    <!-- BEGIN SCHEMA ITEMSCOPES -->
    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://kate-fiedler.com"/>
    <!--change the following line to your hero image URL. use the actual URL and not the ../../assets one -->
    <meta itemprop="image" content="https://kate-fiedler.com/assets/images/work/typography_homepage.jpg">
    <!-- ignore all this, you can update the dates though if you want -->
    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
    <meta itemprop="name" content="Katharine Fiedler"></span>
    <meta itemprop="datePublished" content="2019-01-09">
    <meta itemprop="dateModified" content="2019-01-09"/>
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <link src="https://kate-fiedler.com/assets/images/KateFiedler.png"/>
            <meta itemprop="url" content="https://kate-fiedler.com/assets/images/KateFiedler.png">
        </div>
        <meta itemprop="name" content="Kate Fiedler">
    </div>

    <!-- END SCHEMA ITEMSCOPES -->

    <div class="container">
        <div class="row col-spacing-50">
            <!-- BEGIN SIDEBARE -->
            <div class="col-md-3 d-none d-md-block">
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/portfolioNav.php"); ?>
            </div>
            <!-- END SIDEBARE -->
            <!-- BEGIN PORTFOLIO CONTENT -->
            <div class="col-12 col-md-9">
                <div class="row">
                    <!-- Hero Image -->
                    <div class="col-12 margin-bottom-20">
                       <video id='eunice-video' class='video-js vjs-fluid' poster='MY_VIDEO_POSTER.jpg' muted="muted" preload="yes" autoplay="autoplay" loop="loop" data-setup='{}'>
                        <source src='../../assets/videos/eunice_logoanimation.mp4' type='video/mp4'>
                        
                       
                      </video>
                
                    </div>
                    <!-- BEGIN PROJECT NAME -->
                    <div class="col-12">
                          <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <!-- END PROJECT NAME -->
                    <!-- BEGIN PROJECT BRIEF -->
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Medium:</b> Adobe Illustrator, Adobe InDesign, Adobe After Effects</p>
                        <p itemprop="description"><b>Category:</b> Logo Design / Print Design / Package Design</p><br/>
                        <p itemprop="articleBody"> <p>Eunice The Label is a local online store from Lincoln, Nebraska. She specializes in making handmade accessories and sells vintage clothing. Eunice wanted a new, fresh brand image so I updated the logo with a very minimal and relatable design. With the new logo, I also made patterns to be used within package design and printed materials. </p><br/>
                        
                        <a class="text-btn-3" href="https://www.instagram.com/eunicethelabel/" target="_blank">peep eunice the label</a></div><br/>
                        
                    
                
                    <!-- END PROJECT NAME -->

                    <!-- BEGIN ADDITIONAL IMAGES ---- make sure images when small are 550x367-->
                    
                    <div class="col-12 margin-bottom-20">
                        <a data-fancybox="gallery" href="../../assets/images/work/eunice/eunice_logolayout01.jpg"><img src="../../assets/images/work/eunice/eunice_logolayout01.jpg"></a>
                
                    </div>
                    
                    <div class="col-12 margin-bottom-20">
                    <p itemprop="description"><b>Brand colors</b>
                    <p itemprop="articleBody"> <p>Lavender purples and minty greens were chosen as the primary colors for the brand. Warm coral reds were chosen as secondary colors. The chosen shades of black and white are used for overall logotype.  </p><br/> 
                        
                    </div>
                    
                    <div class="col-12 margin-bottom-20">
                        <img src="../../assets/images/work/eunice/eunice_colorpalette02.jpg" alt="">
                    
                    </div>
                    
                    <div class="col-12 margin-bottom-20">
                    <p itemprop="description"><b>Logo and Icon</b>
                    <p itemprop="articleBody"> <p>The logo can be seen laid on top of the brand colors or logo can be changed to a brand color. An “e” icon can be used with a variation as well. Below are examples of brand color variations.   </p><br/> 
                        
                    </div>
                    
                    <!-- Additional Images (full logo) 550x550-->
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/eunice_full01.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/eunice_full02.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/eunice_full03.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/eunice_full04.jpg" alt="">
                    </div>
                
                    
                    <!-- Additional Images (e wordmark) 550x550-->
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/e_wordmark_purple01.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/e_wordmark_purple02.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/e_wordmark_green01.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/eunice/e_wordmark_green02.jpg" alt="">
                    </div>
                    
                    
                    <div class="col-12 margin-bottom-20">
                        <a data-fancybox="gallery" href="../../assets/images/work/eunice/eunice_businesscards01.jpg"><img src="../../assets/images/work/eunice/eunice_businesscards01.jpg"></a>
                
                    </div>
                    
                    
                    <div class="col-12 col-md-6  pt-2">
                        <!-- BEGIN IMAGE ZOOM --- <a> is the big image (@2x), img is the small image -->
                        <a><img src="../../assets/images/work/eunice/eunice_package_mockup01.jpg" alt="eunice package design" /> 
                        </a>
                         
                    </div>
                    
                    <div class="col-12 col-md-6  pt-2">
                        <!-- BEGIN IMAGE ZOOM --- <a> is the big image (@2x), img is the small image -->
                        <a> <img src="../../assets/images/work/eunice/eunice_cards02.jpg" alt="eunice print design" /> 
                        </a>
                        
                       </div>
                    
                    
                     <!-- END ADDITIONAL IMAGES -->

                    <!-- View More Link -->
                     <div class="col-12">
                        <div class="text-right ">
                            <a class="text-btn-3" href="../">View All Work</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTFOLIO CONTENT -->
        </div>
    </div>

</div>
<!-- END PORTFOLIO BODY -->

<!-- BEGIN FOOTER -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php"); ?>
<!-- END FOOTER -->