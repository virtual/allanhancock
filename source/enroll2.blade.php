@extends('_layouts.master')

@section('pagetitle')
First-time college students
@endsection
 


@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 
<!-- ! Two-column snippet -->
<div class="row">
  <div class="col-12 col-md-6"><p>Whether you want to earn degree or certificate, prepare to transfer or embark on a career, AHC gives you the place to start. Follow these 7 steps to begin your journey of higher education at AHC.</p></div>
  <div class="col-12 col-md-6"></div>
</div>
<!-- ! End Two-column snippet -->
     
@include('_partials/fancy-list')
       
@endsection
  

@section('locations')  
true
@endsection 

