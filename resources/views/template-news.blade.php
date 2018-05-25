{{--
  Template Name: News Template
--}}

@extends('layouts.app')

@section('content')

  <div class="section-container">

    <div class="text-section box-blue">
      <h1 class="text-top">NEWS</h1>
      <h1 class="text-title">NEWS ABOUT CATALINA</h1>
      <h1 class="text-mid">The latest news about Catalina’s campaign and our community.</h1>
      <h1 class="text-bot"><i class="fa fa-angle-down"></i></h1>
    </div>

    <div class="image-section">
      <img src="@asset('images/7Y5A6946-high-res-adjusted-flat.jpg')"/>
    </div>

  </div>

  <div class="container-news">

  <?php

   $featuredNewsIds = get_field("featured");

   if($featuredNewsIds){

    $args = array(
      'post__in' => $featuredNewsIds,
      'orderby'=>'post__in'
    );

    $featuredNews = get_posts($args); 
    
    foreach( $featuredNews as $news){

      $newstype = get_field("news_check", $news->ID);

      if($newstype['value'] == 'article'){

      $publisher = get_field("publisher", $news->ID);
      $date = get_field("publish_date", $news->ID);
      $author = get_field("author", $news->ID);

      // Post excerpt while not in the loop
      
      $text = strip_shortcodes( $news->post_content );
      $text = apply_filters( 'the_content', $text );
      $text = str_replace(']]>', ']]&gt;', $text);
      $excerpt_length = apply_filters( 'excerpt_length', 76 );
      $text = wp_trim_words( $text, $excerpt_length );
      
      ?>

      <div class="section-news">
        <p class="publisher"><?php echo $publisher; ?></p>
        <h1 class="title-news"><?php echo $news->post_title; ?></h1>
        <p class="date-author"><?php echo $date." | by ".$author; ?></p>
        <p class="excerpt"><?php echo $text; ?></p>
        <a class="learn-more more" href="<?php echo get_permalink($news->ID); ?>"><i class="fa fa-plus"></i>&nbsp;<p>More</p></a>
      </div>

      <hr>

    <?php 

      } else { ?>

        <div class="section-news">

          <?php

            $videoUrl = get_field("youtube_url", $news->ID);
          
            $embedVideo = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://img.youtube.com/vi/$1/hqdefault.jpg", $videoUrl);
            
            echo '<a class="link-video" href="'.$videoUrl.'"><img src="'.$embedVideo.'" /></a>';

          ?>

          <p class="title-video">Video: <?php echo $news->post_title; ?></p>

        </div>

        <hr>

      <?php } ?>
    
    <?php } ?>

  <?php } ?>

  {{-- @while(have_posts()) @php the_post() @endphp
   
  @endwhile --}}

  </div>

@endsection
