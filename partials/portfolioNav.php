<h4 class="font-weight-light text-black-06">More Work</h4>
<ul class="list-unstyled">
    
    
    <?php
    //echo $arg_num . ' ' . $arg_URL . ' '. $arg_name . ' ' . $arg_thumb . '</br>';   used for debugging
                    $thisName ='';
                    $thisNum;
                    $thumbPath = '../assets/images/projectthumbs/';
                    $workPath = '../work/';
                    foreach($portfolioList as $key => $value) {
                        $arg_num = $key;
                        $arg_name = $value["projectName"];
                        $arg_thumb = $thumbPath . $value["projectThumb"];
                        $arg_URL = $workPath . $value["projectURL"];
                        $arg_file = $value["projectURL"];
                        include($_SERVER['DOCUMENT_ROOT'] . "/partials/portfolioNavItem.php");
                        
                    }
                    ?>
</ul>