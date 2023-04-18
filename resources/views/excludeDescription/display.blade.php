<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Exclude Description</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<style>
   .custome1 {
      background-color: #9e9e9e;
   }
</style>

<div class="container mt-5">
    <h1>Display Exclude Descriptions</h1>
    <div class="mt-5">
        <table class="table">
            <thead class="bg-success text-white fw-bold">
                <th>pakage name</th>
                <th>Exclude Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($excludeDataDisplay as $day)
                <tr>
                    <td class="align-middle">{{$day->pakage?->pakageName}}</td>
                    <td class="align-middle">{{$day->ExcludePoints}}</td>
                    <td><a href="{{route('exclude.edit',$day->id)}}" class="btn btn-light">Edit</a></td>
                    <td>
                        <form action="{{route('exclude.delete',$day->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light" onclick="return confirm('Are you sure you want to delete')"> Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            <div class="mx-auto">
                {!! $excludeDataDisplay->links() !!}
            </div>
        </div>

        <div>
            <a href="{{route('pakages.display')}}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>
