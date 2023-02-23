<div class="mt-5">
<table class="table">
 <thead class="bg-success text-white fw-bold">
    <th>Pakage Name</th>
    <th>pakage Price</th>
    <th>Description</th>
    <th>Pakage Days</th>
    <th>Pakage Image</th>
    <th>Edit</th>
    <th>Delete</th>
 </thead>
 <tbody>
 @foreach ($pakages as $product)
    <tr>
    <td class="align-middle">{{$product->pakageName}}</td>
    <td class="align-middle">$ {{$product->price}}</td>
    <td class="align-middle">{{$product->Description}}</td>
    <td class="align-middle">{{$product->totalDays}} days</td>
    <td class="align-middle"><img src="{{ asset('uploads/' .$product->pakageImage) }}" class="img-thumbnail" height="50" width="50"></td>
    <td><a href="{{route('pakages.edit',$product->id)}}" class="btn btn-light">Edit</a></td> 
</tr>
 @endforeach
 </tbody>
</table>
<div class="d-flex">
    <div class="mx-auto">
        {!! $pakages->links() !!}
    </div>
</div>
</div>