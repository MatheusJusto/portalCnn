
        <?php get_header();?>
        <div id="container">
            <div id="content">
                <div class="main-category">
                    <div class="title-category"><span><?php single_cat_title();?></span></div>
                    
                    
                    <ul>
                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                        <li>
                            <a href="<?php the_Permalink?>"><?php the_post_thumbnail();?></a>
                            <span>Visualizações <?php if(function_exists('the_views')) { the_views();}?> | Comentários <?php comments_number(0,1,'%');?> </span>
                            <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>
                            <p><?php the_excerpt();?><a href="<?php the_Permalink();?>">Ler mais</a></p>
                        </li>
                        <?php endwhile; else:?>
                        <?php endif;?>
                    </ul>
                    <div class="list-post">
                        <?php wp_pagenavi();?>
                    </div>
                    
                </div>
            </div><!--FIM CONTENT-->
        <?php get_sidebar();?>
        </div><!--FIM CONTAINER-->
        <?php get_footer();?>
    </body>
</html>