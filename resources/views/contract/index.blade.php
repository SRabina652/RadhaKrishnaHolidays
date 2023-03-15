@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Customer Queries")
@section('content')
<style>
   .custome1{
      background-color: #9e9e9e;
   }
</style>

<div class="container-fluid">
   <h1>Display Customer Queries</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Queries</th>
            <th>Statius</th>
         </thead>
         <tbody>
            @foreach ($contract as $contact)
            <tr>
               <td class="align-middle">{{ $contact->name }}</td>
               <td class="align-middle">{{ $contact->email }}</td>
               <td class="align-middle">{{ $contact->message }}</td>
               <td class="align-middle">
               <button id="btnchange" class="btn rounded text-white custome1">Pending...</button>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="d-flex">
         <div class="mx-auto">
            {!! $contract->links() !!}
         </div>
      </div>
   </div>
</div>
<script src="{{url('js/changebtn.js')}}"></script>
@endsection