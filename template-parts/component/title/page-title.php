<?php

if ( is_home() && ! is_front_page() ){ 
    
    ?>
    <header class="page-title-header">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
    <?php

}