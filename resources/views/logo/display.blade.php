@extends('admin.layouts.admin-dash-layout')
@section('title',"Display Logo Details")
@section('content')
<div class="container-fluid">
   <h1>Display Logo Data</h1>
   <div class="mt-5">
      <table class="table">
         <thead class="bg-success text-white fw-bold">
            <th>Text Logo</th>
            <th>Image Logo</th>
            <th>Edit</th>
         </thead>
         <tbody>
            <tr>
               <td class="align-middle">{{ $logo->TextLogo }}</td>
               <td class="align-middle"><img src="{{ asset('uploads/' .$logo->ImageLogo)}}" class="img-thumbnail" height="50" width="50"></td>
               <td><a href="{{ route('logo.edit',$logo->id) }}" class="btn btn-light">Edit</a></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection