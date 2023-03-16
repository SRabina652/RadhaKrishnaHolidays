<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Days Description</title>
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
    <!-- header -->
    <h1 class="text-center">Add Exclude Description</h1>

    <!-- form to insert days -->
    <form action="{{route ('exclude.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">

            <h3 class="btn btn-success text-right" onclick="addTextBox()">Add exclude</h3>
        </div>
        <div class="mb-3">
            <label for="exampleInputquantity" class="form-label">Pakage Name:&nbsp;&nbsp;</label>
            <select name="pakage_id" class="px-4 p-1">
                <option>Select Pakages</option>
                @foreach($excludedata as $row)
                <option value="{{$row->id}}">{{$row->pakageName}}</option>
                @endforeach
            </select>
            @error('pakage_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputprice" class="form-label">Exclude 1</label>
            <input type="text" class="form-control" id="day" name="ExcludePoints[0]" />
            
        </div>

        <div id="daysdetail"></div>
        <button type="submit" class="btn btn-success mt-5">Submit</button>
</div>
</form>
<script src="{{url('js/excludeAddTextBox.js')}}"></script>
</body>
</html>
