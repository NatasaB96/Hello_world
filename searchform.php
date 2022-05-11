<form action="/" method="get">
    <label for="search">Type the keyword: </label>
    <input class="inputSearch" type="text" placeholder="type here" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="searchBtn" type="submit" alt="Trazi" value="submit"/>
</form>