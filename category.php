<?php
global $pos;
get_header();
?>

<?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>

        <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>

            <?php $pos = "colophon-center" ?>

            <div id="primary-sidebar-right" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_right_1' ); ?>

            </div>

            <div id="primary-sidebar-left" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_left_1' ); ?>

            </div>

            <div id="cat-center" class="site-content">

                <?php while( have_posts() ){ ?>

                    <div class="article">

                        <?php 
                            the_post(); 
                            $permalink = get_the_permalink();

                            ?> <a href="<?= $permalink ?>"> <?php the_title(); ?> </a> <?php
                            the_content();
                        ?>

                    </div>

                <?php } ?>

            </div>

        <?php else : ?>

            <?php $pos = "colophon-center" ?>

            <div id="primary-sidebar-left" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_left_1' ); ?>
                    
            </div>

            <div id="cat-left" class="site-content">

                <?php while( have_posts() ){ ?>

                    <div class="article">

                        <?php 
                            the_post(); 
                            $permalink = get_the_permalink();

                            ?> <a href="<?= $permalink ?>"> <?php the_title(); ?> </a> <?php
                            the_content();
                        ?>

                    </div>

                <?php } ?>

            </div>

            <?php endif; ?>

    <?php elseif ( is_active_sidebar( 'home_right_1' ) ) : ?>

        <?php $pos = "colophon-center" ?>

         <div id="primary-sidebar-right" class="primary-sidebar widget-area" role="complementary">

            <?php dynamic_sidebar( 'home_right_1' ); ?>
                
        </div>

        <div id="cat-right" class="site-content">

            <?php while( have_posts() ){ ?>

                <div class="article">

                    <?php 
                        the_post(); 
                        $permalink = get_the_permalink();

                        ?> <a href="<?= $permalink ?>"> <?php the_title(); ?> </a> <?php
                        the_content();
                    ?>

                </div>

            <?php } ?>

        </div>

    <?php else : ?>

        <?php $pos = "colophon-center" ?>

        <div id="cat" class="site-content">

            <?php while( have_posts() ){ ?>

                <div class="article">

                    <?php 
                        the_post(); 
                        $permalink = get_the_permalink();

                        ?> <a href="<?= $permalink ?>"> <?php the_title(); ?> </a> <?php
                        the_content();
                    ?>

                </div>

            <?php } ?>

        </div>

    <?php endif; ?>

<?php 
get_footer();