<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('-',true,right); bloginfo() ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <?php wp_head();?>
</head>
<body>
    <div id="header">
        <div id="header-superior">
            <div id="header-superior-content">
                <div id="header-paginas">
                    <ul>
                        <li><a href="<?php bloginfo('home');?>">Home</a></li>
                        <?php wp_list_pages('title_li=');?>
                    </ul>
                </div><!--FIM HEADER PAGINAS-->

                  <div id="header-social">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/icon-facebook.png" rel="" title=""/> </a>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/icon-google.png" rel="" title=""/> </a>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/icon-twitter.png" rel="" title=""/> </a>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/icon-youtube.png" rel="" title=""/> </a>
                </div><!--FIM HEADER SOCIAL-->
            </div> <!--FIM HEADER SUPERIOR CONTENT-->
        </div><!--FIM HEADER SUPERIOR-->
        <div id="header-content">
            <div id="logo">
                <a href="<?php bloginfo('home');?>">
                   <img src="<?php bloginfo('template_url');?>/images/cnn-logo.svg" rel="" title=""/>
                </a>
            </div><!--FIM LOGO-->
            <div id="search">
                <?php get_search_form();?>
            </div><!--FIM search-->
            <div id="login">
                <ul>
                    <li class="logar"><a href="http://localhost/curso%20wordpress/wp-admin">Login</a></li>
                    <li class="registre"><a href="http://localhost/curso%20wordpress/wp-login.php?action=register">Registre-se</a></li>
                </ul>
            </div><!--FIM login-->
        </div><!--FIM HEADER CONTENT-->
        <div class="clear"></div>
        <div id="nav">
            <div id="nav-content">
                <ul>
                    <?php wp_list_categories('title_li=&hide_empty=0&depth=2&exclude=13');?>
                </ul>
            </div><!--FIM NAV CONTENT-->
        </div><!--FIM NAV-->
    </div>
    <div class="clear"></div>

    <ul>
        
    </ul>