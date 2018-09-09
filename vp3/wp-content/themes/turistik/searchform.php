<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input placeholder="Поиск..." class="search-form__input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <button class="search-form__btn-search" type="submit" id="searchsubmit"><i class="icon icon-search"></i></button>
</form>