<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="card">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img
      src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
      class="img-fluid"
    />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <a href="#!" class="btn btn-primary">Button</a>
  </div>
</div>
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/042.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/043.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div>
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>