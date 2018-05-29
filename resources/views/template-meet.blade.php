{{--
  Template Name: Meet Catalina Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="section-container rev">

    <div class="text-section box-green">
      <h1 class="text-top">MEET CATALINA</h1>
      <h1 class="text-title meet-title">CATALINA CRUZ</h1>
      <h1 class="text-mid">Catalina Cruz is an experienced attorney and a leader for immigration reform and workers’ rights.</h1>
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
