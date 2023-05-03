@extends('admin.layouts.admin-dash-layout')
@section('title',"Add Pakages")
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
  <h1 class="text-center">Add Pakages</h1>
  <form action="{{route ('pakages.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Pakage Name</label>
      <input type="text" class="form-control" name="pakageName" value="{{old('pakageName')}}">
      @error('pakageName')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputprice" class="form-label">Pakage Price</label>
      <input type="number" step="any" class="form-control" name="price" value="{{old('price')}}" />
      @error('price')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputquantity" class="form-label">Time of Pakage</label>
      <input type="number" class="form-control" name="totalDays" value="{{old('totalDays')}}">
      @error('totalDays')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputImage" class="form-label">Pakage Image</label>
      <input type="file" class="form-control" name="pakageImage" value="{{old('pakageImage')}}">
      @error('pakageImage')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputImage" class="form-label">Select the type of pakages: </label>
      <br>
      <select name="pakageType" class="ddown pt-2 pb-2 px-5">
        <option selected="selected" value="Normal">Normal pakages</option>
        <option value="Popular">Popular pakages</option>
        <option value="Best">Best pakages</option>
      </select>
    </div>


    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Short Description</label>
      <textarea type="text" class="form-control" name="Description" value="{{old('Description')}}" rows="4" cols="40"></textarea>
      @error('Description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
@endsection