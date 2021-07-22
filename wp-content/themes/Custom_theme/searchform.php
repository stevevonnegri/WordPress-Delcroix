<form class="search-form" method="get" role="search" action="<?php echo esc_url( home_url('/')) ?>">
    <input name="s" value="<?php echo get_search_query(); ?>" placeholder="Recherche …" class="search-field" type="search">   
    <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
</form>
