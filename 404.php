<?php get_header(); ?>

<main id="primary" class="site-main py-20">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto">
            <div class="error-404 mb-8">
                <span class="text-9xl font-bold text-primary">404</span>
            </div>
            
            <h1 class="text-4xl font-bold mb-4">Page Not Found</h1>
            
            <p class="text-xl text-gray-600 mb-8">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary inline-flex items-center justify-center">
                    <i class="fas fa-home mr-2"></i>
                    Back to Homepage
                </a>
                
                <a href="#" onclick="history.back(); return false;" class="btn-secondary inline-flex items-center justify-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </a>
            </div>

            <div class="search-404 max-w-md mx-auto">
                <h2 class="text-xl font-bold mb-4">Try searching for something</h2>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
