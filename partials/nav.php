<?php 

    $num_pages = 9; //the number of portfolio pieces you want to generate. MAKE SURE THIS GETS UPDATED OTHERWISE IT'LL EXPLODE
    $i =1;//DON'T TOUCH
        
        // Eunice the Label //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Eunice The Label'; //the name of your portfolio piece
        $$thumb = 'eunice_coral_homepage.jpg'; //this image should be 720x920 px. Updates the home page. Place this image in /assets/images/projectThumbs. This is case sensitive
        $$URL = 'euniceTheLabel.php'; //Be sure to name these approprietly as it affects your SEO. This is case sensitive. They should be in the work folder. I love you.
        $i++;
        
        // Yoni Made //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Yoni Made Co.';
        $$thumb = 'yonimade_homepage_charcoal.jpg';
        $$URL = 'YoniMade.php';
        $i++; //DON'T TOUCH
        
        // NBF 2019 //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Nebraska Book Festival';
        $$thumb = 'NBF2019_homepage.jpg';
        $$URL = 'NebraskaBookFestival2019.php';
        $i++; //DON'T TOUCH
        
        // The Press Spring 2019 //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'The Press Spring 2019';
        $$thumb = 'SS19_homepage.jpg';
        $$URL = 'nebraskaPressSpring2019.php';
        $i++; //DON'T TOUCH
        
        // Jilly's Socks //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Jillys Socks';
        $$thumb = 'jillys_homepage.jpg';
        $$URL = 'jillysSocks.php';
        $i++; //DON'T TOUCH

        // Parse Software//
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Parse Software';
        $$thumb = 'parse_homepage.jpg';
        $$URL = 'parseSoftware.php';
        $i++; //DON'T TOUCH
        

        // The Press Fall 2018 //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'The Press Fall 2018';
        $$thumb = 'FW18_homepage.jpg';
        $$URL = 'nebraskaPressFall2019.php';
        $i++; //DON'T TOUCH

        // Typography //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Typography';
        $$thumb = 'typography_homepage.jpg';
        $$URL = 'typography.php';
        $i++; //DON'T TOUCH
        
        // Type Challenge //
        $name = 'name00' . $i; $thumb = 'thumb00' . $i; $URL = 'URL00' . $i; //DON'T TOUCH
        $$name = 'Type Challenge';
        $$thumb = 'TypeChallenge_homepage.jpg';
        $$URL = 'typechallenge.php';
        $i++; //DON'T TOUCH


// Defining a multidimensional array. KATE DONT TOUCH THIS WITHOUT MY HELP <3
    $portfolioList = array();
    
     for ($x = 0; $x < $num_pages; $x++) {
         $a = 'name00' . ($x + 1);
         $b = 'thumb00' . ($x + 1);
         $c = 'URL00' . ($x + 1);
        
        $portfolioList["00" . ($x + 1)] = ['projectName' => $$a, 'projectThumb' => $$b, 'projectURL' => $$c];
     
    }


?>



<body data-preloader="2">
		
		<header>
			<!-- navbar -->
			<nav class="navbar navbar-absolute-dark"><!-- add 'navbar-dark/navbar-grey/navbar-transparent/navbar-transparent-dark' -->
				<div class="container">
					<a class="navbar-brand" href="../">
						<h5>Katharine Fiedler</h5>
					</a>
					<ul class="nav dropdown-dark"><!-- add 'dropdown-dark/dropdown-grey/dropdown-transparent/dropdown-transparent-dark' -->
						<!-- Basic link -->
						<li class="nav-item">
							<a class="nav-link 
                                      <?php 
                                        if ($thisPage == "portfolio"){ 
                                            echo 'hyperlink-8';
                                        }
                                        else{
                                            echo 'hyperlink-5';
                                        }
                                      ?>" href="../">Portfolio</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link <?php 
                                        if ($thisPage == "about"){ 
                                            echo 'hyperlink-8';
                                        }
                                        else{
                                            echo 'hyperlink-5';
                                        }
                                      ?>" href="../about">About</a>
						</li>
						
					</ul><!-- end nav -->
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
			<!-- end navbar -->
		</header>
    
    		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->
