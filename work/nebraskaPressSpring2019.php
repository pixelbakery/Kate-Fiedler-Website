<?php $thisPage = "portfolio"; ?> <!-- Don't Touch, Kate -->
<?php $thisProject = basename(__FILE__, '.php') . '.php'; ?> <!-- Tells the nav which project number this page is. -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->

<meta property="og:url"                content="https://kate-fiedler.com/work/003" />
<meta property="og:type"               content="Print Design" />
<meta property="og:title"              content="University of Nebraska Press Spring 2019 Catalog" />
<meta property="og:description"        content="seasonal catalog" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/work/jillys_fulllogo.jpg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/work/SS19_homepage.jpg" />
<meta name="twitter:image:alt"         content="The Spring 2019 catalog in print">
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
                        <a data-fancybox="gallery" href="../../assets/images/work/SS19_cover.jpg"><img src="../../assets/images/work/SS19_cover.jpg"></a>
                       
                    </div>
                    <!-- Project Name and Brief -->
                    <div class="col-12">
                         <h1 itemprop="headline" class="h3"><?php echo $thisNum .': '. $thisName; ?></h1>
                    </div>
                    <div class="col-12 col-lg-8 margin-bottom-20">
                        <h6 class="heading-uppercase margin-bottom-20 text-underline">Project Brief</h6>
                        <p><b>Medium:</b> Adobe InDesign</p>
                        <p itemprop="description"><b>Category:</b> Catalog Print Design</p><br/>
                        <p itemprop="articleBody">The University of Nebraska Press comes out with their seasonal catalogs twice a year where it features our selected books that we are publishing for that season. These catalogs are sent in the mail, featured at conferences, meetings, and to buyers. The catalog was designed from front to back cover including the inside layout design. </p><br/>
                        <a class="text-btn-3" href="https://issuu.com/katefiedler/docs/ss19_full_hires_87810d56029562" target="_blank">View Catalog On Issuu</a>
                    </div>

                    <!-- Additional Images 550x367-->
                    <div class="col-12 col-md-6  pt-2">
                        <!-- IMAGE ZOOM a is the big image (@2x), img is the small image -->
                        <a data-fancybox="gallery" href="../../assets/images/work/ss19_pg2@2x.jpg"> 
                            <img src="../../assets/images/work/ss19_pg2.jpg" alt="Inside catalog design" / class="imageHover"> 
                        </a>
                        <!-- END IMAGE ZOOM -->
                        
                    </div> 
                     <div class="col-12 col-md-6  pt-2">
                         <a data-fancybox="gallery" href="../../assets/images/work/ss19_pg3@2x.jpg"> 
                            <img src="../../assets/images/work/ss19_pg3.jpg" alt="SS19 UNP Cover design" />
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
