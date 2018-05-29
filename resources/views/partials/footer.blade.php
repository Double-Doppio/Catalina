<footer class="content-info">
  <div class="btn-group footer-buttons">
    <button class="btn btn-prime join"><a href="#join">join us</a></button>
    <button class="btn btn-prime contribute"><a href="#contribute">contribute</a></button>
  </div>
  <ul class="navigation flex-sub-main footer-ul">

    <?php 
    
      $elements = wp_get_nav_menu_items("Home");
      
      foreach ($elements as $element){

        echo '<li><a href="'.$element->url.'">'.$element->title.'</a></li>' ;

      }
    
      ?>
  </ul>

  <ul class="navigation flex-sub-main footer-ul media-ul">

    <?php 
    
      $twitter = get_field("twitter", 8);
      $instagram = get_field("instagram", 8);
      $facebook = get_field("facebook", 8);
      $youtube = get_field("youtube", 8);
      $medium = get_field("medium", 8);
    
    ?>

    <li><a class="media-link" target="_blank" href="<?php echo $twitter; ?>"><img src="@asset('images/twitter_circle.svg')" alt=""></a></li>
    <li><a class="media-link" target="_blank" href="<?php echo $instagram; ?>"><img src="@asset('images/instagram_circle.svg')" alt=""></a></li>
    <li><a class="media-link" target="_blank" href="<?php echo $facebook; ?>"><img src="@asset('images/facebook_circle.svg')" alt=""></a></li>
    <li><a class="media-link youtube-link" target="_blank" href="<?php echo $youtube; ?>"><img src="@asset('images/youtube_circle.svg')" alt=""></a></li>
    <li><a class="media-link" target="_blank" href="<?php echo $medium; ?>"><img src="@asset('images/medium_circle.svg')" alt=""></a></li>

  </ul>

  <div class="flex-3 flex-right">
    <a target="_blank" class="language-link-1" href="<?php echo get_field("spanish_pdf", 8); ?>">Español</a>
    <a target="_blank" class="language-link-2" href="<?php echo get_field("mandarin_pdf", 8); ?>">Mandarin</a>
  </div>

  <div class="footer-text">

    <p>Creative Team: <a href="">Theresa Canning-Zast</a> & <a href="">Cybele Grandjean</a></p>
    <p>Site by <a href="area-of-practice.com">Area-of-Practice.com</a></p>
    <p>Development by <a href="">Teekay</a></p>
    <p>Photos by <a href="">Jason Falchook</a></p>
  
  </div>

</footer>
