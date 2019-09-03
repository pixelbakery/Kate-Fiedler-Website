<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->

<meta property="og:url"                content="https://kate-fiedler.com/work/007" />
<meta property="og:type"               content="Nebraska Type Challenge" />
<meta property="og:title"              content="Nebraska Type Challenge" />
<meta property="og:description"        content="creatives designing together for fun" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/TypeChallenge_homepage.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/TypeChallenge_homepage.jpg" />
<meta name="twitter:image:alt"         content="Custom typography design">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />
</head>
<!-- END OG TAGS -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/nav.php"); ?>

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
            <!-- Sidebar -->
            <div class="col-md-3 d-none d-md-block">
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/portfolioNav.php"); ?>
            </div>
            <!-- Portfolio Content -->
            <div class="col-12 col-md-9">
                <div class="row">
                    <!-- Hero Image -->
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(1)ampersand.jpg" alt="">
                    </div>
                    <!-- Project Name and Brief -->
                    <div class="col-12">
                         <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Mediums:</b> Adobe Illustrator, Photoshop, After Effects </p>
                        <p itemprop="description"><b>Category:</b> Typography</p><br/>
                        <p itemprop="articleBody">The Nebraska Type Challenge is a collabration that I am apart of with local creatives/designers. For 30 weeks each of us submit a new letter once a week. We started the alphabet backwards, and added additional characters to make it for 30 weeks. We all started with an ampersand and ending it with the letter A. </p><br/>
                    
            
            
                    </div>

                    <!-- Additional Images 550x550-->
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(2)questionmark.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(3)semicolon.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(4)exclamationmark.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(5)letterz.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(6)lettery.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(7)letterx.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(8)letterw.gif" alt="">
                    </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(9)letterv.jpg" alt="">
                     </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(10)letteru.jpg" alt="">
                     </div>
                    <div class="col-12 col-md-6  pt-2">
                        <img src="../../assets/images/work/(11)lettert.jpg" alt="">
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
