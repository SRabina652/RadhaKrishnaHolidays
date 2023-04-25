<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Products</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-2 px-1">
@if($success = \Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{$success}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <h1 class="text-center">Edit Pakages</h1>
  <form action="{{route ('pakages.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Pakage Name</label>
      <input type="text" class="form-control" name="pakageName" value="{{$product->pakageName}}">
      @error('pakageName')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputprice" class="form-label">Pakage Price</label>
      <input type="number" class="form-control" name="price" value="{{$product->price}}" />
      @error('price')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputquantity" class="form-label">Time of Pakage</label>
      <input type="number" class="form-control" name="totalDays" value="{{$product->totalDays}}">
      @error('totalDays')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputImage" class="form-label">Pakage Image</label>
      <input type="file" class="form-control" name="pakageImage"  value="{{asset('uploads/'.$product->pakageImage)}}">
        <img src="{{asset('uploads/'.$product->pakageImage)}}" width="60px" height="60px">
      @error('pakageImage')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <select name="pakageType" class="ddown">
        <option selected="selected" value="Normal">Normal pakages</option>
        <option value="Popular">Popular pakages</option>
        <option value="Best">Best pakages</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Short Description</label>
      <input type="text" class="form-control" name="Description" value="{{$product->Description}}"></textarea>
      @error('Description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="submit" class="btn btn-success"><a href="{{route('pakages.display') }}"></a> Go Back</button>

  </form>
</div>
</body>
</html>