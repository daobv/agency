<header>
    <div class="header-wrap">
        <div class="loginarea">
            <!-- start region -->
            <div class="region region region-header">
                <div id="block-block-12" class="block block-block">
                    <div class="block-content">
                        <ul>
                            <li>
                                <span>800.710.7009</span>
                            </li>
                            <li>
                                <a href="https://admin.advertise.com/ads-webapp/login/loginPage.do" target="_blank">login</a>
                            </li>
                            <li class="login" style="color:#418bb7">
                                connect:
                            </li>
                            <li class="social">
                                <img
                                    src="http://content.advertise.com/sites/all/themes/advertise/images/social_module.jpg"
                                    usemap="#login_social" border="0">
                                <map name="login_social" id="login_social">
                                    <area shape="circle" coords="16,16,13"
                                          href="http://www.facebook.com/advertisedotcom" target="_blank">
                                    <area shape="circle" coords="50,16,13" href="http://twitter.com/Advertisedotcom"
                                          target="_blank">
                                    <area shape="circle" coords="84,16,13"
                                          href="http://www.linkedin.com/company/advertise.com" target="_blank">
                                    <area shape="circle" coords="118,16,13"
                                          href="http://plus.google.com/+Advertisedotcom/" target="_blank">
                                    <area shape="circle" coords="152,16,13" href="http://blog.advertise.com"
                                          target="_blank">
                                </map>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end region -->                </div>
    </div>
    <div class="logo-wrap ">
        <?php dynamic_sidebar('banner-header'); ?>
    </div>
    <div class="megamenu style-homemenu">
        <ul class="lv0">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'items_wrap' => '%3$s'
            ));
            ?>
        </ul>
    </div>
    <div class="home-slider">
        <ul id="slider">
            <li><a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/slide_01.jpg" alt="Google Ad"/>
                </a></li>
            <li><a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/slide_02.jpg"
                                  alt="Facebook Ad"/> </a></li>
            <li><a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/slide_03.jpg" alt="Mobile Ad"/>
                </a></li>
            <li><a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/slide_04.jpg"
                                  alt="SEO Web Design"/> </a></li>
            <li><a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/slide_05.jpg" alt="Marketing"/>
                </a></li>
        </ul>
        <div id="sliderPager">
            <a data-slide-index="0" href="">Quảng Cáo<br/>Google</a>
            <a data-slide-index="1" href="">Quảng Cáo<br/>Facebook</a>
            <a data-slide-index="2" href="">Quảng Cáo<br/>Mobile</a>
            <a data-slide-index="3" href="">Thiết kế Website<br/>chuẩn SEO</a>
            <a data-slide-index="4" href="">Tư vấn Marketing<br/>Online</a>
        </div>
    </div>
</header>

