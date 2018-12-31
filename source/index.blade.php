@extends('_layouts.home')

@section('headcode')
<style type="text/css">
  .homepage-banner.hero-1{
    background-image: url(./resources/img/homepage/banner-1920.jpg);
  }
  
  @media screen and (max-width: 900px) { 						
   .homepage-banner.hero-1 {
    background-image: url(./resources/img/homepage/banner-1920.jpg);
    }
  } 
  
  @media screen and (max-width: 479px) {  
   .homepage-banner.hero-1 {
    background-image: url(./resources/img/homepage/banner-1920.jpg);
    }
  } 						 
 </style>

 <!-- search -->
 <style type="text/css">
  .banner-search .homepage-banner .hero-image-wrapper  {
    background-image: url('./resources/img/stock/alexis-brown-85793-unsplash.jpg')
  }
  
  /* @media screen and (max-width: 900px) { 						
   .banner-search .homepage-banner .hero-image-wrapper  {
      background-image: url('./resources/img/ctas/cta-01.jpg')
    }
  } 
  
  @media screen and (max-width: 479px) {  
    .banner-search .homepage-banner .hero-image-wrapper  {
      background-image: url('./resources/img/ctas/cta-01.jpg')
    }
  } 						  */
 </style>
@endsection

@section('hero1')


<section class="hero left bg-primary">
  <div class="hero-image-wrapper"></div>

  <div class="hero-caption large-text">
    <p>Start here.</p>
    <p>Go anywhere.</p>
  </div>
</section>
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
  <img class="lazy" src="./resources/img/homepage/ahc-mobile.jpg" alt="Students holding up phones displaying their future selves working in their fields" />
</div>

@endsection


@section('news-events')
<h2>News and Events <small>What's going on around campus</small></h2>
<div class="row">
  <div class="col-12 col-md-6">
    <h3 class="bar-bg">News</h3>
    <div class="article-listing news-row">
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => './resources/img/news/MarsRoverLanding.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])

    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => './resources/img/news/MarianDedication1.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])

        
    @include('_partials.article', [
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
   <div class="event-feed">
      <article class="post">
        <div class="post-date"><a href="#"><span class="month">Nov</span><span class="day">26</span></a></div>
        <div class="post-content"><h4><a href="#">Mars Lander Viewing</a></h4>
          <p>Join us for the InSight Robotic Lander's historic arrival&hellip; </p>
        </div>
      </article>
      <article class="post">
          <div class="post-date"><a href="#"><span class="month">Nov</span><span class="day">29</span></a></div>
          <div class="post-content"><h4><a href="#">Cash for College Workshop</a></h4>
            <p>Get help from financial aid experts with the FAFSA, Dream&hellip; </p>
          </div>
      </article>
      <article class="post">
          <div class="post-date"><a href="#"><span class="month">Nov</span><span class="day">29</span></a></div>
          <div class="post-content"><h4><a href="#">Women's Basketball — Cuesta Tournament</a></h4>
            <p>vs. TBA @ Cuesta College </p>
          </div>
      </article>
    </div>
  </div>
</div> 
<p class="pt-5 pb-2">
  <a class="btn btn-outline-light">More News</a>
  <a class="btn btn-outline-light">More Events</a>
</p>
@endsection

@section('banner-search')
<section class="hero left">
    <div class="hero-image-wrapper jarallax"></div>

<div class="hero-caption">
       <h2 class="heading">What are you interested in learning?</h2>


  <form class="searchform" name="searchform" method="get" action="https://ousearch.omniupdate.com/texis/search/">
    <input type="hidden" name="pr" value="ahc" />
    <input type="hidden" name="sufs" value="2" />
    <div class="form-group">
        <div class="input-group">
        
      <label for="program-search-box">Search programs</label>
      <input name="query" class="queryAutocomplete" id="program-search-box" type="text" placeholder="Search programs of study"  /> 
      <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span><span class="sr-only">Submit</span></button>
      </div>
    </div>
  </form>

     <p><a href="#" class="more-arrow">View all programs of study</a></p>

       </div>
 </section>
@endsection


@section('content')
 

<div class="hero-expandcontent row" aria-hidden="true">

  <div class="col-12 col-md-12 col-lg-8">
    <div class="row">
      <div class="col-md-6">
        <ul class="card-links">
          <li><a href="#" class="more-arrow">College/University Transfer</a></li>
          <li><a href="#" class="more-arrow">Professional & Technical</a></li>
          <li><a href="#" class="more-arrow">International Students</a></li>
          <li><a href="#" class="more-arrow">Transitional (ESL, HS21, I-Best GED…)</a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="card-links">
          <li><a href="#" class="more-arrow">Continuing Education</a></li>
          <li><a href="#" class="more-arrow">Learn Online</a></li>
          <li><a href="#" class="more-arrow">Veteran</a></li>
          <li><a href="#" class="more-arrow">Browse All Programs</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Ask a Question</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Visit Campus</a>
  </div>

</div>

  
@endsection


@section ('icons1') 

<div class="row featureicons delayAnimation" id="results1">
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '11,500',
        'desc' => 'Students Enrolled',
        'iconalt' => '',     
        'icon' => '',          
        'buttontext' => '',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '100+',
        'desc' => 'Degrees and Options',
        'iconalt' => '',     
        'icon' => '',          
        'buttontext' => '',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '42+',
        'desc' => 'Clubs and Organization',
        'iconalt' => '',     
        'icon' => '',          
        'buttontext' => '',
        'link' => '#'
        ])
    </div>
</div>
@endsection


 
 

  @section('sectionals')
  <div class="locations">
    @include('_partials/locations')  
  </div>
  @endsection 
  
  
@section('homepage')  
true
@endsection
