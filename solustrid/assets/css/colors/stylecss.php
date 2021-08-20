<?php
function solustrid_main_color() {
    $solustrid_options = solustrid_options();
    $color_one_settings = $solustrid_options['color_one_settings']['rgba'];
ob_start();
?>
a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top .info-list li .icon {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top .top-left .social-links li a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-header .search-box-outer .dropdown-menu {
    border-top-color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li:hover > a, .main-menu .navigation > li.current > a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
#solustrid .btn-style-two {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li:hover > a, .main-menu .navigation > li.current > a, .main-menu .navigation > li.current-menu-item > a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li > ul > li:hover > a {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block-five .link-box a {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.projects-section .projects-carousel .image-carousel .content-column .read-more {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.scroll-to-top:hover {
    background: <?php echo esc_attr($color_one_settings); ?>;
}
.news-widget-block .widget-inner h3 a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.fact-counter .count-outer .count-text {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box:hover .arrow {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box:hover {
    border-color: <?php echo esc_attr($color_one_settings); ?>;
}
.list-style-one li:before {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block-two .inner-box .lower-content h3 a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.projects-section .projects-carousel .thumbs-carousel .owl-nav .owl-prev:hover, .projects-section .projects-carousel .thumbs-carousel .owl-nav .owl-next:hover {
    border-color: <?php echo esc_attr($color_one_settings); ?>;
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-section-two .owl-nav .owl-prev:hover, .services-section-two .owl-nav .owl-next:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box .arrow {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.sec-title h2:before {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.fact-counter .count-outer {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.sticky-header .main-menu .navigation > li:hover > a, .sticky-header .main-menu .navigation > li.current > a, .sticky-header .main-menu .navigation > li.current-menu-item > a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-seven .link-box a {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-seven .link-box a {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-categories li.active a, .services-categories li a:hover {
    border-color: <?php echo esc_attr($color_one_settings); ?>;
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.brochures .brochure-btn:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.brochures .brochure-btn span {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block .inner-box .icon-box {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.sidebar-title {
	border-left: 5px solid <?php echo esc_attr($color_one_settings); ?>;
}
.btn-style-two {
	background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.support-widget .icon {
	color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-detail .inner-box .lower-content .title-box h2:before {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-detail .inner-box .lower-content .text h3:before {
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
<?php
$solustrid_custom_css = ob_get_clean();
    return $solustrid_custom_css;
}