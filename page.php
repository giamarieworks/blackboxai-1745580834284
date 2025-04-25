<?php get_header(); ?>

<main id="primary" class="site-main py-16">
    <div class="container mx-auto px-4">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-lg p-8'); ?>>
                <header class="entry-header mb-8">
                    <?php the_title('<h1 class="text-4xl font-bold mb-4">', '</h1>'); ?>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image mb-8">
                            <?php the_post_thumbnail('full', array('class' => 'w-full h-auto rounded-lg')); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="entry-content prose max-w-none">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links mt-8">' . esc_html__('Pages:', 'gyntekbusiness'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (get_edit_post_link()) : ?>
                    <footer class="entry-footer mt-8 pt-8 border-t border-gray-200">
                        <?php
                        edit_post_link(
                            sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__('Edit %s', 'gyntekbusiness'),
                                the_title('<span class="screen-reader-text">"', '"</span>', false)
                            ),
                            '<span class="edit-link text-primary hover:text-secondary transition-colors">',
                            '</span>'
                        );
                        ?>
                    </footer>
                <?php endif; ?>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
