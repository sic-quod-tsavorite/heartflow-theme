<!DOCTYPE html>
<html id="top" lang="en">

<head>
    <meta charset=" <?php bloginfo("charset") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Flow Foreningen: Meditation og indre ro</title>
    <?php wp_head() ?>

</head>

<body>

    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/heartflow.svg" alt="heartflow logo" width="334.29" height="98.91" />
    </a>

 
 

  <div id="menuToggle">
      <input type="checkbox" />
      <div id="burgermenu">Menu</div>
      <ul id="menu">
      <a href="<?php echo esc_url(home_url('/')); ?>" ><li>Forside</li></a>    
      <hr>   
      <a href="<?php echo esc_url(home_url('/begivenheder'));?>"><li>Begivenheder</li></a>
      <hr>
      <a href="<?php echo esc_url(home_url('/om-os')); ?>"><li>Om Os</li></a>  
      <hr>
      <a href="<?php echo esc_url(home_url('/donation'));?>"><li>Fri Donation</li></a> 
      <hr>           
      <a href="<?php echo esc_url(home_url('/kontakt'));?>"><li>Kontakt</li></a>       

      </ul>
    </div>

    
    <?php
    wp_nav_menu(array("theme_location" => "header-menu"))
    ?>