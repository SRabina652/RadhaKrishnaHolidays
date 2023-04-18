@extends('admin.layouts.admin-dash-layout')
@section('title',"Display user Details")
@section('content')
<div class="container-fluid">
   <h1>Display user Data</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>User Name</th>
            <th>User Email</th>
            <th>Status</th>
            <th>Edit</th>
         </thead>
         <tbody>
            <tr>
               <td class="align-middle">{{ $users->name }}</td>
               <td class="align-middle">{{ $users->email }}</td>
               <td class="align-middle">{{ $users->status == '1'?'Admin':'User'}}</td>
               <td><a href="{{ route('user.edit',$users->id) }}" class="btn btn-light">Edit</a></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection