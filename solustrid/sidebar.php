<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solustrid
 */
if (!is_active_sidebar('sidebar')) {
    return;
}
?>
<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar padding-left">
        <!-- Search -->
        <?php
        dynamic_sidebar('sidebar');
        ?>
    </aside>
</div>