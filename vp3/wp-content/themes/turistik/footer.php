
<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <ul class="b-menu__list">
                <?  $menu = wp_get_nav_menu_items("Меню");
                foreach ($menu as $value) {?>
                    <li class="b-menu__list__item"><a href="<? echo $value->url;?>" class="b-menu__list__item__link"><? echo $value->title;?></a></li>
                <?}?>
            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?echo get_theme_file_uri();?>/js/main.js"></script>
</body>
</html>