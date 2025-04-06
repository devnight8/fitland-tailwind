<div class="bg-secondary text-[11px] md:text-xs p-2 text-center text-white">
    <span>با عضویت در فیت لند اولین ارسال را مهمون ما باش :)</span>
</div>
<header class="flex h-28 items-center justify-between container mx-auto p-4">
    <div class="logo">
        <img class="max-w-full w-full" src=" <?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="logo"  />
    </div>
    <div class="search-bar w-[500px] mt-4">
        <form action="" class="bg-gray-100 flex p-2 rounded-xl">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/search-normal.svg' ?>" alt="" />
            <label for="search"></label>
            <input
                type="search"
                name="search"
                id="search"
                placeholder="جستحو"
                class="placeholder:transition-all focus:placeholder:text-secondary w-full outline-none px-4" />
        </form>
    </div>
    <div>
        <button class="bg-secondary hover:bg-gray-900 transition-all px-4 py-2 text-sm text-white rounded-xl">ثبت نام </button>
        <button class="bg-primary hover:bg-orange-400 transition-all px-4 py-2 text-sm text-white rounded-xl">ورود </button>
    </div>
    <div class="menu-mobile md:hidden">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/menu.svg' ?>" alt="" />
    </div>
</header>
