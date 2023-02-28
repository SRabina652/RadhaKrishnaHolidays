@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Footer Details")
@section('content')
<div class="container-fluid">
   <h1>Display Footer Data</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Instagram</th>
            <th>Facebook</th>
            <th>WhatsApp</th>
            <th>Twitter</th>
            <th>phone_number</th>
            <th>Edit</th>
         </thead>
         <tbody>
            <tr>
               <td class="align-middle">{{ $footer->facebook }}</td>
               <td class="align-middle">{{ $footer->instagram }}</td>
               <td class="align-middle">{{ $footer->phone_number }}</td>
               <td class="align-middle">{{ $footer->Twitter }}</td>
               <td class="align-middle">{{ $footer->WhatsApp}}</td>
               <td><a href="{{ route('footer.edit',$footer->id) }}" class="btn btn-light">Edit</a></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection