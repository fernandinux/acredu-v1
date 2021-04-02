<nav class="navbar navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="https://acredu.org">
      <img src="https://app.acredu.org/wp-content/uploads/2021/01/Acredu_logo-final.png" alt="" loading="lazy" height="30">
    </a>
    <?php
        if (is_user_logged_in()){
          ?>
              <a class="nav-link btn btn-outline-success btn-sm" 
                  data-mdb-ripple-color="dark" 
                  style="color:#03aa99 ! important; border: 2px solid #03aa99 !important;" 
                  href="https://app.acredu.org/?piereg_logout_url=true">Cerrar sesión</a>
       <?php }
       ?>

  </div>
</nav>