<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Info страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?echo get_theme_file_uri();?>/css/libs.min.css">
    <link rel="stylesheet" href="<?echo get_theme_file_uri();?>/css/main.css">
    <link rel="stylesheet" href="<?echo get_theme_file_uri();?>/css/media.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/"><img src="<?echo get_theme_file_uri();?>/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                    <?  $menu = wp_get_nav_menu_items("Меню");
                        foreach ($menu as $value) {?>
                        <li class="nav-list__nav-item"><a href="<? echo $value->url;?>" class="nav-list__nav-item__nav-link"><? echo $value->title;?></a></li>
                        <?}?>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form">
                    <input type="text" placeholder="Поиск..." class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <!-- header_end-->