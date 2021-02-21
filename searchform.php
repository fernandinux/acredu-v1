<!-- <form role="search" method="get" class="search-form" action="<?php //echo home_url( '/' ); ?>">  -->
  <!-- <label> -->
    <!-- <span class="screen-reader-text"><?php //echo _x( 'ID credential:', 'label' ) ?></span> -->
    <!-- <input type="search" 
    class="search-field" 
    placeholder="<?php //echo esc_attr_x( 'ID Credential', 'placeholder' ) ?>" 
    value="<?php //echo get_search_query() ?>" 
    name="s" 
    title="<?php //echo esc_attr_x( 'Search for:', 'label' ) ?>" /> -->
  <!-- </label> -->

  <!-- <select id="category_name" name="category_name">
    <option value="">Todas</option>
    <?php //$categories = get_categories();
    //foreach ($categories as $key => $category) {?>
      <option value="<?php //echo $category->slug;?>"><?php //echo $category->name;?></option>
    <?php //}?>
  </select>

  <select id="tag" name="tag">
    <option value="">Todas</option>
    <?php //$tags = get_tags();
    //foreach ($tags as $key => $tag) {?>
      <option value="<?php //echo $tag->slug;?>"><?php //echo $tag->name;?></option>
    <?php// }?>
  </select> -->

  

  <!-- <input type="submit" class="search-submit" value="<?php //echo esc_attr_x( 'Verificar', 'submit button' ) ?>" value="<?php //echo get_search_query() ?>"/> -->
<!-- </form> -->

<img src="https://app.acredu.org/wp-content/uploads/2021/02/escudo.jpg" class="img-fluid w-25" alt="verificador" />
<div class="veriText"> <h2>Verifica la validez del certificado</h2> </div>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <!-- ID input -->
  <div class="form-outline mb-4">
    <input type="search" 
    class="form-control" 
    placeholder="<?php echo esc_attr_x( 'ID Credential', 'placeholder' ) ?>"
    value="<?php echo get_search_query() ?>" 
    name="s" 
    require
    />    
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-block" style="background:#1EB478" value="<?php echo esc_attr_x( 'Verificar', 'submit button' ) ?>" value="<?php echo get_search_query() ?>">Verificar</button>
</form>