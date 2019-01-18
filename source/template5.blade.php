@extends('_layouts.master')

@section('pagetitle')
Template 5
@endsection

@section('content-header-img')
https://virtual.github.io/allanhancock/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Templates</a></li>
    <li><a aria-current="page" href="#">Template 5</a></li>
  </ol>
@endsection
 
 
@section('content') 

@include('_partials/nav-tab')
      
       
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

