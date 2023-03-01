@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Footer Details")
@section('content')
<div class="container-fluid">
   <h1>Display Footer Data</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Queries</th>
         </thead>
         <tbody>
         @foreach ($contract as $contact)
            <tr>
               <td class="align-middle">{{ $contact->name }}</td>
               <td class="align-middle">{{ $contact->email }}</td>
               <td class="align-middle">{{ $contact->message }}</td>  
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection