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
    $socialab = 'SOCIALAB';
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
		if($memberLastName==$socialab){
                    $posType = 'cursossocialab';
                    }
     
    $metadataImageProfile= get_user_meta( $memberID, 'pie_upload_21', true );
    
    // $memberlogin = $memberInfo->user_login;
    // $memberName = $memberInfo->user_email;
    
    // $memberDisplayName = $memberInfo->display_name;
    // $memberNickname = $memberInfo->nickname;
     $memberFirstName = $memberInfo->first_name;
    
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

    
    <div style="width:100px; height:100px;box-shadow: 0 2px 10px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;" 
    class="p-3 d-flex align-items-center rounded-circle mt-4 mb-0 mx-auto"> 
        <img src="<?php echo $metadataImageProfile;?>" alt="logo" class="img-fluid" style="width:100px; height:auto;">
    </div> 

    <div class="text-center my-4">
    <p>¡Bienvenid@ a tu sesión, <?php echo $memberFirstName;?>! </p>
    <p>Elige el tipo de certificado: </p>
    </div>

    <div class="row my-5 w-100">
        <div class="col-sm-5  col-md-6  d-flex justify-content-center align-items-center flex-column">
            <a href="/predashboard/?idcat=74&empresa=Colectivo23" style="width: 100px;">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/predashboard/?idcat=90&empresa=Socialab">
                <p>B2C - Clientes Personas</p>
            </a>
        </div>
        <div 
	     style="<?php if($memberLastName==$agilewise){
                    echo "display: none !important;";
                    } ?>"
	     class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 d-flex justify-content-center align-items-center flex-column">
            <a href="/dashboardclient" style="width: 100px;">
                <img src="/wp-content/uploads/2021/09/fileicon.png" class="img-fluid">
            </a>
            <a href="/dashboardclient">
                <p>B2B - Clientes Empresas</p>
            </a>
        </div>
    </div>
	

<div style="position: absolute;bottom: 0;width: 100%;">
    <?php get_footer(); ?>
</div>
