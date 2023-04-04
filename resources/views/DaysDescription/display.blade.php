@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Days Descriptions")
@section('content')

<div class="container-fluid">
   <h1>Display Days Descriptions</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>pakage name</th>
            <th>Day Number</th>
            <th>Day Description</th>
            <th>Edit</th>
            <th>Delete</th>
         </thead>
         <tbody>
            @foreach ($data as $day)

            <tr>
               <td class="align-middle">{{$day->pakage?->pakageName}}</td>
               <td class="align-middle">{{$day->days}}</td>
               <td class="align-middle">{{ $day->DayDescription }}</td>
               <td><a href="{{route('dayDesc.edit',$day->day_description_id)}}" class="btn btn-light">Edit</a></td>
               <td>
                  <form action="{{route('dayDesc.delete',$day->day_description_id)}}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-light" onclick="return confirm('Are you sure you want to delete')"> Delete
                     </button>
                  </form>
               </td>

            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="d-flex">
         <div class="mx-auto">
            {!! $data->links() !!}
         </div>
      </div>
   </div>
</div>
<script src="{{url('js/changebtn.js')}}"></script>
@endsection