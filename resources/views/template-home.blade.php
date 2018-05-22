{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  {{-- Section 1 --}}
  
  <div class="section-container">

    <div class="text-section top-section box-blue">
      <h1 class="text-top home-top">DARE TO</h1>
      <h1 class="text-mid home-mid">DREAM</h1>
      <h1 class="text-bot home-bot">DEMOCRAT FOR ASSEMBLY</h1>
    </div>

    <div class="image-section top-section">
      <img src="@asset('images/C-CRUZ_5_11_181708_X1_RGB.jpg')"/>
    </div>
  
  </div>

  {{-- Section 2 --}}
  
  <div class="section-container">

    <div class="image-section">
      <img src="@asset('images/CC_-249.jpg')"/>
    </div>

    <div class="text-section box-green">
      <h1 class="text-top">MEET CATALINA</h1>
      <h1 class="text-mid">Catalina Cruz is an experienced attorney and a leader for immigration reform and workers’ rights. If elected, she would be the first DREAMer elected in New York state.</h1>
      <a class="learn-more" href="/meet-catalina"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p</a>
    </div>
  
  </div>

  @endwhile
@endsection
