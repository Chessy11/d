<div class="sidebar-widget search-box">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="form-group">
            <input type="search" id="<?php echo esc_attr(uniqid('search-form-')); ?>" class="search-field"
                   placeholder="<?php esc_attr_e('Search Blog...', 'solustrid');?>" value="<?php echo get_search_query(); ?>" name="s" required="required"/>
            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
        </div>
    </form>
</div>