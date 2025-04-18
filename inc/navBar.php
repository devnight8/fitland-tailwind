<nav>
    <ul class="flex items-center justify-center gap-x-5">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
            'items_wrap' => '%3$s',
            'walker' => new Walker_Nav_Menu(),
            'link_before' => '<span class="font-medium text-sm flex items-center gap-x-2 space-x-reverse hover:text-primary transition-all">',
            // 'link_after' => '<span><img src="' . get_template_directory_uri() . '/assets/img/arrow.svg" alt=""></span></span>'
        ));
        ?>
        </li>

    </ul>
</nav>