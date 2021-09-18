<?php get_header();

  $memberID = get_current_user_id();
    $memberInfo = get_userdata($memberID);
    $memberLastName = $memberInfo->last_name;
    $memberemail = $memberInfo->user_email;
    $colectivo = 'COLECTIVOXXIII';
    $castudio = 'CASTUDIOXY';
    $proyetech = 'PROYETECHXY';
    $miguels = 'MIGUELSXY';
    $imce = 'IMCEXY';
    $usach = 'USACHXY';
    $wiad = 'WIADXY';
    $claudiapeve = 'CLAUDIAPEVE';
    $agilewise = 'AGILEWISE';
    if ($memberLastName==$colectivo){
         $correoinstitucional = 'lourdes@acredu.co';
    //     las variables para cuadno sea colectivo
    }
?>
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
        <!-- <div class="text-center my-5"> 

        <a href="https://app.acredu.org/wp-content/uploads/2021/03/Plantilla-lista-de-beneficiarios.csv" role="button">
        <img src="https://app.acredu.org/wp-content/uploads/2021/03/1200px-.csv_icon.svg_.png" alt="plantilla csv" style="width:100px" data-pagespeed-url-hash="3348433114" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" class="">
        <div class="btn waves-effect waves-light" style="background-color: #1BB27C">
        <i aria-hidden="true" class="fas fa-download mr-2" style="font-size:12px; background-color:#1BB27C;"></i>Descargar plantilla csv </div></a>
        </div> -->
    <?php //the_content(); ?>

    <!-- Formulario para agregar lista type="hidden" -->
<form action="https://acredu.app/wp-admin/admin-post.php" method="post" class="needs-validation" novalidate>
<input type="hidden" name="action" value="add_lista">
<input type="hidden" name="empresa" value="<?php echo $nameempresa ?>"> 
<input type="hidden" name="curso" value="<?php echo $namecurso ?>">
<input type="hidden" name="idcat" value="<?php echo $idcategory ?>">
<input type="hidden" name="correoinstitucional" value="<?php echo $correoinstitucional ?>">
<input type="hidden" name="memberemail" value="<?php echo $memberemail ?>">
<div class="text-center mb-3">
        <h4>Lista para <strong><?php echo $nameempresa ?></strong> en el curso 
        <strong><?php $printnamecurso=str_replace("+", " ", $namecurso); echo $printnamecurso ?></h4></strong> 
</div>
 <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="namelista" class="form-control" />
    <label class="form-label" for="form6Example3">Nombre de lista</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="date" id="form6Example4" name="fechalista" class="form-control" />
    <label class="form-label" for="form6Example4">Fecha de finalización del curso</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" name="duracionlista" class="form-control" />
    <label class="form-label" for="form6Example5">Duración: 12 sesiones en 48 horas</label>
  </div>
  <!-- google sheet -->
  <div class="form-outline mb-4">
    <input type="url" id="form6Example6" name="uploadlista" class="form-control" />
    <label class="form-label" for="form6Example6">Aquí el enlace de Google Sheet aquí</label>
  </div>

    <div class="col-12">
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="invalidCheck"
          required
        />
        <label class="form-check-label" for="invalidCheck">
          Compartí con ayuda@acredu.org
        </label>
        <div class="invalid-feedback">No compartio con ayuda@acredu.org.</div>
      </div>
    </div>
    </br>
    </br>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-block mb-4" style="background-color: #1BB27C">Enviar para emitir</button>
</form>


</div>
   <script>
   (() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
   </script>
	

<div>
    <?php get_footer(); ?>
</div>