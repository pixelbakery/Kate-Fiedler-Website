<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->

<meta property="og:url"                content="https://kate-fiedler.com/work/002" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Parse Software and Development" />
<meta property="og:description"        content="Web design" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/parse_homepage.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/jillys_fulllogo.jpg" />
<meta name="twitter:image:alt"         content="A software and development start up from Lincoln, Nebraksa">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>


<div itemscope itemtype="http://schema.org/NewsArticle" class="section-sm pt-lg">
 <!-- BEGIN SCHEMA ITEMSCOPES -->
    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://kate-fiedler.com"/>
    <!--change the following line to your hero image URL. use the actual URL and not the ../../assets one -->
    <meta itemprop="image" content="https://kate-fiedler.com/assets/images/work/SS19_cover.jpg">
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
            <!-- Sidebar -->
            <div class="col-md-3 d-none d-md-block">
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/portfolioNav.php"); ?>
            </div>
            <!-- Portfolio Content -->
            <div class="col-12 col-md-9">
                <div class="row">
                    <!-- Hero Image -->
                    <div class="col-12 margin-bottom-20">
                        <a data-fancybox="gallery" href="../../assets/images/work/parse_homepagemockup1.jpg"><img src="../../assets/images/work/parse_homepagemockup1.jpg"></a>
                       
                    </div>
                    <!-- Project Name and Brief -->
                    <div class="col-12">
                    <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Medium:</b> Adobe Illustrator, Adobe XD</p>
                        <p itemprop="description"><b>Category:</b> UX design, Web development</p><br/>
                        <p itemprop="articleBody">Parse is a software development company from Lincoln, Nebraska. They wanted a new homepage and portfolio page to show work to potential clients. I then designed the initial web design. I went into this design first thinking of simplicity, modernity, and professionalism that needed to be incorporated. They are a software company, so being straightforward within the design itself was a must. </p><br/>
                        
                    </div>
                    
                    <div class="col-12 margin-bottom-20">
                        <a data-fancybox="gallery" href="../../assets/images/work/parse_toolkit(01).jpg"><img src="../../assets/images/work/parse_toolkit(01).jpg"></a>
                       
                    </div>

                    <!-- Additional Images 550x367-->
                    <div class="col-12 col-md-6  pt-2">
                        <!-- IMAGE ZOOM a is the big image (@2x), img is the small image -->
                        <a data-fancybox="gallery" href="../../assets/images/work/parse_mockup02.jpg"> 
                            <img src="../../assets/images/work/parse_mockup02-small.jpg" alt="UX web design" / class="imageHover"> 
                        </a>
                        <!-- END IMAGE ZOOM -->
                        
                    </div> 
                     <div class="col-12 col-md-6  pt-2">
                         <a data-fancybox="gallery" href="../../assets/images/work/parse_mockup(03).jpg"> 
                            <img src="../../assets/images/work/parse_mockup03(small).jpg" alt="UX web design" />
                        </a>
                    </div>

                    <!-- View More Link -->
                     <div class="col-12">
                        <div class="text-right ">
                            <a class="text-btn-3" href="../">View All Work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php"); ?>
