<?php

if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
    return;
}

if( is_singular() ){

    if( is_singular( 'post' ) ){

        ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div><!-- .post-thumbnail -->
        <?php
    }

}else{
    
    ?>
    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
        <?php
            the_post_thumbnail(
                'post-thumbnail',
                array(
                    'alt' => the_title_attribute(
                        array(
                            'echo' => false,
                        )
                    ),
                )
            );
        ?>
    </a>
    <?php

} // End is_singular().