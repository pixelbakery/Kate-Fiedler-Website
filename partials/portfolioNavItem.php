    <li>
        <h6 class="heading-uppercase no-margin">
            <a href="<?php echo $arg_URL; ?>" class="<?php 
                            if ($thisProject == $arg_file){ 
                                $thisName = $arg_name;
                                $thisNum = $arg_num;
                                echo 'hyperlink-8'; 
                            }
                            else{ 
                                echo 'hyperlink-5'; 
                            }?> ">
                <?php echo $arg_num . ': ' . $arg_name; ?>
            </a>
        </h6>
    </li>

