<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    

    <div class="mt-4 mb-0 mx-auto" style="width:100px; height:100px;"> 
        <img src="https://app.acredu.org/wp-content/uploads/2021/03/logocolectivo23.png" alt="logo" class="img-fluid">
        </div> 


    <div class="row row-cols-1 row-cols-md-3 g-4 p-3">
        
    <?php  
     $memberID = get_current_user_id();
    $memberInfo = get_userdata($memberID);
    $metadatauser= get_user_meta($memberID);
    
    $memberlogin = $memberInfo->user_login;
    $memberName = $memberInfo->user_email;
    $membernicename = $metadatauser->upload_21;
    $memberDisplayName = $memberInfo->display_name;
    $memberNickname = $memberInfo->nickname;
    $memberFirstName = $memberInfo->first_name;
    $memberLastName = $memberInfo->last_name;
    $memberDescription = $memberInfo->description;
    $memberShowAdmin = $memberInfo->show_admin_bar_front;
    $memberRole = $memberInfo->facebook;
    $memberLocale = $memberInfo->twitter;
    echo $memberID;
    echo $memberlogin;
    echo $membernicename;
    echo $memberDisplayName;
    echo $memberNickname;
    echo $memberFirstName;
    echo $memberLastName;
    echo $memberDescription;
    echo $memberShowAdmin;
    echo $memberRole;
    echo $memberLocale;

    ?>

        <?php query_posts(array('post_type' => 'cursoscastudio','orderby' => 'DESC')); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    
        <div class="col my-5" style="max-width:300px">
            <div class="card h-200">

                            <?php the_post_thumbnail('medium', array( 'class' => 'card-img-top h-75' )); ?>                                                          
                                
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="card-text fs-6 text-truncate" style="max-height: 100px">
                                
                                <?php the_content(); ?>
                                </div>
                                <a href="https://app.acredu.org/addlist/?nombre-curso-new=<?php the_title(); ?>" class="btn" style="background:#11af88">Agregar Lista</a>
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
                <a href="https://app.acredu.org/addcurso/" ><i class="far fa-plus-square" style="font-size:10rem;color:#80808059"></i></a>
                <div class="card-body">
                    <h5 class="card-title">Agregar Nuevo Curso</h5>                   
                </div>
            </div>
        </div>
        <!-- card -->
        
  
    </div>
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>