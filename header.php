

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 <?php   
wp_head();
?>
</head>
<body <?php body_class(); ?>>
      <!--menu-->

      <div class="container">
        <header>
  
        <h3 class="titre"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h3>
            <?php    
            if(function_exists('the_custom_logo')){
             
              $custom_logo_id =get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id);
}
?>
            <img src="<?php echo $logo[0]?>" class="logo" alt="avatar">
           

         
 
     </header>

     <?php 
 wp_nav_menu(array(
     'menu'  =>'primary',
     'container'  =>'',
     'theme_location' => 'primary',
     'items_wrap' => '<ul id="" class="list">%3$s</ul>'
 )
 );
?>
