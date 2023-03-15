@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Pakages")
@section('content')
<div class="container mt-1">
@if($success = \Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{$success}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <h3>Display Products</h3>
@if($pakages)
<x-display-pakages :pakages="$pakages"/> 
@endif
</div>
</div>
</div>
@endsection