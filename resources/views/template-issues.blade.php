{{--
  Template Name: Issues Template
--}}

@extends('layouts.app')

@section('content')
  
    <div class="section-container">

    <div class="text-section box-red">
      <h1 class="text-top">MEET CATALINA</h1>
      <h1 class="text-title meet-title">CATALINA'S PLAN</h1>
      <h1 class="text-mid">Catalina has a smart and innovative plan to improve our community.</h1>
      <h1 class="text-bot"><i class="fa fa-angle-down"></i></h1>
    </div>

    <div class="image-section">
      <img src="@asset('images/CC_-140.jpg')"/>
    </div>
  
  </div>

  <?php 
    query_posts('post_type=issue&order=ASC');
    $counter = 0;
  ?>

  @while(have_posts()) @php the_post() @endphp  

  <?php
  
   $counter++;

   $colorArray = array('red','blue','green');

   $color = $colorArray[($counter%3)];
   
   if( $counter%2 == 1 ) { ?>

    <div class="section-container">

    <div class="image-section">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
      </div>

    <div class="text-section box-<?php echo $color; ?>">
        <h1 class="text-top"><?php echo $counter; ?></h1>
        <h1 class="text-title"><?php echo get_the_title();?></h1>
        <h1 class="text-mid"><?php echo get_field('issue_subtitle'); ?></h1>
        <a class="learn-more" href="<?php echo get_permalink(); ?>"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
      </div>

    </div>
    
  <?php } else { ?>

  <div class="section-container">

      <div class="text-section box-<?php echo $color; ?>">
        <h1 class="text-top"><?php echo $counter; ?></h1>
        <h1 class="text-title"><?php echo get_the_title();?></h1>
        <h1 class="text-mid"><?php echo get_field('issue_subtitle'); ?></h1>
        <a class="learn-more" href="<?php echo get_permalink(); ?>"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
      </div>

      <div class="image-section">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
      </div>
    </div>

  <?php } ?>
  
  @endwhile
@endsection
