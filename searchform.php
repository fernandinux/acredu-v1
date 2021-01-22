<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>

  <select id="category_name" name="category_name">
    <option value="">Todas</option>
    <?php $categories = get_categories();
    foreach ($categories as $key => $category) {?>
      <option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option>
    <?php }?>
  </select>

  <select id="tag" name="tag">
    <option value="">Todas</option>
    <?php $tags = get_tags();
    foreach ($tags as $key => $tag) {?>
      <option value="<?php echo $tag->slug;?>"><?php echo $tag->name;?></option>
    <?php }?>
  </select>

  

  <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>