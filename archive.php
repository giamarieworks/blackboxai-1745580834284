<?php get_header(); ?>

<main id="primary" class="site-main py-16">
    <div class="container mx-auto px-4">
        <header class="page-header text-center mb-16">
            <?php
            if (is_category()) {
                echo '<span class="text-primary text-lg mb-2 block">Category</span>';
                single_cat_title('<h1 class="text-4xl font-bold">', '</h1>');
                the_archive_description('<div class="archive-description text-gray-600 mt-4">', '</div>');
            } elseif (is_tag()) {
                echo '<span class="text-primary text-lg mb-2 block">Tag</span>';
                single_tag_title('<h1 class="text-4xl font-bold">', '</h1>');
                the_archive_description('<div class="archive-description text-gray-600 mt-4">', '</div>');
            } elseif (is_author()) {
                echo '<span class="text-primary text-lg mb-2 block">Author</span>';
                $author_id = get_the_author_meta('ID');
                echo get_avatar($author_id, 120, '', '', array('class' => 'rounded-full mx-auto mb-4'));
                the_author();
                echo '</h1>';
                $author_bio = get_the_author_meta('description');
                if ($author_bio) {
                    echo '<div class="archive-description text-gray-600 mt-4">' . esc_html($author_bio) . '</div>';
                }
            } else {
                the_archive_title('<h1 class="text-4xl font-bold">', '</h1>');
                the_archive_description('<div class="archive-description text-gray-600 mt-4">', '</div>');
            }
            ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-lg overflow-hidden transition-shadow hover:shadow-xl'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block aspect-w-16 aspect-h-9">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                            </a>
                        <?php endif; ?>

                        <div class="p-6">
                            <header class="entry-header mb-4">
                                <?php
                                // Only show categories on category archives
                                if (!is_category()) {
                                    $categories = get_the_category();
                                    if ($categories) {
                                        echo '<div class="categories mb-2">';
                                        foreach ($categories as $category) {
                                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-sm mr-2 mb-2">' . esc_html($category->name) . '</a>';
                                        }
                                        echo '</div>';
                                    }
                                }
                                ?>

                                <?php the_title('<h2 class="entry-title text-xl font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" class="hover:text-primary transition-colors">', '</a></h2>'); ?>

                                <div class="entry-meta text-gray-600 text-sm flex items-center space-x-4">
                                    <?php if (!is_author()) : ?>
                                        <span class="author">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 24, '', '', array('class' => 'rounded-full inline-block mr-2')); ?>
                                            <?php the_author(); ?>
                                        </span>
                                    <?php endif; ?>
                                    <span class="date">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-summary mb-4">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:text-secondary transition-colors">
                                    Read More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="no-results text-center py-16">
                <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                <h2 class="text-2xl font-bold mb-4">No Posts Found</h2>
                <p class="text-gray-600 mb-8">It seems we can't find what you're looking for.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                    Back to Homepage
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
