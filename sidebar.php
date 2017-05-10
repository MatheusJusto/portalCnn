 <div id="sidebar">
            <div id="sidebar-vistos">
                <div id="title-vistos">
                    <span>POSTS MAIS VISTOS</span>
                </div>
                    <?php if(function_exists('get_most_viewed')) :?>
                    <ul>
                        <li>
                            <?php get_most_viewed('post', 5);?>
                        </li>    
                        
                    </ul>
                    <?php endif;?>
            </div><!--FIM VISTOS-->
            <div id="sidebar-colunistas">
                <div id="colunistas">
                    <div id="title-colunistas">
                        <span>COLUNISTAS</span>
                    </div>
                    <div class="colunistas">
                        <ul>
                            <?php $author='1';?>
                            <li>

                                <?php echo get_avatar($author, 70);?>
                                <h1><a href="#"><?php $user_info = get_userdata($author);?><?php echo $user_info->first_name." ". $user_info->last_name. "\n"?></a></h1>
                                <div class="info-colunistas">
                                    <ul class="">
                                        <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/facebook.png"></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/twitter.png"></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/google.png"></a></li>
                                    </ul>
                                </div><!--info colunistas-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--FIM COLUNISTAS-->
            <div id="sidebar-publi">
                <div id="title-publi"><span>PUBLICIDADE</span></div>
                <ul>
                    <li class="publi-maior"></li>
                    <li class="publi-left"></li>
                    <li class="publi-righ"></li>
                </ul>
            </div><!--FIM PUBLICIDADE-->
            <div id="sidebar-coment">
                <div id="title-coment">
                    <span>POSTS MAIS COMENTADAS</span>
                </div>
                <ul>
                
                <?php 
                    $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM {$wpdb->prefix}posts WHERE post_type='post' ORDER BY comment_count DESC LIMIT 0,5");
                    foreach($result as $chave => $post):
                    if($post->comment_count > 0):
                ?>
            
                <li>
                    <span class="coment-number"><?php echo ($chave+1)?></span>
                    <a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title;?> (<?php echo $post->comment_count;?>)</a>
                </li>
                
                <?php
                    endif;
                    endforeach;
                ?>
                </ul>﻿
                
            </div><!--FIM COMENTADAS-->
</div><!--FIM SIDEBAR-->