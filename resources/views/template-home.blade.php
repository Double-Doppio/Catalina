{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
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

  @endwhile
@endsection
