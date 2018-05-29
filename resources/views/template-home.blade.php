{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  {{-- Section 1 --}}
  
  <div class="section-container rev">

    <div class="text-section top-section box-blue top-sec-text">
      <h1 class="text-top home-top">DARE TO</h1>
      <h1 class="text-mid home-mid">DREAM</h1>
      <button class="btn btn-prime contribute home-button"><a target="_blank" href="<?php echo get_field("actblue", 8); ?>">contribute</a></button>
      <h1 class="text-bot home-bot mobile-hide">DEMOCRAT FOR ASSEMBLY</h1>
    </div>

    <div class="image-section top-section top-sec-cont">
      <img class="image-home" src="@asset('images/C-CRUZ_5_11_181708_X1_RGB.jpg')"/>
    </div>
  
  </div>

  {{-- Section 2 --}}
  
  <div class="section-container">

    <div class="image-section">
      <img src="@asset('images/CC_-249.jpg')"/>
    </div>

    <div class="text-section box-green">
      <h1 class="text-top">MEET CATALINA</h1>
      <h1 class="text-mid no-learn">Catalina Cruz is an experienced attorney and a leader for immigration reform and workers’ rights. If elected, she would be the first DREAMer elected in New York state.</h1>
      <a class="learn-more" href="/meet-catalina"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
    </div>
  
  </div>

  {{-- Section 3 --}}
  
  <div class="section-container rev">

    <div class="text-section box-red">
      <h1 class="text-top">ISSUES</h1>
      <h1 class="text-title">CATALINA'S PLAN</h1>
      <h1 class="text-mid">Catalina has a smart and innovative plan to improve our community. </h1>
      <a class="learn-more" href="/issues"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
    </div>

    <div class="image-section">
      <img src="@asset('images/CC_-140.jpg')"/>
    </div>
  
  </div>

   {{-- Section 4 --}}
  
  <div class="section-container">

    <div class="image-section">
      <img src="@asset('images/7Y5A6946-high-res-adjusted-flat.jpg')"/>
    </div>

    <div class="text-section box-blue">
      <h1 class="text-top">NEWS</h1>
      <h1 class="text-title">NEWS ABOUT CATALINA</h1>
      <h1 class="text-mid">The latest news about Catalina’s campaign and our community.</h1>
      <a class="learn-more" href="/news"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
    </div>

  </div>
  
  {{-- Section 5 --}}
  
  <div class="section-container rev">

    <div class="text-section box-green">
      <h1 class="text-top">OUR COMMUNITY</h1>
      <h1 class="text-title text-title-small">CORONA<br>JACKSON HEIGHTS<br>ELMHURST</h1>
      <h1 class="text-mid">Catalina seeks to represent these diverse communities of Queens. </h1>
      <a class="learn-more" href="/endorsements"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
    </div>

    <div class="image-section">
      <img src="@asset('images/CC_-294.jpg')"/>
    </div>
  
  </div>
  @endwhile
@endsection
