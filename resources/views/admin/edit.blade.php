@extends('admin.layouts.admin-dash-layout')
@section('title',"Edit Pakages")
@section('content')
<div class="container mt-2 px-1">
@if($success = \Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{$success}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <h1 class="text-center">Edit Pakagses</h1>
  <form action="{{route ('pakages.edit',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Pakage Name</label>
      <input type="text" class="form-control" name="pakageName" value="{{$product->pakageName}}">
      @error('pakageName')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputprice" class="form-label">Pakage Price</label>
      <input type="number" class="form-control" name="price" value="{{$product->price}}" />
      @error('price')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputquantity" class="form-label">Time of Pakage</label>
      <input type="number" class="form-control" name="totalDays" value="{{$product->totalDays}}">
      @error('totalDays')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputImage" class="form-label">Pakage Image</label>
      <input type="file" class="form-control" name="pakageImage" value="{{asset('uploads/'.$product->pakageImage)}}">
    <img src="{{asset('uploads/'.$product->pakageImage)}}" width="60px" height="60px">
      @error('pakageImage')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Short Description</label>
      <textarea type="text" class="form-control" name="Description" value="{{$product->Description}}" rows="4" cols="40"></textarea>
      @error('Description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
@endsection