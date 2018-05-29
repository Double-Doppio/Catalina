{{--
  Template Name: Meet Catalina Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="section-container rev">

  <?php
      
    $pageTitle = get_field("title");
    $pageSubtitle = get_field("sub_title");

  ?>    

    <div class="text-section box-green">
      <h1 class="text-top">MEET CATALINA</h1>
      <h1 class="text-title meet-title"><?php echo $pageTitle; ?></h1>
      <h1 class="text-mid"><?php echo $pageSubtitle; ?></h1>
      <h1 class="text-bot"><i class="fa fa-angle-down"></i></h1>
    </div>

    <div class="image-section">
      <img src="@asset('images/CC_-249.jpg')"/>
    </div>
  
  </div>

  <div class="text-body">
    <?php the_content(); ?>
  </div>

  @endwhile
@endsection
