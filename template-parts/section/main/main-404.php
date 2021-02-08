<main id="primary" class="site-main mw1160p center">
    <section class="error-404 not-found">

        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lazy' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lazy' ); ?></p>
                <?php
                
                get_search_form();
                
                ?>
        </div><!-- .page-content -->

    </section><!-- .error-404 -->
</main><!-- #main -->