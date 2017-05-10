
        <?php get_header();?>
        <div id="container">
            <div id="content">
                <div class="main-single">
                    <div class="title-single"><span><?php the_title();?></span></div>
                    
                    <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <p><?php the_content();?></p>
                    <?php endwhile; else:?>
                    <?php endif;?>

                    <div class="author">
                        <?php if(function_exists('get_avatar')) { echo get_avatar(get_the_author_email(), '100');}?>
                        <div>
                            <h3><?php the_author_posts_link();?></h3>
                            <p><?php the_author_description();?></p>
                        </div>
                    </div>

                    <div class="comentarios">
                        <?php comments_template();?>
                    </div>
                </div>
            </div><!--FIM CONTENT-->
        <?php get_sidebar();?>
        </div><!--FIM CONTAINER-->
        <?php get_footer();?>
    </body>
</html>