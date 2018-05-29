{{--
  Template Name: Endorsements Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="section-container rev">

    <div class="text-section box-green">
      <h1 class="text-top">ENDORSEMENTS</h1>
      <h1 class="text-title meet-title">DREAM TEAM</h1>
      <h1 class="text-mid">I can’t do this alone. Our coalition of support is growing everyday. </h1>
      <h1 class="text-bot"><i class="fa fa-angle-down"></i></h1>
    </div>

    <div class="image-section">
      <img src="@asset('images/CC_-142.jpg')"/>
    </div>
  
  </div>
    
  <div class="container-endo">

      <?php if( have_rows('endorsement') ): ?>

        <?php while( have_rows('endorsement') ): the_row(); 

          // vars
          $endorser = get_sub_field('endorser');
          $image = get_sub_field('image');
          $text = get_sub_field('text');

        ?>

        <div class="section-endo">

        <?php if($image) {?>

          <img src="<?php echo $image; ?>"/>

        <?php } ?>

        <p class="quote"><?php echo $text; ?></p>
        <p class="endorser"><?php echo $endorser; ?></p>

        </div>

        <hr>

        <?php endwhile; ?>

      <?php endif; ?>

  </div>

  @endwhile
@endsection
