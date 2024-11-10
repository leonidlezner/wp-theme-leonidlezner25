<header class="pb-10 lg:pb-12">
  <div class="bg-color1 relative h-16 lg:h-28 border-b-8 border-color5" x-data="{ open: false }" @click.outside="open = false" @resize.window="open = false">
    <?php get_template_part("src/layout/container", "begin", ['class' => 'h-full']); ?>

    <a href="<?php echo esc_url(home_url("/")); ?>">
      <img src="<?php echo get_image_url("logo.png"); ?>" class="h-20 lg:h-32 absolute top-2 lg:top-3 z-20" alt="<?php bloginfo("name"); ?>" />
    </a>

    <div class="h-full flex items-center justify-end lg:hidden">
      <button class="space-y-[5px] group" @click="open = !open">
        <span class="h-[5px] w-7 bg-color4 group-hover:bg-white block" x-bind:class="open ? 'bg-white' : ''"></span>
        <span class="h-[5px] w-7 bg-color4 group-hover:bg-white block" x-bind:class="open ? 'bg-white' : ''"></span>
        <span class="h-[5px] w-7 bg-color4 group-hover:bg-white block" x-bind:class="open ? 'bg-white' : ''"></span>
      </button>
    </div>

    <div x-cloak class="lg:h-full lg:pl-32 items-center max-lg:flex-col-reverse flex lg:justify-between max-lg:space-y-reverse max-lg:space-y-4 max-lg:bg-color2 max-lg:absolute left-0 right-0 top-14 z-10 max-lg:pt-7" :class="{ 'max-lg:hidden': !open }">
      <div class="max-lg:w-full lg:flex-1">
        <?php wp_nav_menu([
          "theme_location" => "header-menu",
          "fallback_cb" => false,
          "container" => false,
          "menu_id" => "header-menu",
        ]); ?>
      </div>

      <div>
        <form action="<?php echo home_url("/"); ?>" method="get" class="flex mr-3">
          <input class="focus:ring-white focus:bg-color5 focus:ring-2 text-color1 placeholder:text-color1 rounded-md border-none outline-none bg-color4" name="s" value="<?php the_search_query(); ?>" type="text" placeholder="<?php lang("Search"); ?>" aria-label="<?php lang("Search"); ?>" />

          <button type="submit" class="block -ml-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <title><?php lang("Search button"); ?></title>
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </button>
        </form>
      </div>
    </div>

    <?php get_template_part("src/layout/container", "end"); ?>
  </div>
</header>