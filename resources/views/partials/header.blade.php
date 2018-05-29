<header class="banner">
  <?php if(is_front_page() && get_field('turn_on')) {

    $newspost = get_field('featured_article',8);
    $caption = get_field('article_caption',8);
    echo '<p class="caption">'.$caption.' <a href="'.$newspost.'">Read</a></p>';

  ?>

  <style>
  
    .home header {
      height: 12.5em;
    }
    .home .wrap {
      padding-top: 12.5em;
    }

    @media screen and (max-width: 768px) {

      .home header {
        height: 7.5em;
      }
      .home .wrap {
        padding-top: 7.5em;
      }

    }
  
  </style>


  <?php } ?>
  <div class="catWrapper">
    <h3 class="tagLine">DEMOCRAT FOR ASSEMBLY</h3>
    <div class="brandName">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="@asset('images/catalina-logo-fpo.svg')" alt="Catalina logo" /></a>
    </div>
    <div class="btn-group">
      <button class="btn btn-prime join"><a href="#join">join us</a></button>
      <button class="btn btn-prime contribute"><a target="_blank" href="<?php echo get_field("actblue", 8); ?>">contribute</a></button>
    </div>
  </div>

  <nav class="flex-container-3">
    <div class="flex-3"></div>
    <ul class="navigation flex-sub-main">

      <?php 
      
        $elements = wp_get_nav_menu_items("Home");

        // print_r($elements)

        foreach ($elements as $element){

          echo '<li><a href="'.$element->url.'">'.$element->title.'</a></li>' ;

        }
      
       ?>

    </ul>
    <div class="flex-3 flex-right">
      <a target="_blank" class="language-link-1" href="<?php echo get_field("spanish_pdf", 8); ?>">Español</a>
      <a target="_blank" class="language-link-2" href="<?php echo get_field("mandarin_pdf", 8); ?>">Mandarin</a>
    </div>
  </nav>

  <div class="mobile-menu">
    <h3 class="tagLine">DEMOCRAT<br>FOR ASSEMBLY</h3>
    <div class="brandName">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="@asset('images/catalina-logo-fpo.svg')" alt="Catalina logo" /></a>
    </div>
    <div class="btn-group">
      <i class="menu-open fa fa-bars"></i>
    </div>
  
  </div>
</header>
