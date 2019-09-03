<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->
<meta property="og:url"                content="https://kate-fiedler.com/work/006" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Custom Typography" />
<meta property="og:description"        content="Custom typography-personal projects" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/typography_homepage.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/typography_homepage.jpg" />
<meta name="twitter:image:alt"         content="Custom typography to show typography skills">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<!-- BEGIN NAVIGATION -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>
<!-- END NAVIGATION -->

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
                        <a data-fancybox="gallery" href="../../assets/images/work/cold_typography@2x.jpg"><img src="../../assets/images/work/cold_typography.jpg"></a>
                
                    </div>
                    <!-- BEGIN PROJECT NAME -->
                    <div class="col-12">
                         <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <!-- END PROJECT NAME -->
                    <!-- BEGIN PROJECT BRIEF -->
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Medium:</b> Adobe Illustrator</p>
                        <p itemprop="description"><b>Category:</b> Typography</p><br/>
                        <p itemprop="articleBody"> Typography became one of my favorite things to design when I was starting out as a designer. The art of typography is a tough one, and I find a simple pleasure into making something close to perfect when it comes to lettering. Enjoy some of my personal type projects that I either make just because, or it's for my Insta.    </p><br/>
                        <a class="text-btn-3" href="https://www.instagram.com/katefiedlerdesign/" target="_blank">My design Insta page!</a>
                    </div>
                    <!-- END PROJECT NAME -->

                    <!-- BEGIN ADDITIONAL IMAGES ---- make sure images when small are 550x367-->
                    
                    <div class="col-12 margin-bottom-20">
                        <div class="row">
                        <!-- SECONDARY IMAGES -->
                        <div class="col-12 margin-bottom-20">
                            <a data-fancybox="gallery" href="../../assets/images/work/layes_typography@2x.jpg"><img src="../../assets/images/work/layes_typography@2x.jpg"></a>
                                
                    </div>
                    
                    
                    
                    
                    
                        <!-- END IMAGE ZOOM -->
                        
                    
                    
                    
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