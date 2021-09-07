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
    $claudiapeve = 'CLAUDIAPEVE';
    $agilewise = 'AGILEWISE';
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
                    if($memberLastName==$claudiapeve){
                    $posType = 'cursosclaudiapeve';
                    }
                    if($memberLastName==$agilewise){
                    $posType = 'cursosagilewise';
                    }
     
    $metadataImageProfile= get_user_meta( $memberID, 'pie_upload_21', true );
    
    // $memberlogin = $memberInfo->user_login;
    // $memberName = $memberInfo->user_email;
    
    // $memberDisplayName = $memberInfo->display_name;
    // $memberNickname = $memberInfo->nickname;
    // $memberFirstName = $memberInfo->first_name;
    
    // $memberDescription = $memberInfo->description;
    
    $memberRole = implode(', ', $memberInfo->roles);
    // $memberLocale = $memberInfo->twitter;
    //echo $memberID;
    // echo $memberlogin;
    // echo $metadataImageProfile;
    // echo $memberDisplayName;
    // echo $memberNickname;
    // echo $memberFirstName;
    // echo $memberLastName;
    // echo $memberDescription;
    // echo $posType;
    //echo $memberRole;
    // echo $memberLocale;

    ?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">B2B - Cliente Empresas</li>
            </ol>
        </nav>
    
    <div style="width:100px; height:100px;box-shadow: 0 2px 10px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;" 
    class="p-3 d-flex align-items-center rounded-circle mt-4 mb-0 mx-auto"> 
        <img src="<?php echo $metadataImageProfile;?>" alt="logo" class="img-fluid" style="width:100px; height:auto;">
    </div> 
    
    <?php
    //el iff para cuando sea colectivo solo muestra empresas de colectivo
    if ($memberLastName==$colectivo){ ?>
        
    <div class="row my-5 w-100">
        <div class="col-sm-5  col-md-2  d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b/?curso=Interbank" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Interbank</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>HIPOS IBK</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Oeschle</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Sitech</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Farmacias Peruanas</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Rimac</p>
            </a>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardb2b" class="w-25">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardb2b" class="text-center">
                <p>Alicorp</p>
            </a>
        </div>
    </div>
    <?php
    } ?>
    
	

<div style="position: absolute;bottom: 0;width: 100%;">
    <?php get_footer(); ?>
</div>