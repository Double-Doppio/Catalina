<header class="banner">
  <div class="catWrapper">
    <h3 class="tagLine">DEMOCRAT FOR ASSEMBLY</h3>
    <div class="brandName">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="@asset('images/catalina-logo-fpo.svg')" alt="Catalina logo" /></a>
    </div>
    <div class="btn-group">
      <button class="btn btn-prime"><a href="#join">join us</a></button>
      <button class="btn btn-prime"><a href="#contribute">contribute</a></button>
    </div>
    {{-- <div class="burgerWrapper"> 
      <div class="burger">
        <span></span>
        <span class="ctr-bar"></span>
        <span class="ctr-bar"></span>
        <span></span>  
      </div>
    </div> --}}
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

      {{-- <li>
        <a href="/meet">Meet Catalina</a>
      </li> --}}
    </ul>
    <div class="flex-3 flex-right">
      <a class="language-link-1" href="">Español</a>
      <a class="language-link-2" href="">Mandarin</a>
    </div>
  </nav>
</header>
