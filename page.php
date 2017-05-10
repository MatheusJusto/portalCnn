
        <?php get_header();?>
        <div id="container">
            <div id="content">
                <div class="main-page">
                    <div class="title-page"><span><?php the_title();?></span></div>
                    
                    <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <p><?php the_content();?></p>
                    <?php endwhile; else:?>
                    <?php endif;?>
                </div>
            </div><!--FIM CONTENT-->
        <?php get_sidebar();?>
        </div><!--FIM CONTAINER-->
        <?php get_footer();?>
    </body>
</html>