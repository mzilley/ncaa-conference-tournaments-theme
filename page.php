<?php
/**
 * The template for displaying pages
 *
 * @package NCAA_Conference_Tournaments
 */

get_header();
?>

<div class="content-area">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title screen-reader-text">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="entry-content container">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</div>

<?php
get_footer();
