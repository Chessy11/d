<?php
function solustrid_main_color() {
    global $solustrid_options;
    $solustrid_options = solustrid_options();
    $color_one_settings = $solustrid_options['color_one_settings']['rgba'];
    $color_two_settings = $solustrid_options['color_two_settings']['rgba'];
    $color_header_top_settings = $solustrid_options['color_header_top_settings']['rgba'];
    $color_foter_bg_settings = $solustrid_options['color_foter_bg_settings']['rgba'];
ob_start();
?>

.main-header .header-top .top-left .text:before{
    background-color: <?php echo esc_attr($color_header_top_settings); ?> ;
}
.main-footer{
    background-color: <?php echo esc_attr($color_foter_bg_settings); ?>;
}


.main-menu .navigation > li:hover > a,
.main-menu .navigation > li.current > a,
.main-menu .navigation > li.current-menu-item > a{
    opacity:1;
    color: <?php echo esc_attr($color_one_settings); ?>;
}
a{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.btn-style-one{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.btn-style-two{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.btn-style-four:hover{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.btn-style-five:hover{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}

.btn-style-seven{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.list-style-one li:before{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.theme_color{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.scroll-to-top:hover{
    background:<?php echo esc_attr($color_one_settings); ?>;
}

.main-header .header-top .info-list li a{
    color: #ffffff;	
}

.main-header .header-top .info-list li .icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.main-header .header-top .info-list li a:hover .txt{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top .top-left .social-links li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.header-top-two .social-links li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.header-top-two .change-location .location .dropdown-menu{
    border-top:2px solid <?php echo esc_attr($color_one_settings); ?>;
}
.header-top-two .change-location .location .dropdown-menu > li > a:hover{
    background:<?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top-three .info-list li .icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.main-header .header-top-three .info-list li a:hover .txt{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-header .header-top-three .social-links li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li:hover > a,
.main-menu .navigation > li.current > a{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li > ul > li:hover > a{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-menu .navigation > li > ul > li  > ul > li > a:hover{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.header-style-two .main-menu .navigation > li:hover > a,
.header-style-two .main-menu .navigation > li.current > a{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.header-style-two .search-box-btn:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.header-style-two .search-box-outer .dropdown-menu{
    border-top-color: <?php echo esc_attr($color_one_settings); ?>;
}
.header-style-two .outer-box .btn-box .theme-btn:hover{
    background: <?php echo esc_attr($color_one_settings); ?>;
}
.header-style-two .info-outer .info-box .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.header-style-two .info-outer .info-box a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.header-style-three .main-menu .navigation > li:hover > a,
.header-style-three .main-menu .navigation > li.current > a{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.header-style-three .search-box-btn:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.main-header .search-box-outer .dropdown-menu{
    border-top-color: <?php echo esc_attr($color_one_settings); ?>;
}
.sticky-header .main-menu .navigation > li:hover > a,
.sticky-header .main-menu .navigation > li.current > a,
.sticky-header .main-menu .navigation > li.current-menu-item > a{
    opacity:1;
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.page-title .bread-crumb li:before{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.page-title .bread-crumb li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;	
}
.sec-title h2:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}

.fact-counter .count-outer{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.fact-counter .count-outer .count-text{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box:hover{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box .arrow{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block .inner-box:hover .arrow{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-section-two .owl-nav .owl-prev:hover,
.services-section-two .owl-nav .owl-next:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-two .inner-box .lower-content h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-two .inner-box .lower-content .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.quote-section .inner-section{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.projects-section .projects-carousel .image-carousel .content-column .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.projects-section .projects-carousel .thumbs-carousel li:before{
    border-bottom:3px solid <?php echo esc_attr($color_one_settings); ?>;
}
.projects-section .projects-carousel .thumbs-carousel .owl-nav .owl-prev:hover,
.projects-section .projects-carousel .thumbs-carousel .owl-nav .owl-next:hover{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.skill-section .skill-column h2 span{
    border-bottom:1px solid <?php echo esc_attr($color_one_settings); ?>;
}
.skill-section .skill-column h2:before{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.video-link-box .play-box .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.testimonial-block .inner-box .image-outer .quote{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block .inner-box:hover .lower-content{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block .inner-box .lower-content h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block .inner-box .lower-content .arrow{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.news-block .inner-box:hover .lower-content .arrow{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.newsletter-section{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-footer .footer-widget h2:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-widget-block .widget-inner h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.main-footer .footer-bottom .social-links li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.page-banner .bread-crumb li a{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.contact-page-section .info-column .inner-column{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.contact-page-section .info-column .inner-column .social-links li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.contact-form .form-group input[type="text"]:focus,
.contact-form .form-group input[type="password"]:focus,
.contact-form .form-group input[type="tel"]:focus,
.contact-form .form-group input[type="email"]:focus,
.contact-form .form-group select:focus,
.contact-form .form-group textarea:focus{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.sidebar-title{
    border-left: 5px solid <?php echo esc_attr($color_one_settings); ?>;
}

.sidebar .search-box .form-group button,
.error404 .search-box .form-group button
{
    background:<?php echo esc_attr($color_one_settings); ?>;
}
.blog-categories li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.sidebar .popular-posts .post a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.sidebar .popular-tags a:hover{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.support-widget .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.news-block-two .inner-box:hover .lower-content{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block-two .inner-box .lower-content h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block-two .inner-box .lower-content .arrow{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.news-block-two .inner-box:hover .lower-content .arrow{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block-three .inner-box:before{
    background-color:rgba(223,101,18,0.95);
}
.styled-pagination li a:hover,
.styled-pagination li a.active{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-six .inner .icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-three .inner-box .image a:before{
    background: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block-three .inner-box .lower-content h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-three .inner-box .lower-content .read-more:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.services-block-four .inner-box .content-box h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.featured-section .content-box .title:after{
    border-bottom: 1px solid <?php echo esc_attr($color_one_settings); ?>;
}
.featured-section .content-box .slide-item h3 a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.featured-section .content-box .slide-item .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.tabs-style-one .tab-buttons .tab-btn.active-btn .txt:before{
    border-color: <?php echo esc_attr($color_one_settings); ?>;
}
.tabs-style-one .tab-buttons .tab-btn.active-btn .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.tabs-style-one .tab .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.tabs-style-one .tab .read-more:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.what-we-offer .image-column .inner{
    border:12px solid <?php echo esc_attr($color_one_settings); ?>;
}
.play-box-two .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.appointment-form .form-group input:focus,
.appointment-form .form-group textarea:focus,
.appointment-form .form-group select:focus{
    border-color: <?php echo esc_attr($color_one_settings); ?>;
}
.ui-state-active, 
.ui-widget-content .ui-state-active, 
.ui-widget-header .ui-state-active, 
a.ui-button:active, .ui-button:active, 
.ui-button.ui-state-active:hover{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.testimonial-block-one .upper .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.blog-detail .inner-box .lower-content .text blockquote .blockquote-inner .quote-icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.blog-detail .inner-box .lower-content .post-share-options .tags a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.new-article .prev-post a .fas{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.new-article .prev-post a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.new-article .next-post a .fas{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.new-article .next-post a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}

.sidebar-page-container .group-title span:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.sidebar-page-container .comments-area .comment-box .comment-reply-link{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.sidebar-page-container .comments-area .comment-box .theme-btn{
    color:<?php echo esc_attr($color_one_settings); ?>;
} 
.services-categories li.active a,
.services-categories li a:hover{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}

.brochures .brochure-btn span{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.brochures .brochure-btn:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-detail .inner-box .lower-content .title-box h2:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}

.services-detail .inner-box .lower-content .text h3:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}

.about-section-two .content-column .inner-column:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}

.mission-section .content-box h4:before{
    border-right: 60px solid <?php echo esc_attr($color_one_settings); ?>;
}
.accordion-box .block .acc-btn.active .icon-outer{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.faq-section .image-column .image{
    border: 15px solid <?php echo esc_attr($color_one_settings); ?>;
}
.accordion-box.style-two .block .acc-btn.active{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-five:nth-child(2) .inner-box:before{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.team-block .image-box .image{
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}

.team-block .inner-box:hover .lower-content{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}

.team-block .lower-content .arrow{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.team-block .inner-box:hover .lower-content .arrow{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.team-block-two .contact-list li .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.team-block-two .contact-list li a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.team-block-two .inner-box:hover .lower-content{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
}
.team-block-two .lower-content h3 a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.team-block-two .social-links li a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.news-section-two .owl-nav .owl-prev:hover,
.news-section-two .owl-nav .owl-next:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.news-block-four.bg-two .lower-content{
    background: <?php echo esc_attr($color_one_settings); ?>;
}
.design-section .upper-section .content-column .inner-column .icons-box .icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-two:nth-child(2) .inner-box{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.industry-block .inner-box h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.industry-block .inner-box .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.fluid-section-two .left-column .inner-column .read-more{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.fluid-section-two .left-column .inner-column .history-block .inner-block:before{
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.fluid-section-two .left-column .inner-column .history-block .inner-block h3 a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.approach-block h4 a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.what-we-offer.style-two .tabs-style-one .tab ul li:before{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-section-three.style-two .services-block-three .inner-box .lower-content .read-more{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block-five h4 a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.services-block-five .link-box a{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-six .inner-box:hover .icon-box .icon{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-six h5 a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.feature-block-seven .link-box a{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.quotetext .inner-box  blockquote .blockquote-inner .quote-icon {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_categories li .children a::before{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_categories li a:hover, .widget_archive li a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.widget_widget_latest_posts_tab_1 .post a:hover{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.widget_tag_cloud .tagcloud a:hover{
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.styled-pagination li .page-numbers.current {
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.widget_pages ul li a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_meta ul li a:hover{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_recent_comments ul li{
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_recent_comments ul li:hover a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_rss ul li cite {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.widget_nav_menu ul li a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.footer-column .widget_categories li a:hover , .footer-column .widget_archive li a:hover  {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.footer-column .widget_recent_entries ul li:hover a {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.footer-column .widget_nav_menu ul li a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
blockquote:before {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.page-links .current, .page-links .post-page-numbers:hover {
    border-color:<?php echo esc_attr($color_one_settings); ?>;
    background-color:<?php echo esc_attr($color_one_settings); ?>;
}
.comment-box blockquote .blockquote-inner .quote-icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.nav-links .page-numbers:hover, .nav-links .current {
    border-color: <?php echo esc_attr($color_one_settings); ?>;
    background-color: <?php echo esc_attr($color_one_settings); ?>;
}
.index-blog-detail .nav-previous a .fas {
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.index-blog-detail .nav-previous a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.index-blog-detail .nav-next a .fas {
    color: <?php echo esc_attr($color_one_settings); ?>;
}

.index-blog-detail .nav-next a:hover {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.index-page-detail blockquote .blockquote-inner .quote-icon{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
a.post-edit-link:hover {
    background: <?php echo esc_attr($color_one_settings); ?>;
}
.index-page-detail .comments-area .comment-box .theme-btn{
    color:<?php echo esc_attr($color_one_settings); ?>;
}
.wp-block-separator {
    border-bottom: 2px solid <?php echo esc_attr($color_one_settings); ?>;
}
.sticky_post_icon i.fas.fa-paperclip {
    color: <?php echo esc_attr($color_one_settings); ?>;
}
.sticky_post_area {
    border-bottom: 3px solid <?php echo esc_attr($color_one_settings); ?> !important;
}

.sticky_post_area a.arrow {
    background: <?php echo esc_attr($color_one_settings); ?> !important;
}
.projects-section .projects-carousel .image-carousel .content-column .read-more {
    color: <?php echo esc_attr($color_one_settings); ?>;
}




.btn-style-one:hover{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-three{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-three:hover{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-five{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-six{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-six:hover{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.btn-style-seven:hover{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.main-header .header-top{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.header-top-two .change-location .location > a{
    background:<?php echo esc_attr($color_two_settings); ?>;
}
.header-style-two .header-lower .nav-outer{
    background: <?php echo esc_attr($color_two_settings); ?>;
}
.sec-title h2 {
    color: <?php echo esc_attr($color_two_settings); ?> !important;
}
.sec-title h2:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-block .inner-box{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.services-block .inner-box:before{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-block .inner-box .icon-box{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.fluid-section-one .content-column .signature-box h4{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-section-two{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.projects-section .projects-carousel .image-carousel .content-column .read-more .arrow{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.projects-section .projects-carousel .image-carousel .content-column .read-more:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.clients-section.style-two .owl-dots .owl-dot.active span{
    background: <?php echo esc_attr($color_two_settings); ?>;
    border-color:<?php echo esc_attr($color_two_settings); ?>;
}
.news-block .inner-box .lower-content{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.news-block .inner-box .lower-content h3:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.factory-section .title-box h2{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.subscribe-form .form-group input[type="submit"],
.subscribe-form .submit-btn{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.blog-categories li a{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.support-widget .widget-content{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.news-block-two .inner-box .lower-content{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.news-block-two .inner-box .lower-content h3:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.about-section .left-column .author-name{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-block-six .inner:hover{
    border-color:<?php echo esc_attr($color_two_settings); ?>;
    background:<?php echo esc_attr($color_two_settings); ?>;	
}
.fun-facts-section .count-column .count-outer{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-block-three .inner-box .lower-content .read-more .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.featured-section .content-box .title h2{
    color: <?php echo esc_attr($color_two_settings); ?>;
}

.featured-section .content-box .title:before{
    border-bottom: 1px solid <?php echo esc_attr($color_two_settings); ?>;
}

.featured-section .content-box .slide-item .read-more .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.featured-section .content-box .owl-nav .owl-prev,
.featured-section .content-box .owl-nav .owl-next{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.featured-section .content-box .owl-nav .owl-prev:hover,
.featured-section .content-box .owl-nav .owl-next:hover{
    background: <?php echo esc_attr($color_two_settings); ?>;
    border-color: <?php echo esc_attr($color_two_settings); ?>;
}
.tabs-style-one .tab-buttons .tab-btn.active-btn .txt{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.tabs-style-one .tab .read-more .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.request-quote-section:before{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.newsletter-section-two .title-box h2{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.blog-detail .inner-box .lower-content .content-inner .title-box{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.blog-detail .inner-box .lower-content .content-inner .title-box h2{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.blog-detail .inner-box .lower-content .post-share-options .tags a{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.new-article{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.sidebar-page-container .group-title span{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.sidebar-page-container .group-title span:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.sidebar-page-container .comments-area .comment-box .comment-reply-link .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.sidebar-page-container .comments-area .comment-box .comment-reply-link:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.sidebar-page-container .comments-area .comment-box .theme-btn .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.sidebar-page-container .comments-area .comment-box .theme-btn:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-categories li a{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-detail .inner-box .lower-content .title-box h2{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.services-detail .inner-box .lower-content .title-box h2:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-detail .inner-box .lower-content .text h3{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.title-style-one.style-two h2{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.about-section-two .content-column .inner-column:after{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.mission-section:before{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.mission-section .content-box h4{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.mission-section .content-box h4:before{
    border-left: 20px solid <?php echo esc_attr($color_two_settings); ?>; 
}
.accordion-box .block .acc-btn.active{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.accordion-box.style-two .block .icon-outer{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.feature-block-five .link-box a:hover{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.team-block .lower-content{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.team-block .inner-box:hover .lower-content{
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.team-block-two .lower-content{
    border-bottom:3px solid <?php echo esc_attr($color_two_settings); ?>;
}
.news-section-two{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.industries-section{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.fluid-section-two .outer-container{
    background-color:<?php echo esc_attr($color_two_settings); ?>;
}
.services-section.style-two .services-block .inner-box:hover .icon-box{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.approach-block .icon-box .icon{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.services-block-five .link-box a i{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.services-block-five .link-box a:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.feature-block-six .icon-box .icon{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.feature-block-seven .link-box a i{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.feature-block-seven .link-box a:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.widget_categories li .children .children a::before{
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.widget_categories li a, .widget_archive li a {
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.widget_pages ul li a {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.widget_meta ul li a {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.widget_recent_comments ul li a {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.widget_nav_menu ul li a {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
code {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
.index-page-detail .comments-area .comment-box .comment-reply-link .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.index-page-detail .comments-area .comment-box .comment-reply-link:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}
.index-page-detail .comments-area .comment-box .theme-btn .fas{
    color:<?php echo esc_attr($color_two_settings); ?>;
}

.index-page-detail .comments-area .comment-box .theme-btn:hover{
    color:<?php echo esc_attr($color_two_settings); ?>;
}


 
.skill-section:before {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.main-footer .contact-widget ul li a {
    color: #ffffff;
}
.skills .skill-item .skill-bar .bar-inner .bar{
    background:-webkit-linear-gradient(left, #ffffff, <?php echo esc_attr($color_two_settings); ?>);
    background:-ms-linear-gradient(left, #ffffff, <?php echo esc_attr($color_two_settings); ?>);
    background:-o-linear-gradient(left, #ffffff, <?php echo esc_attr($color_two_settings); ?>);
    background:-moz-linear-gradient(left, #ffffff, <?php echo esc_attr($color_two_settings); ?>);
}
.appointment-form .ui-selectmenu-button.ui-button, .appointment-form .form-group input[type="text"], .appointment-form .form-group input[type="email"], .appointment-form .form-group input[type="tel"], .appointment-form .form-group input[type="url"], .appointment-form .form-group textarea, .appointment-form .form-group select {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.subscribe-form-two .form-group input[type="submit"], .subscribe-form-two .submit-btn {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.fluid-section-two .image-layer:before {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.skill-section:before {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
.feature-block .inner-box .icon-box {
    color: <?php echo esc_attr($color_two_settings); ?>;
}
#solustrid .btn-style-two {
    background-color: <?php echo esc_attr($color_two_settings); ?>;
}
#main-slider-two .btn-style-two {
    background-color: <?php echo esc_attr($color_two_settings); ?> !important;
}
.skills.style-two .skill-item .skill-bar .bar-inner .bar {
    background-image: -ms-linear-gradient(left, #5680CF 0%, <?php echo esc_attr($color_two_settings); ?> 100%);
    background-image: -moz-linear-gradient(left, #5680CF 0%, <?php echo esc_attr($color_two_settings); ?> 100%);
    background-image: -o-linear-gradient(left, #5680CF 0%, <?php echo esc_attr($color_two_settings); ?> 100%);
    background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #5680CF), color-stop(100, <?php echo esc_attr($color_two_settings); ?>));
    background-image: -webkit-linear-gradient(left, #5680CF 0%, <?php echo esc_attr($color_two_settings); ?> 100%);
    background-image: linear-gradient(to right, #5680CF 0%, <?php echo esc_attr($color_two_settings); ?> 100%);
}
.news-block-four .lower-content {
    background: <?php echo esc_attr($color_two_settings); ?>;
}
span.framwork-share-this {
    color: <?php echo esc_attr($color_two_settings); ?>;
}


<?php
$solustrid_custom_css = ob_get_clean();
    return $solustrid_custom_css;
}