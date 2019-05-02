@extends('_layouts.master')

@section('pagetitle')
PrettyPhoto
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content')  
<h2>Photo Gallery</h2>
<ul class="prettyphoto-gallery">
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto/fullscreen/1.jpg" rel="prettyPhoto[gallery1]" title="You can add caption to pictures. You can add caption to pictures. You can add caption to pictures."><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_1.jpg" width="200" height="200" alt="Red round shape"></a></li>
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/2.jpg" rel="prettyPhoto[gallery1]"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_2.jpg" width="200" height="200" alt="Nice building"></a></li>
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/3.jpg" rel="prettyPhoto[gallery1]"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_3.jpg" width="200" height="200" alt="Fire!"></a></li>
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/4.jpg" rel="prettyPhoto[gallery1]"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_4.jpg" width="200" height="200" alt="Rock climbing"></a></li>
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/5.jpg" rel="prettyPhoto[gallery1]"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_5.jpg" width="200" height="200" alt="Fly kite, fly!"></a></li>
  <li><a href="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/6.jpg" rel="prettyPhoto[gallery1]"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//thumbnails/t_2.jpg" width="200" height="200" alt="Nice building"></a></li>
</ul>  

<h2>Video</h2>
  <div class="row">
    <div class="col-3"><div class="prettyphoto-lightbox"><strong><a href="https://www.youtube.com/watch?v=8DyJUKw7qcM&amp;feature=youtu.be" rel="lightbox"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/6.jpg" alt="Hancock College Video Thumbnail" width="500" height="165"></a></strong></div></div>
    <div class="col-4"><div class="prettyphoto-lightbox"><strong><a href="https://www.youtube.com/watch?v=8DyJUKw7qcM&amp;feature=youtu.be" rel="lightbox"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/6.jpg" alt="Hancock College Video Thumbnail" width="500" height="165"></a></strong></div></div>
    <div class="col-5"><div class="prettyphoto-lightbox"><strong><a href="https://www.youtube.com/watch?v=8DyJUKw7qcM&amp;feature=youtu.be" rel="lightbox"><img src="{{ $page->baseUrl }}/resources/img/prettyPhoto//fullscreen/6.jpg" alt="Hancock College Video Thumbnail" width="400" height="165"></a></strong></div></div>
  </div>
@endsection
  
@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('content-header')  
true
@endsection

