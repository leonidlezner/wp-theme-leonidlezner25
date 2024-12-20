<footer class="mt-10 border-t-8 border-color4">
    <div class="bg-color1">
        <?php get_template_part("src/layout/container", "begin"); ?>
        <div class="flex-col-reverse items-center md:flex-row md:justify-between flex py-12 space-y-4 md:space-y-0 space-y-reverse">
            <div class="text-color5">Copyright &copy; 2025 by Leonid Lezner</div>
            <div>
                <?php wp_nav_menu([
                    "theme_location" => "footer-menu",
                    "fallback_cb" => false,
                    "container" => false,
                    "menu_id" => "footer-menu"
                ]); ?>
            </div>
        </div>
        <?php get_template_part("src/layout/container", "end"); ?>
    </div>
</footer>