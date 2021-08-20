<?php
$solustrid_options   = solustrid_options();
$header_top          = $solustrid_options['solustrid-header-top'];
$topinfo_text        = $solustrid_options['solustrid-topinfo-text'];
$header_phone        = $solustrid_options['solustrid-header-mobile-phone'];
$header_email        = $solustrid_options['solustrid-header-mobile-email'];
$header_location     = $solustrid_options['solustrid-header-mobile-location'];
$header_quote_button = $solustrid_options['solustrid-quote-button'];
$header_quote        = $solustrid_options['solustrid-get-a-quote'];
$header_quote_url    = $solustrid_options['solustrid-quote-url'];
$header_hour         = $solustrid_options['solustrid-header-mobile-hour'];
?>

<header class="main-header style-five">
	<!--Header Top-->

	<!-- Header Upper -->
	<div class="header-upper">
		<div class="auto-container">
			<div class="inner-container">
				<div class="main-box clearfix">
					<!--Info-->
					<div class="logo-outer">
						<div class="logo">
						<?php
							solustrid_get_header_logo();
						?>
						</div>
					</div>

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
								solustrid_nav_menu()
							?>
						</nav>
						<!-- Main Menu End-->

						<!-- Main Menu End-->
						<div class="outer-box clearfix">
							<!--Search Box-->
							<div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
													<div class="form-group">
														<input type="search" id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_e( 'Search Here', 'solustrid' ); ?>" required>
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- Button Box -->
							<div class="btn-box">
								<a href="<?php echo esc_url( $header_quote_url ); ?>" class="theme-btn btn-style-one"><?php echo esc_html( $header_quote ); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Header Upper-->

	<!-- Sticky Header  -->
	<?php
		sticky_header();
	?>
</header>
