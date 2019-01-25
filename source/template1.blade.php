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

      <p class="text-primary lead">Your journey starts here.</p>
 
      @include ('_partials/accordion')
 
      <h2>2018-2019</h2>
      <p><strong>SUMMER 2018</strong> <br />Admission Application: Oct 2, 2017 <br />Online Class Search: April 9, 2018 <br />Priority Registration begins: April 30, 2018 <br />Classes begin: June 11, 2018</p>
      <p><strong>FALL 2018</strong> <br />Admission Application: Oct 2, 2017 <br />Online Class Search: April 9, 2018 <br />Priority Registration begins: April 30, 2018 <br />Classes begin: August 2, 2018</p>
      
 
       
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

