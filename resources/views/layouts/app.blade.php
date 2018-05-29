<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="mobile-drop">
        <ul class="navigation">

          <?php 
          
            $elements = wp_get_nav_menu_items("Home");

            foreach ($elements as $element){

              echo '<li><a href="'.$element->url.'">'.$element->title.'</a></li>' ;

            }
          
          ?>
        </ul>

        <div class="btn-group">
          <button class="btn btn-prime join"><a href="#join">join us</a></button>
          <button class="btn btn-prime contribute"><a href="#contribute">contribute</a></button>
        </div>

        <div class="pdf-group">
          <a target="_blank" class="language-link-1" href="<?php echo get_field("spanish_pdf", 8); ?>">Español</a>
          <a target="_blank" class="language-link-2" href="<?php echo get_field("mandarin_pdf", 8); ?>">Mandarin</a>
        </div>
      </div>
      <div class="join-modal">
        <p>I will stand up to Donald Trump and fight the Republican agenda of racism, sexism, and xenophobia. But I can't do it alone. It’s going to take strong grassroots campaign to defeat the powerful interests that have lined up against us. </p>
        <script type="text/javascript" src="//app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=346&cid=1738458&lid=19452"></script>
        <p class="join join-close"><i class="fa fa-times"></i></p>
      </div>
      <div class="contribute-modal">
        <div class="contribute-section">

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="@asset('images/catalina-logo-fpo.svg')" alt="Catalina logo" /></a>

          <iframe width="100%" height="350px" src="https://www.youtube.com/embed/l9FGVybd4sQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

          <div class="contribute-text">
          
            <p class="contribute-title">DEMOCRAT FOR ASSEMBLY</p>
            <p>Donate Today!</p>

            <?php $actblue = get_field("actblue"); ?>

            <div class="btn-group">
              <button class="btn btn-prime"><a href="<?php echo $actblue.'?amount=10'; ?>">$10</a></button>
              <button class="btn btn-prime"><a href="<?php echo $actblue.'?amount=25'; ?>"">$25</a></button>
              <button class="btn btn-prime"><a href="<?php echo $actblue.'?amount=100'; ?>"">$100</a></button>
            </div>

            <p><i class="close-contribute fa fa-times"></i></p>

          </div>
          
        </div>
        
      
      </div>
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
