<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->

<meta property="og:url"                content="https://kate-fiedler.com/work/003" />
<meta property="og:type"               content="Art Direction" />
<meta property="og:title"              content="Nebraska Book Festival 2019" />
<meta property="og:description"        content="art direction" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/NBF2019_homepage.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/NBF2019_homepage.jpg" />
<meta name="twitter:image:alt"         content="Nebraska Book Festival artwork">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>


<?php $thisName =  $name003; ?> <!-- Grabs the title for the project from /partials/portfolionav.php. Update the title there and switch out so $nameXXX is the correct corrisponding number-->


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
                        <a data-fancybox="gallery" href="../../assets/images/work/bookfestival_artwork01.jpg"><img src="../../assets/images/work/bookfestival_artwork01.jpg"></a>
                       
                    </div>
                    <!-- Project Name and Brief -->
                    <div class="col-12">
                        <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Medium:</b> Cinema 4D</p>
                        <p itemprop="description"><b>Category:</b> Art Direction</p><br/>
                        <p itemprop="articleBody">The Nebraska Book Festival is held to celebrate Nebraska’s literary heritage and contemporary authors and to stimulate public interest in books, reading, and the written word. Every year the festival has different abstract designs that they use for the event’s theme to help promote the festival in a cool, artsy way. This year I was the Art Director and was responsible for the creative decisions, color choice, initial sketches, and overall look and feel of the design from start to finish.</p><br/>
                    </div>
                    <!-- Additional Images -->
                        <div class="col-12 margin-bottom-20">
                        <img src="../../assets/images/work/bookfestival_process.jpg"> 
                    </div>
    
                        <!-- END IMAGE ZOOM -->
                    <div class="col-12 col-lg-8 margin-bottom-20">
                    <p itemprop="description"><b>The Process:</b>
                    <p itemprop="articleBody">Thinking artsy, cool, and edgy I thought of 2-D, 3-D books being stacked, and on cool looking shelves with funky shapes laying around invoking fun curves and strokes of the design. </p><br/>
    
                    </div>
                    
                    <!-- Additional Images 550x367-->
                    
                    
                    
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
