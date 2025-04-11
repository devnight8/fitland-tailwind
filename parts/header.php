<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body class="bg-bg-body">
    <header class="flex items-center justify-between w-[1280px] my-4 container mx-auto p-4 bg-white rounded-full">
        <div class="logo">
            <img class="max-w-full w-full" src=" <?php echo get_template_directory_uri() . '/assets/img/logo2.png' ?>" alt="logo" />
        </div>
        <div id="navbar">
            <?php get_template_part('inc/navBar'); ?>
        </div>
        <div id="login-btn " class="flex items-center justify-center gap-x-3 space-x-reverse">
            <span class="bg-bg-body rounded-full p-2 "><img class="fill-black stroke-black " src="<?php echo get_template_directory_uri() . '/assets/img/search-normal.svg' ?>" alt=""></span>
            <button id="login" class="bg-primary hover:bg-primary2 hover:text-primary transition-all text-white rounded-full py-2 px-4 ">ورود / ثبت نام</button>
        </div>
    </header>

<?php get_template_part("inc/loginPopUp") ?>