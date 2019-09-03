<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->
<meta property="og:url"                content="https://kate-fiedler.com/work/004" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Jilly's Socks Rebrand" />
<meta property="og:description"        content="A branding project for a local sock store" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/jillys_fulllogo.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/jillys_fulllogo.jpg" />
<meta name="twitter:image:alt"         content="Branding for local sock store in Lincoln, Nebraska">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<!-- BEGIN NAVIGATION -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>
<!-- END NAVIGATION -->

<!-- Grabs the title for the project from /partials/portfolionav.php. Update the title there and switch out so $nameXXX is the correct corrisponding number-->
<?php $thisName =  $name005; ?> 

<!-- BEGIN PORTFOLIO BODY -->
<div itemscope itemtype="http://schema.org/NewsArticle" class="section-sm pt-lg">
    <!-- BEGIN SCHEMA ITEMSCOPES -->
    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://kate-fiedler.com"/>
    <!--change the following line to your hero image URL. use the actual URL and not the ../../assets one -->
    <meta itemprop="image" content="https://kate-fiedler.com/assets/images/work/jillys_fulllogo.jpg">
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
                        <a data-fancybox="gallery" href="../../assets/images/work/jillys_fulllogo@2x.jpg"><img src="../../assets/images/work/jillys_fulllogo.jpg"></a>
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
                        <p itemprop="description"><b>Category:</b> Branding, Logo Design</p><br/>
                        <p itemprop="articleBody"> Jilly's Socks 'N Such is a local sock store in Lincoln, Nebraska. Jilly's offers women's, men's, and kid's socks, accessories, gifts and antiques. The logo design of the name Jilly's was designed with a fun and quirky hand lettered type that represents the uniqueness of the store. The color represents the baby blue tissue paper that they use when wrapping socks for their customers. It's simple and different, and it embodies what this sock store has to offer.   </p><br/>
                        <a class="text-btn-3" href="https://jillyssocks.com/" target="_blank">jillyssocks.com</a>
                    </div>
                    <!-- END PROJECT NAME -->

                    <!-- BEGIN ADDITIONAL IMAGES ---- make sure images when small are 550x367-->
                    <div class="col-12 col-md-6  pt-2">
                        <!-- BEGIN IMAGE ZOOM --- <a> is the big image (@2x), img is the small image -->
                        <a data-fancybox="gallery" href="../../assets/images/work/jillyslogo_tote@2x.jpg"> 
                            <img src="../../assets/images/work/jillyslogo_tote.jpg" alt="screenprinted jilly's socks totebag" /> 
                        </a>
                        <!-- END IMAGE ZOOM -->
                        
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                         <a data-fancybox="gallery" href="../../assets/images/work/jillys_sticker@2x.jpg"> 
                            <img src="../../assets/images/work/jillys_sticker.jpg" alt="Jillys logo stickers" />
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