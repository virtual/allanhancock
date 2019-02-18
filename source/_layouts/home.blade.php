<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="theme-color" content="#003d7b">
  <title>Allan Hancock College</title>
  <meta property="og:title" content="Allan Hancock College" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/thumbnail.jpg" />
  <meta property="og:url" content="http://www.Allan Hancockcollege.edu/" />
  <meta property="og:site_name" content="Allan Hancock College" />
  <meta property="og:description" content="Allan Hancock College..." />
  <meta property="og:locale" content="en_us" />
  <link rel="image_src" href="{{ $page->baseUrl }}/images/thumbnail.jpg" />

  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/bootstrap.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css?v=2">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <noscript>
    <style>
      .navbar-collapse,
      .collapse,
      .dropdown-menu {
        display: block !important
      }

      .subnav #submenu>ul ul {
        display: block;
      }
    </style>
  </noscript>
  @yield('headcode')

  <!-- Analytics -->
</head>

<body class="homepage">
  @include('_partials.topbar') 


  <nav class="topnav nav nav-underline navbar-light d-none d-lg-block" aria-label="Secondary Navigation">
    <div class="container d-flex">
      <ul>
        <!-- com.omniupdate.div label="top-nav" group="TOP_Nav" button="792" path="/includes/top-nav.inc" break="break" -->
        @include('_partials.topnav') 
        <!-- /com.omniupdate.div -->
      </ul>
      @include('_partials.topnav2') 
    </div>
  </nav>

  @include('_partials.header')
  <main id="content">
<section class="homepage-banner-container hero-images">
  @yield('hero')
</section>
<div class="container subfeature" aria-label="Featured Links">
    <div class="d-flex align-items-stretch">
      @yield('subfeature')
    </div>
</div>

<div class="container campaign" aria-label="Secondary Banner"> 
  @yield('campaign') 
</div>
<div class="bg-dark">
  <div class="container news-events"> 
    <div class="py-5">
      @yield('news-events') 
    </div>
  </div>
</div>

<div class="homepage-banner-container banner-search" aria-label="Search Programs">
    <div class="homepage-banner">
      @yield('banner-search')
  
    </div> 
  </div>

<div class="featureicon-container bg-primary bg-primary-dark" aria-label="Statistics">
  <div class="container">
    @yield('icons')
    </div>
</div>

@if (trim($__env->yieldContent('content'))) 
  @yield('content')
@endif

</main>


  @if (trim($__env->yieldContent('locations'))) 
  <div class="locations">
    @include('_partials/locations')  
  </div>
  @endif
 
  <!-- FOOTER -->
  <div class="bg-primary bg-primary-dark" id="footer">
    @include('_partials/footer')
  </div>
  <script src="{{ $page->baseUrl }}/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/popper.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/bootstrap.min.js"></script>
  
  <!-- homepage only -->
  <script src='{{ $page->baseUrl }}/assets/js/jarallax.js'></script>
  
  <!-- <script src="{{ $page->baseUrl }}/assets/js/lazyload.js"></script> -->
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script> 

  @yield('footcode')
     
</body>

</html>