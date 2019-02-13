@extends('_layouts.master')

@section('pagetitle')
Template 4
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Templates</a></li>
    <li><a aria-current="page" href="#">Template 4</a></li>
  </ol>
@endsection


@section('main-sidebar-content')
@include('_partials/block-list')
@include('_partials/block-list')
<div class="fakeimg"></div> 
@endsection
 
@section('content') 
  @include('_partials/headers')
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat ultricies mauris ac efficitur. Donec.</p>
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

