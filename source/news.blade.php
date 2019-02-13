@extends('_layouts.master')

@section('pagetitle')
Newsroom
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Announcements</a></li>
    <li><a aria-current="page" href="#">News and Announcements</a></li>
  </ol>
@endsection
   
 
@section('content') 


<div class="news-row news-bordered news-page-feed">
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/FacultyLectureSeriesSp19.jpg',
    'link' => '../news-single',
    'datetime' => '2018-09-13 11:31'
    ])
  
    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarianDedication1.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarsRoverLanding.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
  
    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarianDedication1.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarsRoverLanding.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
  
    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarianDedication1.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarsRoverLanding.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
  
    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarianDedication1.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
    @include('_partials.article', [
    'heading' => 'Watch Historic Mars Landing Live at Allan Hancock College',
    'desc' => 'The event is free and open to the public',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarsRoverLanding.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
  
    
    @include('_partials.article', [
    'heading' => 'Allan Hancock College Renames Health, Science & Mathematics Building in Honor of Marian Regional Medical Center',
    'desc' => 'More than 150 guests were in attendance',
    'alt' => 'students at a table',
    'img' => '../resources/img/news/MarianDedication1.jpg',
    'link' => '#',
    'datetime' => '2018-09-13 11:31'
    ])
           
</div>


<div class="pagination-block">
    <!-- use PHP to determine output here, disabled for irrelevant options (prev on first page) -->
    <!-- ! Reference Alvin implementation: https://satinflame.com/ou/alvin/news2.html -->
    <a href="?p=0" class="paginate_button previous disabled" tabindex="0" id="directory_previous">Previous</a>
    <span>
      <!-- limit this area to 5 selections based on current page -->
      <a href="?p=1" class="paginate_button current" tabindex="0">1</a>
      <a href="?p=2" class="paginate_button" tabindex="0">2</a>
      <a href="?p=3" class="paginate_button" tabindex="0">3</a>
      <a href="?p=4" class="paginate_button" tabindex="0">4</a>
      <a href="?p=5" class="paginate_button" tabindex="0">5</a> 
    </span>
    <a href="?p=2" class="paginate_button next" tabindex="0" id="directory_next">Next</a>
<!-- / MODIFIED -->
</div>

@endsection
  



@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('locations')  
true
@endsection
 
