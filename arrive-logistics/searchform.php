<form action="<?php esc_url( home_url() ); ?>" id="searchform" method="get">
    <div id="search-top">
        <input type="text" id="s" class="search-input" name="s" value="<?php the_search_query(); ?>" placeholder="Search" /><input type="submit" class="search-button" value="<?php _e("Search", "arrive-logistics"); ?>" id="searchsubmit" />
    </div>
</form>