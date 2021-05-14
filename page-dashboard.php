<?php get_header();?>

<?php 
    $memberID = get_current_user_id();
    $memberInfo = get_userdata($memberID);
    $memberLastName = $memberInfo->last_name;
    $colectivo = 'COLECTIVOXXIII';
    $castudio = 'CASTUDIOXY';
    $proyetech = 'PROYETECHXY';
    $miguels = 'MIGUELSXY';
    $imce = 'IMCEXY';
    $usach = 'USACHXY';
    $wiad = 'WIADXY';
    if ($memberLastName==$colectivo){
         $posType = 'cursoscolectivo';
    //     las variables para cuadno sea colectivo
    }
    if($memberLastName==$castudio){
        $posType = 'cursoscastudio';
   //     las variables para cuadno sea castudio
   }
   if($memberLastName==$proyetech){
    $posType = 'cursosproyetech';
    }
    if($memberLastName==$miguels){
        $posType = 'cursosmiguels';
        }
        if($memberLastName==$imce){
            $posType = 'cursosimce';
            }
            if($memberLastName==$usach){
                $posType = 'cursosusach';
                }
                if($memberLastName==$wiad){
                    $posType = 'cursoswiad';
                    }
    
     
    $metadataImageProfile= get_user_meta( $user_id, 'pie_upload_21', true );
    
    // $memberlogin = $memberInfo->user_login;
    // $memberName = $memberInfo->user_email;
    
    // $memberDisplayName = $memberInfo->display_name;
    // $memberNickname = $memberInfo->nickname;
    // $memberFirstName = $memberInfo->first_name;
    
    // $memberDescription = $memberInfo->description;
    
    // $memberRole = $memberInfo->facebook;
    // $memberLocale = $memberInfo->twitter;
    // echo $memberID;
    // echo $memberlogin;
    // echo $metadataImageProfile;
    // echo $memberDisplayName;
    // echo $memberNickname;
    // echo $memberFirstName;
    // echo $memberLastName;
    // echo $memberDescription;
    // echo $posType;
    // echo $memberRole;
    // echo $memberLocale;

    ?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    
    <div style="width:100px; height:100px;box-shadow: 0 2px 10px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;" 
    class="p-3 d-flex align-items-center rounded-circle mt-4 mb-0 mx-auto"> 
        <img src="<?php echo $metadataImageProfile;?>" alt="logo" class="img-fluid" style="width:100px; height:auto;">
    </div> 

    <div class="row row-cols-1 row-cols-md-3 g-4 p-3">
        

        <?php query_posts(array('post_type' => $posType ,'orderby' => 'DESC', 'posts_per_page' => -1)); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    
        <div class="col my-5" style="max-width:300px">
            <div class="card h-200">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array( 'class' => 'card-img-top h-auto' )); ?>                                                          
                            </a>   
                            <div class="card-body">
                            <p>Código de Curso:</p>
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="card-text fs-6 text-truncate" style="max-height: 100px">
                            <p>Nombre del Curso:</p>    
                                <p><?php the_field('nombrecurso'); ?></p>
                                </div>
                               
                                <a href="https://app.acredu.org/addlist/?nombre-curso-new=<?php the_title(); ?>" class="btn" style="background:#11af88">Agregar Lista</a>
                                <?php if( !(get_post_status() == 'trash') ) : ?>
 
                                <a class="text-danger" onclick="return confirm('¿Esta seguro de borrar el curso  <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link( get_the_ID() ); ?>">Borrar</a>

                                <?php endif; ?>

                            </div>                               
                    <!-- <img
                        src="https://app.acredu.org/wp-content/uploads/2021/03/addCertif.jpg"
                        class="card-img-top"
                        alt="..."
                    /> -->                
            </div>
        </div>
                        <?php endwhile; ?>
                        <?php else:?>
                         <!-- no posts found -->
                       <?php endif; wp_reset_query(); ?>


        
        <!-- card -->
        
        <div class="col my-5" style="max-width:300px">
            <div class="card h-200 text-center py-5">
                <a href="https://app.acredu.org/addcurso/?text-validate=<?php echo $posType ?>" ><i class="far fa-plus-square" style="font-size:10rem;color:#80808059"></i></a>
                <div class="card-body">
                    <h5 class="card-title">Agregar Curso</h5>                   
                </div>
            </div>
        </div>
        <!-- card -->
        
  
    </div>
	
<br>
<br>
<div class="verifooter">
    <?php get_footer(); ?>
</div>