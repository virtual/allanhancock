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

  <style>
    .content-header { background-image: url(@yield('content-header-img')); }
  </style>

  <!-- Analytics -->
</head>

<body>
  @include('_partials.topbar') 


  <nav class="topnav nav nav-underline navbar-light d-none d-lg-block">
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

  <!-- INTERIOR -->


<!-- INTERIOR TEMPLATE -->
@if ((trim($__env->yieldContent('left-nav'))) && (trim($__env->yieldContent('main-sidebar-content'))))
<div class="layout-has-left-nav layout-has-sidebar layout-master page-interior" id="maincontent">
@elseif (trim($__env->yieldContent('left-nav'))) <div class="layout-has-left-nav layout-master page-interior" id="maincontent">
@elseif (trim($__env->yieldContent('main-sidebar-content'))) <div class="layout-has-sidebar layout-master page-interior" id="maincontent">
@else<div class="layout-master page-interior" id="maincontent"> @endif 
      
    <!-- CONTENT HEADER ON -->
    @if (trim($__env->yieldContent('content-header')))
    <!-- has content header -->
    <div class="content-header ">
      <div class="header-image-overlay">
        <div class="container">
          <div class="header-info">
            <div class="header-content">
              <h1>@yield('pagetitle')</h1>
            </div>
          </div>
        </div><!-- end header info -->
      </div><!-- end container-fluid -->
    </div><!-- end content-header -->
    @endif

    <div class="container">
      <div class="flex-layout-body">

 
        <!-- if left nav -->
        @if (trim($__env->yieldContent('left-nav')))
        <nav class="left-nav">
          <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
          @yield('left-nav')
        </nav>
        @endif
        <!-- end if left nav -->

        <main class="content-container">
          <div class="content-section ">
              <div class="breadcrumb" aria-label="breadcrumb">
                  @yield('breadcrumb')
                </div>
                  

            @if (trim($__env->yieldContent('lead'))) 
              @yield('lead') 
            @endif 
  
            <div id="interior">
              @yield('content')
            </div>
          </div>
        </main>

        <!-- sidebar on -->
        @if (trim($__env->yieldContent('main-sidebar-content')))
        <div id="sidebar" class="sidebar-container">
          @yield('main-sidebar-content')
        </div>                
        @endif
        <!-- end sidebar on -->
 
            <!-- end layout has class-->
          </div> <!-- END .flex-layout-body -->
        </div><!-- END .container-fluid --> 
    </div><!-- END .layout-master page-interior -->
    <!-- end INTERIOR TEMPLATE -->
  <!-- end interior -->



  @if (trim($__env->yieldContent('locations'))) 
  <div class="locations">
    @include('_partials/locations')  
  </div>
  @endif

    <!-- FOOTER -->
  <div class="bg-primary" id="footer">
    @include('_partials/footer')
  </div>
  <script src="{{ $page->baseUrl }}/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/popper.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script> 
    
</body>
</html>