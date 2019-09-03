<?php $thisPage = "portfolio";?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php"); ?>
<?php $thumbPath = '../assets/images/projectthumbs/'; ?>

<!--BEGIN OG TAGS : This all tells FB & Twitter how to formulate shares -->

<meta property="og:url"                content="https://kate-fiedler.com" />
<meta property="og:type"               content="Portfolio" />
<meta property="og:title"              content="Design Portfolio" />
<meta property="og:description"        content="" />
<meta property="og:image"              content="https://kate-fiedler.com/assets/images/katefiedler_initials.svg" />
<meta name="twitter:card"              content="https://kate-fiedler.com/assets/images/katefiedler_initials.svg" />
<meta name="twitter:image:alt"         content="">
<meta property="og:site_name"          content="Katharine Fiedler - Visual Designer" />


</head>
<!-- END OG TAGS -->


<?php include("./partials/nav.php"); ?>	


		


<!-- Home section -->
<div class="section-lg">
    <div class="container">
        <div class="row col-spacing-50">
            <div class="col-12 col-lg-10">
                <h6 class="heading-uppercase margin-bottom-20">Hello There!</h6>
                <h1>I'm Kate. Or Katharine. Which ever you prefer.</h1>
                <h4 class="font-weight-light text-black-06">A visual designer based out of Lincoln, Nebraska.</h4>
                <a class="text-btn-3" href="mailto:fiedlerkate@gmail.com" target="_blank">Freelance inquiries</a>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Home section -->

		<!-- Portfolio section -->
		<div class="section-sm no-padding-top">
			<div class="container">
				<div class="row portfolio-wrapper spacing-30">
                    <?php
                    $thumbPath = '../assets/images/projectthumbs/';
                    $workPath = '../work/';
                    foreach($portfolioList as $key => $value) {
                        $arg_num = $key;
                        $arg_name = $value["projectName"];
                        $arg_thumb = $thumbPath . $value["projectThumb"];
                        $arg_URL = $workPath . $value["projectURL"];
                    
                        include($_SERVER['DOCUMENT_ROOT'] . "/partials/portfolioItem.php");
                    }
                    ?>
                   
				</div><!-- end row/portfolio-wrapper -->
                
                
				<!-- button -->
				<div class="text-right margin-top-70">
					<a class="text-btn-3" href="./about">About & Contact</a>
				</div>
			</div><!-- end container -->
		</div>
		<!-- end Portfolio section -->

<?php include("./partials/footer.php"); ?>	