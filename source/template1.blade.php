@extends('_layouts.master')

@section('pagetitle')
Template 1
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Templates</a></li>
    <li><a aria-current="page" href="#">Template 1</a></li>
  </ol>
@endsection
   
@section('main-sidebar-content2')
mew
@endsection
 
@section('content') 

      <p class="text-primary lead"><strong>Your journey starts here.</strong></p>
 
      @include ('_partials/accordion')
 
      <h3><em>College Now!</em> Requirements:
      </h3>
      
      <ul>
         
         <li>Be at least junior or senior high school status.</li>
         
         <li>Reside and be enrolled in Santa Barbara or San Luis Obispo county high schools or
            home schools.
         </li>
         
         <li>Students who have previously attended AHC must have a 2.0 cumulative GPA at AHC to
            continue in the program.
         </li>
         
         <li>Meet with their high school counselor to discuss eligibility, academic requirements,
            and the rigor of college coursework.
         </li>
         
         <li>Complete the <em>College Now!</em> Petition for Enrollment form; and obtain necessary signatures (high school principal/designee
            and parent/guardian).
         </li>
         
         <li>Enroll in a maximum of six (6) units per semester.</li>
         
         <li>Submit a completed AHC <em>College Now!</em> Petition for Enrollment form and unofficial high school transcripts prior to enrollment
            to the AHC Admissions &amp; Records office or at the Santa Ynez Valley, VAFB, or Lompoc
            Valley Center offices.
         </li>
         
      </ul>
      
@include('_partials/headers')
       
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

