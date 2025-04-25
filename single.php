<?php get_header(); ?>

<main id="primary" class="site-main py-16">
    <div class="container mx-auto px-4">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-lg overflow-hidden'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail aspect-w-16 aspect-h-9">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>

                <div class="p-8">
                    <header class="entry-header mb-8">
                        <?php
                        // Categories
                        $categories = get_the_category();
                        if ($categories) :
                            echo '<div class="categories mb-4">';
                            foreach ($categories as $category) {
                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-sm mr-2">' . esc_html($category->name) . '</a>';
                            }
                            echo '</div>';
                        endif;
                        ?>

                        <?php the_title('<h1 class="entry-title text-4xl font-bold mb-4">', '</h1>'); ?>

                        <div class="entry-meta text-gray-600 flex items-center space-x-4">
                            <div class="author flex items-center">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full mr-2')); ?>
                                <span><?php the_author(); ?></span>
                            </div>
                            <div class="date">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="reading-time">
                                <i class="far fa-clock mr-2"></i>
                                <?php
                                $content = get_post_field('post_content', get_the_ID());
                                $word_count = str_word_count(strip_tags($content));
                                $reading_time = ceil($word_count / 200); // Assuming 200 words per minute
                                echo $reading_time . ' min read';
                                ?>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content prose max-w-none mb-8">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links mt-8">' . esc_html__('Pages:', 'gyntekbusiness'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <footer class="entry-footer border-t border-gray-200 pt-8">
                        <?php
                        // Tags
                        $tags = get_the_tags();
                        if ($tags) :
                            echo '<div class="tags mb-6">';
                            echo '<h3 class="text-lg font-bold mb-2">Tags:</h3>';
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm mr-2 mb-2 hover:bg-gray-200 transition-colors">' . esc_html($tag->name) . '</a>';
                            }
                            echo '</div>';
                        endif;
                        ?>

                        <?php
                        // Author bio
                        $author_id = get_the_author_meta('ID');
                        $author_bio = get_the_author_meta('description');
                        if ($author_bio) :
                        ?>
                            <div class="author-bio bg-gray-50 p-6 rounded-lg">
                                <div class="flex items-start">
                                    <?php echo get_avatar($author_id, 80, '', '', array('class' => 'rounded-full mr-4')); ?>
                                    <div>
                                        <h3 class="text-lg font-bold mb-2">About <?php the_author(); ?></h3>
                                        <p class="text-gray-600 mb-4"><?php echo esc_html($author_bio); ?></p>
                                        <div class="author-social flex space-x-4">
                                            <?php
                                            $social_links = array(
                                                'twitter' => get_the_author_meta('twitter'),
                                                'linkedin' => get_the_author_meta('linkedin'),
                                                'facebook' => get_the_author_meta('facebook')
                                            );

                                            foreach ($social_links as $platform => $url) {
                                                if ($url) {
                                                    echo '<a href="' . esc_url($url) . '" class="text-gray-400 hover:text-primary transition-colors" target="_blank" rel="noopener noreferrer"><i class="fab fa-' . $platform . '"></i></a>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        // Post navigation
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();

                        if ($prev_post || $next_post) :
                        ?>
                            <nav class="post-navigation mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php if ($prev_post) : ?>
                                    <div class="prev-post">
                                        <span class="text-sm text-gray-500 block mb-2">Previous Post</span>
                                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="text-lg font-semibold hover:text-primary transition-colors">
                                            <?php echo esc_html($prev_post->post_title); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($next_post) : ?>
                                    <div class="next-post text-right">
                                        <span class="text-sm text-gray-500 block mb-2">Next Post</span>
                                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="text-lg font-semibold hover:text-primary transition-colors">
                                            <?php echo esc_html($next_post->post_title); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </nav>
                        <?php endif; ?>
                    </footer>
                </div>
            </article>

            <?php
            // Related posts
            $categories = get_the_category();
            if ($categories) :
                $category_ids = array();
                foreach ($categories as $category) {
                    $category_ids[] = $category->term_id;
                }

                $related_query = new WP_Query(array(
                    'category__in' => $category_ids,
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ));

                if ($related_query->have_posts()) :
            ?>
                    <div class="related-posts mt-16">
                        <h2 class="text-3xl font-bold mb-8">Related Posts</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <?php
                            while ($related_query->have_posts()) : $related_query->the_post();
                            ?>
                                <article class="bg-white rounded-lg shadow-lg overflow-hidden transition-shadow hover:shadow-xl">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" class="block aspect-w-16 aspect-h-9">
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="p-6">
                                        <?php the_title('<h3 class="text-xl font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" class="hover:text-primary transition-colors">', '</a></h3>'); ?>
                                        <div class="text-gray-600 text-sm">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
            <?php
                endif;
            endif;
            ?>

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
