<?php 
/*
    Template Name: Custom Template
*/

add_action("wp_enqueue_scripts", "custom_avis_scripts");
function custom_avis_scripts(){
    wp_enqueue_script("slider", get_template_directory_uri()."/js/slide.js", array( "jquery" ));
    wp_enqueue_style("sliderCSS", get_template_directory_uri()."/slide.css");
}

global $pos;
get_header();
?>

    <div id="slider">
        <button id="prev" class="buttons"><</button>
        <div class="images">
            <?= get_post_slide() ?>
        </div>
        <button id="next" class="buttons">></button>
    </div>

    <?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>

        <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>

            <?php $pos = "colophon-center" ?>

            <div id="primary-sidebar-right" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_right_1' ); ?>

            </div>

            <div id="primary-sidebar-left" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_left_1' ); ?>

            </div>

            <div id="content-center" class="site-content">

                <?php while( have_posts() ){

                    the_post(); 

                    the_title();
                    the_content();

                } ?>

            </div>

        <?php else : ?>

            <?php $pos = "colophon-left" ?>

            <div id="primary-sidebar-left" class="primary-sidebar widget-area" role="complementary">

                <?php dynamic_sidebar( 'home_left_1' ); ?>
                    
            </div>

            <div id="content-left" class="site-content">

                <?php while( have_posts() ){

                    the_post(); 

                    the_title();
                    the_content();

                } ?>

            </div>

            <?php endif; ?>

    <?php elseif ( is_active_sidebar( 'home_right_1' ) ) : ?>

        <?php $pos = "colophon-right" ?>

         <div id="primary-sidebar-right" class="primary-sidebar widget-area" role="complementary">

            <?php dynamic_sidebar( 'home_right_1' ); ?>
                
        </div>

        <div id="content-right" class="site-content">

            <?php while( have_posts() ){

                the_post(); 

                the_title();
                the_content();

            } ?>

        </div>

    <?php else : ?>

        <?php $pos = "colophon" ?>

        <div id="content" class="site-content">

            <?php while( have_posts() ){

                the_post(); 

                the_title();
                the_content();

            } ?>

        </div>

    <?php endif; ?>

    <?php 

        $category = get_categories();

        $posts_of_category_un = new  WP_Query( array( 'category_name' => 'test', "orderby" => 'date' ) );

    ?>

<?php 
get_footer();