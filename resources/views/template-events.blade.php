{{--
  Template Name: Events Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="container-events">

  <?php if( have_rows('event') ): ?>

        <?php while( have_rows('event') ): the_row(); 

          // vars
          $eventName = get_sub_field('event_name');
          $date = get_sub_field('date');
          $timestamp = strtotime($date);
          $day = date('l', $timestamp);
          $start = get_sub_field('start_time');
          $end = get_sub_field('end_time');
          $locationName = get_sub_field('location_name');
          $image = get_sub_field('image');
          $address = get_sub_field('address');
          $city = get_sub_field('city');
          $zipcode = get_sub_field('zip_code');
          $state = get_sub_field('state');
          $url = get_sub_field('event_tickets');
          $info = get_sub_field('event_info');

        ?>

        <div class="section-event">

          <div class="image-event">
            <img src="<?php echo $image; ?>" alt="event-image">
          </div>

          <div class="text-event">
          
            <p><?php echo $date; ?></p>
            <p class="title-event"><?php echo $eventName; ?></p>
            <p><?php echo $day.' at '.$start.' - '.$end ; ?><br>
            <?php echo $locationName; ?><br>
            <?php echo $address.','; ?><br>
            <?php echo $city.', '.$state.' '.$zipcode; ?></p>

            <div class="buttons-event">
              <a class="learn-more red-border info-display"><p>LEARN MORE</p></a>
              <a class="learn-more red-border" href="<?php echo $url; ?>"><p>GET TICKETS</p></a>
            </div>
          </div>

          <p class="event-info"><?php echo $info; ?></p>

        </div>

        <hr>

        <?php endwhile; ?>

      <?php endif; ?>

    
  </div>

  @endwhile
@endsection
