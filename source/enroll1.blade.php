@extends('_layouts.master')

@section('pagetitle')
Enroll 1
@endsection
 
@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb2')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 
  <h2 class="pt-4 text-center">What type of student are you?</h2>
  <p class="pb-3 text-center">Choose from below and find out the next steps to apply and start taking classes at AHC.</p>

  @include('_partials/cardgrid')
@endsection
  

@section('locations')  
true
@endsection 

@section('content-header')  
true
@endsection

@section('custom-h1')  
<h1><span class="text-secondary large font-weight-normal">Apply to</span><br/> Allan Hancock<br/> College</h1>
@endsection 
