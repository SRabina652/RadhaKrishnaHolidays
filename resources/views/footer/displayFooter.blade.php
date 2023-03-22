@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Footer Details")
@section('content')
<div class="container-fluid">
   <h1>Display Footer Data</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Location</th>
            <th>Telephone</th>
            <th>MailId</th>
            <th>PhoneNumber</th>
            <th>Edit</th>
         </thead>
         <tbody>
         @foreach ($footer as $footerData)
            <tr>
               <td class="align-middle">{{ $footerData->Location }}</td>
               <td class="align-middle">{{ $footerData->Telephone }}</td>
               <td class="align-middle">{{ $footerData->MailId }}</td>
               <td class="align-middle">{{ $footerData->PhoneNumber }}</td>
               <td><a href="{{ route('footer.edit',$footerData->id) }}" class="btn btn-light">Edit</a></td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="d-flex">
            <div class="mx-auto">
                {!! $footer->links() !!}
            </div>
        </div>
   </div>
</div>
@endsection