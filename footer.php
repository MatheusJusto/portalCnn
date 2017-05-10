<?php wp_footer();?>
<div id="footer">
        <div id="footer-content">
            <div id="title-footer"> <img src="<?php bloginfo('template_url');?>/images/cnn-logo.svg" rel="" title=""/></div>
            <div id="footer-sobre">
                <?php query_posts('page_id=14');?>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <div id="title-sobre">
                    <span><?php the_title();?></span>
                </div>
                <p><?php the_excerpt();?><a href="<?php the_Permalink();?>">Leia mais</a></p>
                <?php endwhile; else:?>
                <?php endif;?>
            </div><!--FIM FOOTER SOBRE-->
            <div id="footer-paginas">
                <div id="title-paginas">
                    <span>PÁGINAS</span>
                </div>
                <ul>
                    <li><a href="<?php bloginfo('home');?>">Home</a></li>
                    <?php wp_list_pages('title_li=');?>
                </ul>
               
            </div><!--FIM FOOTER PAGINAS-->
            <div id="footer-recentes">
                <div id="title-recentes">
                    <span>POSTS RECENTES</span>
                </div>
                 <ul>
                    <?php query_posts('offset=0&showposts=5');?>
                    <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <li><a href="<?php the_Permalink?>"><?php the_title();?></a></li>
                    <?php endwhile; else:?>
                    <?php endif;?>
                </ul>
            </div><!--FIM FOOTER RECENTES-->
        </div><!--FIM FOOTER CONTENT-->
        <div id="footer-info">
            <div id="info-content">
                <span>&copy 2017 Matheus Garcia Todos os Direitos Reservados</span>
                <span class="info-right">Desenvolvido por: Matheus Garcia</span>
            </div>
        </div><!--FIM FOOTER INFO-->
    </div><!--FIM FOOTER-->