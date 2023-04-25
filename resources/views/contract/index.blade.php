@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Customer Queries")
@section('content')
<style>
   .custome1{
      background-color: #9e9e9e;
   }
   .ddown{
      padding: 5px;
      border: 0px;
   }
</style>

<div class="container-fluid">
   <h1>Display Customer Queries</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Country</th>
            <th>Queries</th>
            <th>Change Status</th>
            <th>Save status</th>
            <th>display status</th>
         </thead>
         <tbody>
            @foreach ($contract as $contact)
            <tr>
               <td class="align-middle">{{ $contact->name }}</td>
               <td class="align-middle">{{ $contact->email }}</td>
               <td class="align-middle">{{ $contact->country }}</td>
               <td class="align-middle">{{ $contact->message }}</td>
               <form action="{{route('contact.update',$contact->id)}}" method="POST">
               @csrf
                     <td class="align-middle">
                     <select name="replyStatus" class="ddown">
                        <option selected="selected" value="pending">Pending</option>
                        <option value="Replied">Replied</option>
                     </select>
                     </td>
                     <td>
                     <button class="btn btn-warning text-white">Save</button>
                     </td>
               </form>
               <td class="align-middle">{{$contact->replyStatus}}</td>
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