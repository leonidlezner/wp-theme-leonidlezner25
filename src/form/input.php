<div>
  <?php if (key_exists('label', $args) && $args['label']) : ?>
    <label class="block" for="<?php echo $args['id'] ?>"><?php echo $args['label'] ?></label>
  <?php endif; ?>
  <input class="w-full border text-color1 bg-white rounded-md px-3 py-2 border-color4 focus:ring-0 focus:outline-none focus:border-color1 shadow-inner" id="<?php echo $args['id'] ?>" name="<?php echo $args['name'] ?>" value="<?php echo $args['value']; ?>" placeholder="<?php echo $args['placeholder']; ?>" aria-label="<?php echo $args['placeholder']; ?>">
</div>