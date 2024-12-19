<div class="lg:pl-7">
  <div>
    <h2 class="text-xl text-color2 font-bold font-heading mb-3"><?php lang("Categories"); ?></h2>

    <ul class="space-y-3">
      <?php foreach (get_categories() as $category) : ?>
        <li>
          <a class="text-color3 hover:text-color2 hover:underline flex items-center space-x-1" href="<?php echo get_category_link($category->term_id); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
              <path strokeLinecap="round" strokeLinejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
            </svg>
            <div>
              <?php echo $category->cat_name; ?>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>