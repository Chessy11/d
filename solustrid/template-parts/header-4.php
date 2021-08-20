<?php 
    $solustrid_options = solustrid_options();
    $header_top = $solustrid_options['solustrid-header-top'];
    $topinfo_text = $solustrid_options['solustrid-topinfo-text'];
    $header_phone = $solustrid_options['solustrid-header-mobile-phone'];
    $header_email = $solustrid_options['solustrid-header-mobile-email'];
    $header_location = $solustrid_options['solustrid-header-mobile-location'];
    $header_quote_button = $solustrid_options['solustrid-quote-button'];
    $header_quote = $solustrid_options['solustrid-get-a-quote'];
    $header_quote_url = $solustrid_options['solustrid-quote-url'];
    $header_hour = $solustrid_options['solustrid-header-mobile-hour'];
?>
<header class="main-header header-style-two style-four">

    <!-- Header Upper -->
    <?php if ($header_top) { ?>
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo-outer">
                    <div class="logo">
                    <?php
                        solustrid_get_header_logo();
                    ?>
                    </div>
                </div>

                <!--Info-->
                <div class="info-outer clearfix">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-call-in"></span></div>
                        <?php
                            $solustrid_href_string = preg_replace('/\s+/', '', $header_phone);
                        ?>
                        <div class="text">
                            <strong><?php echo esc_html__('Call Us Today', 'solustrid'); ?></strong>
                            <span class="info"><a href="<?php echo esc_url($solustrid_href_string); ?>"><?php echo wp_kses_post($header_phone); ?></a></span>
                        </div>
                    </div>
                    <!--Info Box-->
                    <?php if(!empty($header_hour)){?>
                    <div class="info-box">
                        <div class="icon"><span class="icon-clock"></span></div>
                        <div class="text">
                            <strong><?php echo esc_html__('Working Hours', 'solustrid'); ?></strong>
                            <span class="info"><?php echo wp_kses_post($header_hour); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                    <!--Info Box-->
                    <?php if(!empty($header_location)){?>
                    <div class="info-box">
                        <div class="icon"><span class="icon-home"></span></div>
                        <div class="text">
                            <strong><?php echo esc_html__('C73 Ringer House Lane', 'solustrid'); ?></strong>
                            <span class="info"><?php echo wp_kses_post($header_location); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <?php } ?>
    <!--End Header Upper-->

    <div class="header-lower">
        <div class="auto-container">
            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->      
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>
                    </div>
                    
                    <?php
                        solustrid_nav_menu();
                    ?>
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <form action="<?php echo esc_url(home_url('/')); ?>" method="post">
                            <div class="form-group">
                                <input type="search" id="<?php echo esc_attr(uniqid('search-form-')); ?>" name="s"  value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_e("Search...","solustrid"); ?>" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <?php
    sticky_header();
    ?>
</header>