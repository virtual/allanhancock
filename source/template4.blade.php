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

