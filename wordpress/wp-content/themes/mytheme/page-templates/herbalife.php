<?php
/* template name: herbalife */
?>
<?php get_header();?>
<div class="container diagonal-gradient">
        <header class="container-header">
            <nav class="nav-principal">
                <div class="nav-element nav-logo">
                    Eatly
                </div>
                <div class="nav-element nav-menu">
                    <ul>
                        <li class="link">Programs</li>
                        <li class="link">Services</li>
                        <li class="link">News</li>
                        <li class="link">About Us</li>
                    </ul>
                </div>
                <div class="nav-element nav-btns">
                    <div class="link btn-yellow">Let's Talk</div>
                </div>
            </nav>
            <div class="header-contain">
                <div class="header-main">
                    <h1>
                        <?php
                        the_field('titular');
                        ?>
                    </h1>
                    <p><?php
                    the_field("add_description");
                    ?></p>
                    <div class="header-main__links">
                        <div class="link header-main__links-btn btn-yellow">
                            Explore Menu
                        </div>
                        <div class="link header-main__links-btn btn-watch">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/play.svg" alt="">
                            <span> Watch Video</span>
                        </div>
                    </div>
                </div>
    
                <div class="header-img">
                    <?php $image = get_field('title_img'); 
	                echo "<img src=".$image['url']." alt=".$image['alt']." />";
                    ?>
                </div>
            </div>
        </header>
        <div class="header-footer">
            <div class="container-header container-header__footer">
                <img class="header-footer__img" src="<?php bloginfo('template_url'); ?>/assets/images/descarga.png" alt="">
                <img class="header-footer__img" src="<?php bloginfo('template_url'); ?>/assets/images/herbalife.png" alt="">
            </div>
        </div>
    </div>
<?get_footer();?>