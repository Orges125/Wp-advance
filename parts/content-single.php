<article> id="post-<?php the_ID() ?>" <?php post_class(); ?>>


    <h1><?php the_title(); ?></h1>

        <div class="meta-info">

        <div class="meta-info">
        <p>

            by <span> <?php the_author_posts_link(); ?> </span> 
            <?php if(has_category()) : ?>
                Categories: <span> <?php the_category(', '); ?> </span>
            <?php endif; ?>

            <?php if(has_tag()) : ?>
                Tags: <span> <?php the_tags('', ', '); ?> </span>
            <?php endif; ?>
       </p>
    </div>
    <header>
        
    <div class="content">
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    </div> 
</article>