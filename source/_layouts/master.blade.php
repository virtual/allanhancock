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

<body>
  @include('_partials.topbar') 


  <nav class="topnav nav nav-underline navbar-light d-none d-lg-block">
    <div class="container-fluid d-flex">
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


<!-- INTERIOR TEMPLATE - Not program option template -->
<div class="layout-master page-interior" id="maincontent">
    @if (trim($__env->yieldContent('content-header-img'))) <div class="content-has-header-img">@else  <div class="content-no-header-img"> @endif
    <!-- CONTENT HEADER ON -->
    @if (trim($__env->yieldContent('content-header'))) <!-- has content header -->
    @if (trim($__env->yieldContent('content-header-inverse'))) 
    <div class="content-header bg-primary"> @else  <div class="content-header "> @endif
     <div class="container-fluid">

        <div class="breadcrumb" aria-label="breadcrumb">
          @yield('breadcrumb')
        </div>
          
          <div class="header-info">
            
            <div class="header-content">
              @yield('content-header')
            </div>

            @if (trim($__env->yieldContent('content-header-img')))  
            <div class="header-image">
              <div class="header-image-clip">
                @yield('content-header-img')
              </div>
            </div>
            @endif
            
          </div><!-- end header info -->

        </div><!-- end container-fluid -->
      </div><!-- end content-header -->
    @endif <!-- end content-header IF -->

    <div class="container-fluid">
      <div class="flex-layout-body">

        <!-- determining opening classes  -->
        @if (trim($__env->yieldContent('left-nav')))
        <!-- has content leftnav -->
          @if (trim($__env->yieldContent('main-sidebar-content')))
           <!-- has content sidebar --> 
          <div class="layout-has-left-nav layout-has-sidebar">
          @else
          <div class="layout-has-left-nav">
          @endif <!-- end check main sidebar-->
            
        @else <!-- OFF left -->
            @if (trim($__env->yieldContent('main-sidebar-content'))) <!-- check sidebar -->
            <div class="layout-has-sidebar">
            @else
            <div class="layout-no-sidebar"><!-- no sidebar, no left nav-->
            @endif 
        @endif <!-- END determining opening classes -->
                
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

            @if (trim($__env->yieldContent('lead'))) 
              @yield('lead') 
            @endif 

            @if (!trim($__env->yieldContent('content-header'))) 
            <!-- if breadcrumb not in a content-header -->
            <div class="breadcrumb" aria-label="breadcrumb">
              @yield('breadcrumb')
            </div>
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

            </div> <!-- closing div for determining opening classes -->
            <!-- end layout has class-->
          </div> <!-- END .flex-layout-body -->
        </div><!-- END .container-fluid -->
      </div><!-- end content-has-header-img / content-no-header-img -->
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