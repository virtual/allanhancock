@extends('_layouts.home')

@section('hero1')
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
'img' => './resources/img/stock/alexis-brown-85793-unsplash.jpg',     
'color' => '#000',          
'buttontext' => 'Apply Today',
'link' => '#'
])
@include('_partials.imagebutton', [
'img' => './resources/img/stock/alexis-brown-85793-unsplash.jpg',     
'color' => '#c51230',          
'buttontext' => 'Apply Today',
'link' => '#'
])
  @include('_partials.imagebutton', [
  'img' => './resources/img/stock/alexis-brown-85793-unsplash.jpg',     
  'color' => '#006c4',          
  'buttontext' => 'Apply for Financial Aid',
  'link' => '#'
  ])
  @include('_partials.imagebutton', [
  'img' => './resources/img/stock/alexis-brown-85793-unsplash.jpg',     
  'color' => '#972085',          
  'buttontext' => 'View Programs & Majors',
  'link' => '#'
  ])

@endsection

@section('campaign') 

<h2>See yourself here!</h2>
<p><a href="#" class="more-arrow">Register for fall classes today!</a></p>
<div class="delayAnimation">
  <img class="lazy" src="./resources/img/homepage/ahc-mobile.jpg" />
</div>

@endsection


@section('news-events')
<h2>News and Events <small>What's going on around campus</small></h2>
<div class="row">
  <div class="col-6">
    <h3 class="bar-bg">News</h3>
    <div class="article-listing news-row">
    @include('_partials.article', [
    'heading' => 'News Article #1',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
    porta…',
    'alt' => 'students at a table',
    'img' => './resources/img/stock/alexis-brown-85793-unsplash.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])
    
    @include('_partials.article', [
    'heading' => 'News Article #2',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
    porta…',
    'alt' => 'students at a table',
    'img' => './resources/img/stock/alexis-brown-82988-unsplash.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])
    
    @include('_partials.article', [
    'heading' => 'News Article #3',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
    porta…',
    'alt' => 'students at a table',
    'img' => './resources/img/stock/stefan-stefancik-257625-unsplash.jpg',
    'link' => 'news.html',
    'datetime' => '2018-09-13 11:31'
    ])
  </div>

  </div>
  <div class="col-6">
    <h3 class="bar-bg">Events</h3>
    <article class="post">
      <div class="post-date">
        <span class="day">10:30 AM</span>
        <span class="month">DEC 29</span>
      </div>
      <div class="post-content">
        <h4>
          <a href="#">Class aptent taciti sociosqu ad litora torquent</a>
        </h4>
      </div>
    </article>
    <article class="post">
      <div class="post-date">
        <span class="day">10:30 AM</span>
        <span class="month">DEC 29</span>
      </div>
      <div class="post-content">
        <h4>
          <a href="#">Class aptent taciti sociosqu ad litora torquent</a>
        </h4>
      </div>
    </article>
    <article class="post">
      <div class="post-date">
        <span class="day">10:30 AM</span>
        <span class="month">DEC 29</span>
      </div>
      <div class="post-content">
        <h4>
          <a href="#">Class aptent taciti sociosqu ad litora torquent</a>
        </h4>
      </div>
    </article>
  </div>
</div> 
<p>
  <a class="btn btn-outline-light">More News</a>
  <a class="btn btn-outline-light">More Events</a>
</p>
@endsection

@section('banner-search')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <style type="text/css">
      .banner-search .homepage-banner  {
        background-image: url(./resources/img/stock/alexis-brown-85793-unsplash.jpg);
      }
      
      /* @media screen and (max-width: 900px) { 						
       .homepage-banner.hero-3 {
        background-image: url(./resources/img/homepage/a3/medium.jpg);
        }
      } 
      
      @media screen and (max-width: 479px) {  
       .homepage-banner.hero-3 {
        background-image: url(./resources/img/homepage/a3/small.jpg);
        }
      } 						  */
     </style>
<div class="hero-caption">
       <h2 class="heading">What are you interested in learning?</h2>


  <form class="searchform" name="searchform" method="get" action="https://ousearch.omniupdate.com/texis/search/">
    <input type="hidden" name="pr" value="ahc" />
    <input type="hidden" name="sufs" value="2" />
    <div class="form-group">
        <div class="input-group">
        
      <label for="search-box">Search programs</label>
      <input name="query" class="queryAutocomplete" id="search-box" type="text" placeholder="Search programs of study"  /> 
      <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span></button>
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
