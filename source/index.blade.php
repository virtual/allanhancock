@extends('_layouts.home')

@section('headcode')
<style>
  .homepage-banner.hero-1 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-1/banner-768.jpg); }
  @media (min-width: 480px) {
    .homepage-banner.hero-1 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-1/banner-1200.jpg); }
  }
  @media (min-width: 992px) {
    .homepage-banner.hero-1 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-1/banner-1920.jpg); }
  }

  .homepage-banner.hero-2 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-2/banner-768.jpg); }
  @media (min-width: 480px) {
    .homepage-banner.hero-2 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-2/banner-1200.jpg); }
  }
  @media (min-width: 992px) {
    .homepage-banner.hero-2 .hero-image-wrapper { background-image: url(./resources/img/homepage/hero-2/banner-1920.jpg); }
  }
 </style>

 <!-- search -->
 <style>
  .banner-search .homepage-banner .hero-image-wrapper  {
    background-image: url('./resources/img/stock/alexis-brown-85793-unsplash.jpg')
  }
 </style>
@endsection

@section('footcode')
<script>
  function showRandomHero(heroCt) {
    return 'hero-'+(1 + Math.floor(Math.random() * heroCt));
  }
  $(function() {
    // Link whole slide based on inner link
    $('.hero-images .homepage-banner').click(function(e){
      var link = $(this).find('.hero-caption a').attr('href');
      window.location.href = link;
    })

    // Randomize slide
    var heroClass = showRandomHero($('.hero-images .homepage-banner').length)
    $('.hero-images .homepage-banner.' + heroClass).show(); 
    $('.hero-images').addClass('initialized');

    // Delay news and events, non-siblings; dynamic for any number of news or events
    var delay = 0;
    $(".animated-news-events article").each(function() {
      $(this).css('animation-delay', delay + 's');
      delay = delay + .75;
    });
  });
</script>
@endsection

@section('hero')
<div class="homepage-banner hero-1">
  <div class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <div class="hero-caption large-text">
      <h2><a href="https://www.hancockcollege.edu/academic_departments/public_safety/fire/internships.php">Start here
      <span class="line2">Go anywhere.</span></a></h2>
    </div>
  </div>
</div>
<div class="homepage-banner hero-2">
  <div class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <div class="hero-caption large-text">
        <h2><a href="https://www.hancockcollege.edu/community_education/index.php">Education
        <span class="line2">for Life.</span></a></h2>
    </div>
  </div>
</div>
@endsection

@section ('subfeature')
  @include('_partials.imagebutton', [
  'img' => './resources/img/ctas/cta-01.jpg',
  'color' => '#000',
  'buttontext' => 'View Programs',
  'link' => '#'
  ])
  @include('_partials.imagebutton', [
  'img' => './resources/img/ctas/cta-02.jpg',
  'buttontext' => 'Apply to Hancock',
  'link' => '#'
  ])
  @include('_partials.imagebutton', [
  'img' => './resources/img/ctas/cta-03.jpg',
  'buttontext' => 'Apply for Financial Aid',
  'link' => '#'
  ])
  @include('_partials.imagebutton', [
  'img' => './resources/img/ctas/cta-04.jpg',
  'buttontext' => 'View Programs & Majors',
  'link' => '#'
  ])
@endsection

@section('campaign') 

<h2>See yourself here!</h2>
<p><a href="#" class="more-arrow">Register for fall classes today!</a></p>
<div class="delayAnimation">
  <a href="#"><img class="lazy" src="./resources/img/homepage/ahc-mobile.jpg" alt="Students holding up phones displaying their future selves working in their fields" /></a>
</div>

@endsection


@section('news-events')
<h2>News and Events <small>What's going on around campus</small></h2>
<div class="animated-news-events delayAnimation">
<div class="row">
  <div class="col-12 col-md-6">
    <h3 class="bar-bg">News</h3>
    <div class="article-listing news-row">
    
    <!-- Add option for # of news items to show -->
    @include('_partials.article-feed', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => './resources/img/news/MarsRoverLanding.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])
    
    @include('_partials.article-feed', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => './resources/img/news/MarianDedication1.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])
        
    @include('_partials.article-feed', [
    'heading' => 'Hancock\'s Winter and Spring Class Schedules Now Available Online; Registration for Both Semesters Starts November 13',
    'desc' => 'Classes include accounting, drama, history, and much more!',
    'alt' => '',
    'img' => '',
    'link' => 'news.html',
    'datetime' => '2018-11-09 11:31'
    ])
  </div>

  </div>
  <div class="col-12 col-md-6">
    <h3 class="bar-bg">Events</h3>
    <!-- Add option for # of event items to show -->
   <div class="event-feed">
      <article class="post">
        <div class="post-date"><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-687bfbc4-0168-7c975d8c-00004684demobedework@mysite.edu&recurrenceId="><span class="month">Nov</span><span class="day">26</span></a></div>
        <div class="post-content"><h4><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-687bfbc4-0168-7c975d8c-00004684demobedework@mysite.edu&recurrenceId=">Mars Lander Viewing</a></h4>
          <p>Join us for the InSight Robotic Lander's historic arrival&hellip; </p>
        </div>
      </article>
      <article class="post">
          <div class="post-date"><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-68ddd583-0168-df0d4b60-000046a5demobedework@mysite.edu&recurrenceId="><span class="month">Nov</span><span class="day">29</span></a></div>
          <div class="post-content"><h4><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-68ddd583-0168-df0d4b60-000046a5demobedework@mysite.edu&recurrenceId=">Cash for College Workshop</a></h4>
            <p>Get help from financial aid experts with the FAFSA, Dream&hellip; </p>
          </div>
      </article>
      <article class="post">
          <div class="post-date"><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-687bfbc4-0168-8237f207-00006f0fdemobedework@mysite.edu&recurrenceId="><span class="month">Nov</span><span class="day">29</span></a></div>
          <div class="post-content"><h4><a href="http://ec.hancockcollege.edu/cal/event/eventView.do?b=de&calPath=%2Fpublic%2Fcals%2FMainCal&guid=CAL-8aa881b1-687bfbc4-0168-8237f207-00006f0fdemobedework@mysite.edu&recurrenceId=">Women's Basketball — Cuesta Tournament</a></h4>
            <p>vs. TBA @ Cuesta College </p>
          </div>
      </article>
    </div>
  </div>
</div> 
<p class="pt-5 pb-2">
  <a href="https://www.hancockcollege.edu/public_affairs/announcements/" class="btn btn-outline-light">More News</a>
  <a href="http://ec.hancockcollege.edu/cal" class="btn btn-outline-light">More Events</a>
</p>
</div>
@endsection

@section('banner-search')
<section class="hero left">
  <div class="hero-image-wrapper jarallax"></div>
  <div class="hero-caption delayAnimation">
    <h2 class="heading">What are you interested in learning?</h2>
    <form class="searchform" name="searchform" method="get" action="https://ousearch.omniupdate.com/texis/search/">
      <input type="hidden" name="pr" value="ahc" />
      <input type="hidden" name="sufs" value="2" />
      <div class="form-group">
        <div class="input-group">
          <label for="program-search-box">Search programs</label>
          <input name="query" class="queryAutocomplete" id="program-search-box" type="text" placeholder="Search programs of study" />
          <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span><span class="sr-only">Submit</span></button>
        </div>
      </div>
    </form>
    <p><a href="#" class="more-arrow">View all programs of study</a></p>
  </div>
</section>
@endsection

@section ('icons') 
<!-- Snippet -->
<div class="row featureicons delayAnimation">
  <div class="col-12 col-sm-4">
    @include('_partials.featureicon', [
    'heading' => '11,500',
    'desc' => 'Students Enrolled',
    'link' => '#'
    ])

  </div>
  <div class="col-12 col-sm-4">
    @include('_partials.featureicon', [
    'heading' => '100+',
    'desc' => 'Degrees and Options',
    'link' => '#'
    ])

  </div>
  <div class="col-12 col-sm-4">
    @include('_partials.featureicon', [
    'heading' => '42+',
    'desc' => 'Clubs and Organization',
    'link' => '#'
    ])
  </div>
</div>
@endsection


@section('content')
 
  <!-- If parallax option turned on, add class "jarallax" -->
  @include('_partials.subcampaign', [ 
  'desc' => '', 
  'desc2' => '<h2><img src="./resources/img/logos/promise.png" alt="Hancock Promise"></h2><p><a class="text-white icon-white more-arrow" href="#">Find Out More</a></p>', 
  'img' => './resources/img/homepage/firefighting-grad.jpg',
  'class' => 'jarallax'
  ]) 

  @include('_partials.subcampaign', [ 
  'desc' => '<h2>Bulldog Athletics</h2><p>Men\'s and Women\'s sports at Allan Hancock College</p><p><a class="more-arrow text-dark" href="#">Explore Athletics</a></p>', 
  'desc2' => '', 
  'img' => './resources/img/homepage/athletics.jpg',
  'class' => ''
  ]) 

@endsection

@section('locations')  
true
@endsection  
  
@section('homepage')  
true
@endsection
