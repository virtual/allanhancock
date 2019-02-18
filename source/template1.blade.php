@extends('_layouts.master')

@section('pagetitle')
Template 1
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
   
@section('main-sidebar-content2')
mew
@endsection
 
@section('lead')
<p class="text-primary lead">Your journey starts here.</p>
@endsection

@section('content') 
 
 
      @include ('_partials/accordion')
 
      <h2>2018-2019</h2>
      <p><strong class="text-uppercase">Summer 2018</strong> <br />Admission Application: Oct 2, 2017 <br />Online Class Search: April 9, 2018 <br />Priority Registration begins: April 30, 2018 <br />Classes begin: June 11, 2018</p>
      <p><strong class="text-uppercase">Fall 2018</strong> <br />Admission Application: Oct 2, 2017 <br />Online Class Search: April 9, 2018 <br />Priority Registration begins: April 30, 2018 <br />Classes begin: August 2, 2018</p>
      
 
       
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

