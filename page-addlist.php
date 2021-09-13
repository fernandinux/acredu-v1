<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Cursos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nueva lista</li>
  </ol>
</nav>
<div style="max-width:300px; margin:0px auto 50px auto">
        <div class="text-center my-5"> 

        <a href="https://app.acredu.org/wp-content/uploads/2021/03/Plantilla-lista-de-beneficiarios.csv" role="button">
        <img src="https://app.acredu.org/wp-content/uploads/2021/03/1200px-.csv_icon.svg_.png" alt="plantilla csv" style="width:100px" data-pagespeed-url-hash="3348433114" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" class="">
        <div class="btn waves-effect waves-light" style="background-color: #1BB27C">
        <i aria-hidden="true" class="fas fa-download mr-2" style="font-size:12px; background-color:#1BB27C;"></i>Descargar plantilla csv </div></a>
        </div>
    <?php //the_content(); ?>

    <!-- Formulario para agregar lista  -->
<form action="https://acredu.app/wp-admin/admin-post.php" method="post">
<input type="hidden" name="action" value="add_lista">
<input type="hidden" name="data" value="listaid">
<div class="text-center mb-3">
        <p>cliente Interbank / Curso Growth Hacking</p>
</div>
 <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="name" class="form-control" />
    <label class="form-label" for="form6Example3">Nombre de lista</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" name="fecha" class="form-control" />
    <label class="form-label" for="form6Example4">Fecha de emisión</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" name="emailcopy" class="form-control" />
    <label class="form-label" for="form6Example5">Email al que se copiará el envío</label>
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-block mb-4" style="background-color: #1BB27C">Place order</button>
</form>


</div>
   
	

<div>
    <?php get_footer(); ?>
</div>