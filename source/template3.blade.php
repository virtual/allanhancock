@extends('_layouts.master')

@section('pagetitle')
Template 3
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Templates</a></li>
    <li><a aria-current="page" href="#">Template 3</a></li>
  </ol>
@endsection
   
 
@section('content') 

<div class="row">
  <div class="col-12 col-md-4">
    <div class="fakeimg"></div>
    <h3>State of the Art</h3>
    <p>Approximately 11,500 credit students enroll each semester at one of the college's four locations in Santa Maria, Lompoc, Santa Ynez Valley, or at Vandenberg Air Force Base. The main campus is in Santa Maria, a 105 acre park-like setting that provides students with exceptional teaching and state of the art technology. </p>
    <p>
        The college offers opportunities for those who want to begin a bachelor's degree (university degree), earn an associate degree (two-year degree), prepare for a career, or upgrade skills. The college offers degrees and certificates in more than 100 areas of study. Allan Hancock College is well-known for its English as a second language program, its professional theatre program, and for providing superior support services for its students, including counseling and tutoring. </p>
  </div>
  <div class="col-12 col-md-4">
    <div class="fakeimg"></div>
    <h3>A College for the Community</h3>
    <p>In every sense, Allan Hancock College is a college for the community. Over 98 percent of its students come from the local area. The college puts great emphasis on the success of its students and challenges them to excel. In return, Hancock students consistently enjoy one of the best, if not the best, acceptance rates to University of California and California State University campuses, including Cal Poly, San Luis Obispo, and UCSB.</p>
  </div>
  <div class="col-12 col-md-4">
    <div class="fakeimg"></div>
    <h3>Athletics</h3>
    <p>Hancock’s well known and much accomplished athletic program offers intercollegiate football, basketball, soccer, tennis, baseball, softball, golf, volleyball, cross country, and track and field.</p>
    <p><a class="more-arrow" href="/public_affairs/about-long.php">Read more about Allan Hancock College</a></p>
  </div>
</div>
 
       
@endsection
  



@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('locations')  
true
@endsection

@section('content-header')  
true
@endsection

