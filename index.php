
    <?php get_header();?>
    <div id="container">
        <div id="content">
            <div id="destaque">
                <div class="destaque-post">
                    <?php
                        $args = array('post_type'=>'post', 'category_name'=>'destaques', 'offset'=>0, 'showposts'=>1);
                        $my_posts = get_posts( $args );
                    ?>
                    <?php
                        if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );
                    ?>

                        <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                        <div class="destaque-info">
                            <ul>
                                <li class="dest-autor"><?php the_author();?></li>
                                <li class="dest-views"><?php if(function_exists('the_views')) {the_views();}?></li>
                                <li class="dest-coment"><?php comments_number('0','1','%');?></li>
                            </ul>
                        </div><!--FIM DESTAQUE-INFO-->
                        <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>
                        
                    <?php endforeach; ?>
                    <?php endif; ?>

                    <div class="list-dest">
                        <ul>
                        <?php
                            $args = array('post_type'=> 'post', 'category_name'=> 'destaques', 'offset'=>2, 'showposts'=>1);
                            $my_posts = get_posts( $args );
                        ?>
                        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                            <li>
                                <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                                <h2><a href="<?php the_Permalink();?>"><?php the_title();?></a></h2>
                            </li>
                        <?php endforeach;?>
                        <?php endif;?>
                        <div class="clear"></div>

                        <?php query_posts('category_name=destaques&offset=3&showposts=1')?>
                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                            <li>
                                <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                                <h2><a href="<?php the_Permalink();?>"><?php the_title();?></a></h2>
                            </li>
                        <?php endwhile; else:?>
                        <?php endif;?>
                        </ul>
                    </div><!--FIM LIST-DEST-->
                </div><!--FIM DESTAQUE-POST-->
                <div class="destaque-post right">
                        <?php
                            $args = array('post_type'=> 'post', 'category_name'=> 'destaques', 'offset'=>1, 'showposts'=>1);
                            $my_posts = get_posts( $args );
                        ?>
                        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                        <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                        <div class="destaque-info">
                            <ul>
                                <li class="dest-autor"><?php the_author();?></li>
                                <li class="dest-views"><?php if(function_exists('the_views')) {the_views();}?></li>
                                <li class="dest-coment"><?php comments_number('0','1','%');?></li>
                            </ul>
                        </div><!--FIM DESTAQUE-INFO-->
                        <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>
                    <?php endforeach;?>
                    <?php endif;?>

                    <div class="list-dest">
                        <ul>
                        <?php
                            $args = array('post_type'=> 'post', 'category_name'=> 'destaques', 'offset'=>4, 'showposts'=>1);
                            $my_posts = get_posts( $args );
                        ?>
                        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                            <li>
                                <a href="<?php the_Permalink();?>"> <?php the_post_thumbnail();?></a>
                                <h2><a href="<?php the_Permalink();?>"><?php the_title();?></a></h2>
                            </li>
                        <?php endforeach;?>
                        <?php endif;?>

                        <div class="clear"></div>

                        <?php
                            $args = array('post_type'=> 'post', 'category_name'=> 'destaques', 'offset'=>5, 'showposts'=>1);
                            $my_posts = get_posts( $args );
                        ?>
                        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                            <li>
                                <a href="<?php the_Permalink();?>"> <?php the_post_thumbnail();?></a>
                                <h2><a href="<?php the_Permalink();?>"><?php the_title();?></a></h2>
                            </li>
                        <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    </div><!--FIM LIST-DEST-->
                </div><!--FIM DESTAQUE-POST-->
            </div><!--FIM DESTAQUE-->

            <div id="tecnologia">
                <div id="title-tec">
                    <span>TECNOLOGIA</span>
                    <?php
                        $args = array('post_type'=> 'post', 'category_name'=> 'tecnologia', 'offset'=>0, 'showposts'=>2);
                        $my_posts = get_posts( $args );
                    ?>
                    <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                        <div class="post-tec">
                            <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                            <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>
                            <div class="tec-info">
                                <ul>
                                    <li class="tec-autor"><?php the_author();?></li>
                                    <li class="tec-views"><?php if(function_exists('the_views')) {the_views();}?></li>
                                    <li class="tec-coment"><?php comments_number(0, 1,'%');?></li>
                                </ul>
                            </div>
                            <p>
                            <?php the_excerpt(10);?>
                            </p>
                        </div><!--FIM POSTTEC-->
                    <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div><!--FIM TECNOLOGIA-->

            <div id="entreterimento">

    <div id="title-entreterimento">
        <span>ENTRETERIMENTO</span>
    </div>

    <div class="post-entreterimento">
        <a href="#"><img src="<?php bloginfo('template_url');?>/images/post3.jpg" title="" rel="" alt=""></a>
        <h1><a href="#">Lorem ipsum dolor sit amet.</a></h1>

        <div class="info-entreterimento">
            <ul>
                <li class="autor-entreterimento">autor</li>
                <li class="coment-entreterimento">coment</li>            
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dolore officiis cupiditate culpa sunt sapiente voluptatem ipsam soluta deserunt eius delectus voluptatibus eaque dolores nihil sit fugiat a architecto nam qui autem nobis natus, quos modi dolorem. Iusto soluta exercitationem recusandae ad, nam. Itaque architecto, facilis corporis ducimus hic eius in incidunt debitis at praesentium.</p>
        </div>
    </div>

    <div class="post-entreterimento">
        <a href="#"><img src="<?php bloginfo('template_url');?>/images/post3.jpg" title="" rel="" alt=""></a>
        <h1><a href="#">Lorem ipsum dolor sit amet.</a></h1>

        <div class="info-entreterimento">
            <ul>
                <li class="autor-entreterimento">autor</li>
                <li class="coment-entreterimento">coment</li>            
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem ullam, corporis nam. Doloribus veniam sed excepturi, rem fugiat ipsum et in voluptatem provident neque iste voluptatum, perferendis modi corrupti? Animi nisi dolor odio a id quo perspiciatis nam fuga vero hic, nesciunt error aut sit, cumque fugiat ad. Sapiente, totam veritatis quo beatae? Expedita, dicta!</p>
        </div>
    </div>

    <div class="post-entreterimento">
        <a href="#"><img src="<?php bloginfo('template_url');?>/images/post3.jpg" title="" rel="" alt=""></a>
        <h1><a href="#">Lorem ipsum dolor sit amet.</a></h1>
        
        <div class="info-entreterimento">
            <ul>
                <li class="autor-entreterimento">autor</li>
                <li class="coment-entreterimento">coment</li>            
            </ul>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quaerat assumenda doloremque ratione quis, alias. Sint ipsam eveniet delectus necessitatibus, sed iure dolor voluptatibus. Expedita, quisquam! Quam blanditiis dolores, voluptas non, dolorem consectetur, officia facere iste ducimus id mollitia illo saepe! Minima expedita mollitia, dolore eum a perspiciatis numquam, placeat, aperiam veritatis assumenda ex est?</p>
    </div>
</div><!--FIM ENTRETERIMENTO-->
<div id="bloco-esporte-saude">
    <div id="esporte">
        <div id="title-esporte">
            <span>Esportes</span>
        </div>
        <?php
            $args = array('post_type'=> 'post', 'category_name'=> 'esporte', 'offset'=>0, 'showposts'=>1);
            $my_posts = get_posts( $args );
        ?>
        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
        
            <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
            <div class="esporte-info">
                <ul>
                    <li class="esporte-autor"><?php the_author();?></li>
                    <li class="esporte-view"><?php if(function_exists('the_views')) {the_views();}?></li>
                    <li class="esporte-coment"><?php comments_number(0,1,'%');?></li>
                </ul>
            </div>
            <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>

        <?php endforeach;?>
        <?php endif;?>

        <div id="esporte-list">
            <ul>
                <li>
                <?php
                    $args = array('post_type'=> 'post', 'category_name'=> 'esporte', 'offset'=>1, 'showposts'=>1);
                    $my_posts = get_posts( $args );
                ?>
                <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                        <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                        <h2><?php the_title();?></h2>
                    <?php endforeach;?>
                    <?php endif;?>
                </li>
            </ul>
        </div>
    </div><!--FIM ESPORTE-->

    <div id="saude">
        <div id="title-saude">
            <span>Saúde</span>
        </div>
        <?php
            $args = array('post_type'=> 'post', 'category_name'=> 'saude', 'offset'=>0, 'showposts'=>1);
            $my_posts = get_posts( $args );
        ?>
        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
            <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
            <div class="saude-info">
                <ul>
                    <li class="saude-autor"><?php the_author();?></li>
                    <li class="saude-view">Views</li>
                    <li class="saude-coment"><?php comments_number(0,1,'%');?></li>
                </ul>
            </div>
            <h1><a href="<?php the_Permalink?>"><?php the_title();?></a></h1>
        <?php endforeach;?>
        <?php endif;?>
            <div id="saude-list">
                <ul>
                <?php
                    $args = array('post_type'=> 'post', 'category_name'=> 'saude', 'offset'=>1, 'showposts'=>1);
                    $my_posts = get_posts( $args );
                ?>
                <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                    <li>
                        <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                        <h2><?php the_title();?></h2>
                    </li>
                <?php endforeach;?>
                <?php endif;?>
                </ul>
            </div>
    </div><!--FIM SAUDE-->
</div><!--FIM BLOCO ESPORTE-SAUDE-->

<div id="bloco-politica-games">
    <div id="politica">
        <div id="title-politica">
            <span>Política</span>
        </div>
        <?php
            $args = array('post_type'=> 'post', 'category_name'=> 'politica', 'offset'=>0, 'showposts'=>1);
            $my_posts = get_posts( $args );
        ?>
        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>

        
            <a href="<?php the_Permalink()?>"><?php the_post_thumbnail();?></a>
            <div class="politica-info">
                <ul>
                    <li class="politica-autor"><?php the_author();?></li>
                    <li class="politica-view">Views</li>
                    <li class="politica-coment"><?php comments_number(0,1,'%');?></li>
                </ul>
            </div>
            <h1><a href="<?php the_Permalink?>"><?php the_title();?></a></h1>
            <?php endforeach;?>
            <?php endif;?>
            <div id="politica-list">
            
                <ul>
                <?php
                    $args = array('post_type'=> 'post', 'category_name'=> 'politica', 'offset'=>1, 'showposts'=>1);
                    $my_posts = get_posts( $args );
                ?>
                <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                    <li>
                        <a href="<?php the_Permalink()?>"><?php the_post_thumbnail();?></a>
                        <h2><?php the_title();?></h2>
                    </li>
                <?php endforeach;?>
                <?php endif;?>
                </ul>
            </div>
    </div><!--FIM POLITICA-->
    <div id="games">
        <div id="title-games">
            <span>Games</span>
        </div>

        <?php
            $args = array('post_type'=> 'post', 'category_name'=> 'games', 'offset'=>0, 'showposts'=>1);
            $my_posts = get_posts( $args );
        ?>
        <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
            <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
            <div class="games-info">
                <ul>
                    <li class="games-autor"><?php the_author();?></li>
                    <li class="games-view">Views</li>
                    <li class="games-coment"><?php comments_number(0,1,'%');?></li>
                </ul>
            </div><!--games-info-->
            <h1><a href="<?php the_Permalink();?>"><?php the_title();?></a></h1>
        <?php endforeach;?>
        <?php endif; ?>

        <div id="games-list">
            <ul>
                <?php
                    $args = array('post_type'=> 'post', 'category_name'=> 'games', 'offset'=>1, 'showposts'=>1);
                    $my_posts = get_posts( $args );
                ?>
                <?php if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );?>
                    <li>
                        <a href="<?php the_Permalink();?>"><?php the_post_thumbnail();?></a>
                        <h2><?php the_title();?></h2>
                    </li>
                <?php endforeach;?>
                <?php endif; ?>
            </ul>
        </div><!-- fim games list-->
    </div><!--FIM GAMES-->
</div><!--FIM BLOCO POLITICA-GAMES-->


        </div><!--FIM CONTENT-->
    <?php get_sidebar();?>
    </div><!--FIM CONTAINER-->
    
    <?php get_footer();?>


    
    
</body>
</html>