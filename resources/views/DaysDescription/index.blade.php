@extends('admin.layouts.admin-dash-layout')
@section('title',"Add Days Descriptions")
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
    <!-- header -->
    <h1 class="text-center">Add Days Description</h1>

    <!-- form to insert days -->
    <form action="{{route ('dayDesc.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">

            <h3 class="btn btn-success text-right" onclick="addTextBox()">Add Days</h3>
        </div>
        <div class="mb-3">
            <label for="exampleInputquantity" class="form-label">Pakage Name:&nbsp;&nbsp;</label>
            <select name="Pakage_id" class="px-4 p-1">
                <option>Select Pakages</option>
                @foreach($data as $row)
                <option value="{{$row->id}}">{{$row->pakageName}}</option>
                @endforeach
            </select>
            @error('pakage_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputprice" class="form-label">Day 1</label>
            <input type="text" class="form-control" id="day" name="DayDescription[0]" />
            @error('DayDesc')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div id="daysdetail"></div>
        <button type="submit" class="btn btn-success mt-5">Submit</button>
</div>
</form>
<script src="{{url('js/addTextBox.js')}}"></script>
@endsection