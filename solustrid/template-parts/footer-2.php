          <?php

        $solustrid_options = solustrid_options();
        if (isset($solustrid_options['solustrid-show-footer-logo']) && $solustrid_options['solustrid-show-footer-logo']) {
            $footer_logo_url = $solustrid_options['solustrid-footer-logo']['url'];
        } else {
            $footer_logo_url = FALSE;
        }

     ?>

     <div class="widgets-section">
                <div class="row clearfix">
                    <!--big column-->
                    <div class="big-column col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <?php if ($footer_logo_url && $solustrid_options['solustrid-show-footer-logo']) { ?>
                                        <div class="logo">
                                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                                <img src="<?php echo esc_url($footer_logo_url) ?>" alt="<?php esc_attr_e('Logo', 'solustrid') ?>"/>
                                            </a>
                                        </div>
                                    <?php }
                                    ?>
                                    <?php
                                    if (is_active_sidebar('footer_column_1')) {
                                        dynamic_sidebar('footer_column_1');
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget services-widget">
                                    <?php
                                    if (is_active_sidebar('footer_column_2')) {
                                        dynamic_sidebar('footer_column_2');
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget services-widget">
                                    <?php
                                    if (is_active_sidebar('footer_column_3')) {
                                        dynamic_sidebar('footer_column_3');
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget services-widget">
                                    <?php
                                    if (is_active_sidebar('footer_column_4')) {
                                        dynamic_sidebar('footer_column_4');
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>