@extends('_layouts.master')

@section('pagetitle')
Template 4
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection


@section('main-sidebar-content')
@include('_partials/block-list')
@include('_partials/block-list')
<div class="fakeimg"></div> 
@endsection
 
@section('content') 
  @include('_partials/headers')
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat ultricies mauris ac efficitur. Donec.</p>
  <div class="slick-slider">
    <!-- Available asset fields: title, description, caption, link -->
    @include('_partials.carousel', [ 
    'title' => "Apply to Graduate",
    'caption' => "Follow the steps to graduate this Spring!",
    'description' => 'Students in graduation robes', 
    'img' => '/resources/img/carousel/apply.jpg',          
    'link' => 'https://www.hancockcollege.edu/counseling/ready-to-graduate.php'
    ])  

    @include('_partials.carousel', [ 
    'title' => "",
    'caption' => "",
    'description' => 'Public Safety Training Complex', 
    'img' => '/resources/img/carousel/pstc.jpg',          
    'link' => 'https://www.hancockcollege.edu/pstc/index.php'
    ])  
    
    @include('_partials.carousel', [ 
    'title' => "Hancock Promise",
    'caption' => "New high school graduates in the district get free tuition!",
    'description' => 'Students holding up phones displaying their future selves working in their fields', 
    'img' => '/resources/img/carousel/ahc-mobile.jpg',          
    'link' => 'https://www.hancockcollege.edu/promise/index.php'
    ])   
  </div>

  @include('_partials/block-list')
  @include('_partials/snippets') 

  <h3>Horizontal Layout with image for staff dirs or features</h3>
  <!-- snippet: hlayout with image -->
  @include('_partials.hlayout-img', [
  'heading' => 'Author and Hancock Professor Offers Free Lecture on the Art of Publishing a Book',
  'img' => '../resources/img/news/FacultyLectureSeriesSp19.jpg',
  'alt' => 'Faculty Lecture Series', 
  'desc' => 'Don\'t miss this series of exciting lectures and film screenings -- register today!',
  'link' => 'https://www.hancockcollege.edu/public_affairs/announcements/2019Feb6FacultyLectureSeries.php'
  ]) 

  @include('_partials.hlayout-img', [
  'heading' => 'Author and Hancock Professor Offers Free Lecture on the Art of Publishing a Book',
  'img' => '../resources/img/news/FacultyLectureSeriesSp19.jpg',
  'alt' => 'Faculty Lecture Series', 
  'desc' => 'Don\'t miss this series of exciting lectures and film screenings -- register today!',
  'link' => 'https://www.hancockcollege.edu/public_affairs/announcements/2019Feb6FacultyLectureSeries.php'
  ]) 
      
  
@endsection
  
@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('content-header')  
true
@endsection

