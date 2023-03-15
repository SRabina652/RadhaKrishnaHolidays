@extends('admin.layouts.admin-dash-layout')
@section('title',"Add Includes")
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
    <h1 class="text-center">Add Includes</h1>

    <form action="{{route ('include.index')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputquantity" class="form-label">Pakage Name:&nbsp;&nbsp;</label>
        <select name="category_id" id="" class="px-4 p-1">
            @foreach($data as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputprice" class="form-label">Include Description</label>
        <input type="number" class="form-control" name="ProductPrice" value="{{old('ProductPrice')}}" />
        @error('ProductPrice')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
</div>
</form>
@endsection