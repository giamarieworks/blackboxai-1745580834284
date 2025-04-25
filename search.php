<?php get_header(); ?>

<main id="primary" class="site-main py-16">
    <div class="container mx-auto px-4">
        <header class="page-header text-center mb-16">
            <h1 class="text-4xl font-bold mb-4">
                Search Results for: <span class="text-primary"><?php echo get_search_query(); ?></span>
            </h1>
            <div class="search-form max-w-xl mx-auto">
                <?php get_search_form(); ?>
            </div>
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
                                $post_type = get_post_type();
                                $post_type_obj = get_post_type_object($post_type);
                                if ($post_type_obj) :
                                ?>
                                    <span class="post-type inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm mb-2">
                                        <?php echo esc_html($post_type_obj->labels->singular_name); ?>
                                    </span>
                                <?php endif; ?>

                                <?php the_title('<h2 class="entry-title text-xl font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" class="hover:text-primary transition-colors">', '</a></h2>'); ?>

                                <div class="entry-meta text-gray-600 text-sm">
                                    <span class="date">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-summary mb-4">
                                <?php 
                                // Get the excerpt and highlight the search term
                                $excerpt = get_the_excerpt();
                                $search_term = get_search_query();
                                if ($search_term) {
                                    $excerpt = preg_replace('/(' . preg_quote($search_term, '/') . ')/i', '<mark class="bg-yellow-100">$1</mark>', $excerpt);
                                }
                                echo wp_kses_post($excerpt);
                                ?>
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

            <?php if ($wp_query->max_num_pages > 1) : ?>
                <div class="pagination mt-12 text-center">
                    <?php 
                    echo paginate_links(array(
                        'prev_text' => '&larr;',
                        'next_text' => '&rarr;'
                    )); 
                    ?>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <div class="no-results text-center py-16">
                <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                <h2 class="text-2xl font-bold mb-4">No Results Found</h2>
                <p class="text-gray-600 mb-8">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                
                <div class="search-form max-w-xl mx-auto mb-8">
                    <?php get_search_form(); ?>
                </div>

                <h3 class="text-xl font-bold mb-4">Suggestions:</h3>
                <ul class="text-gray-600 space-y-2 mb-8">
                    <li>Check your spelling</li>
                    <li>Try more general keywords</li>
                    <li>Try different keywords</li>
                    <li>Try fewer keywords</li>
                </ul>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                    Back to Homepage
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
