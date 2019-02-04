<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php echo get_post_format( $post->ID  ); ?>
        <p>Enjoy this gallery post</p>
        <?php the_title('<h1>', '</h1>' ); ?>

        <div class="byline">
            <p>Author: <?php the_author(); ?></p>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php if (comments_open() ) : ?>

        <?php comments_template(); ?>
    <?php endif; ?>

    </article>
