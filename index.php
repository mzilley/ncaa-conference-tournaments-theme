<?php
/**
 * The main template file
 *
 * @package NCAA_Conference_Tournaments
 */

get_header();
?>

<div class="content-area">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title screen-reader-text">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                </header>

                <div class="entry-content container">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e( 'No content found.', 'ncaa-conference-tournaments' ); ?></p>
        <?php
    endif;
    ?>
</div>

<?php
get_footer();
