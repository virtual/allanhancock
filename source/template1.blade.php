@extends('_layouts.master')

@section('pagetitle')
Template 1
@endsection

@section('content-header-img')
/resources/img/stock/alexis-brown-85793-unsplash.jpg
@endsection


@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Templates</a></li>
    <li><a class="active" aria-current="page" href="#">Template1</a></li>
  </ol>
@endsection
   

 
@section('content') 
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat ultricies mauris ac efficitur. Donec.</p>
@endsection
  



@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('locations')  
true
@endsection
