<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );
    $idcategory = get_query_var( 'idcat' );
    $nameempresa = get_query_var( 'empresa' );
    $namecurso = get_query_var( 'curso' );
    ?>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Panel</a></li>
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
<input type="hidden" name="empresa" value=<?php echo $nameempresa ?>>
<input type="hidden" name="curso" value=<?php echo $namecurso ?>>
<input type="hidden" name="idcat" value=<?php echo $idcategory ?>>
<div class="text-center mb-3">
        <h3>Lista para <strong><?php echo $nameempresa ?></strong> en el curso <strong><?php $printnamecurso=str_replace("+", " ", $namecurso); echo $printnamecurso ?></h3></strong> 
</div>
 <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="namelista" class="form-control" />
    <label class="form-label" for="form6Example3">Nombre de lista</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" name="fechalista" class="form-control" />
    <label class="form-label" for="form6Example4">Fecha de finalización del curso</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" name="emaillista" class="form-control" />
    <label class="form-label" for="form6Example5">Email a quien copiar</label>
  </div>
  <!-- google sheet -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example6" name="uploadlista" class="form-control" />
    <label class="form-label" for="form6Example6">Comparte el enlace de Google Sheet aquí</label>
  </div>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-block mb-4" style="background-color: #1BB27C">Enviar para emitir</button>
</form>


</div>
   
	

<div>
    <?php get_footer(); ?>
</div>