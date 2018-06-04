
<div class="section-container rev">

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

<?php 
  $publisher = get_field("publisher");
  $date = get_field("publish_date");
  $author = get_field("author");
?>

<div class="text-body">

    <p class="publisher"><?php echo $publisher; ?></p>
    <h1 class="title-news"><?php echo get_the_title(); ?></h1>
    <p class="date-author"><?php echo $date." | by ".$author; ?></p>
    <p class="text"><?php the_content(); ?></p>
    <a class="learn-more more back" href="/news"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;<p>BACK</p></a>
</div>
