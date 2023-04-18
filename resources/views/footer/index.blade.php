<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Footer</title>
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
        <h1 class="text-center">Edit Footer</h1>
        <form action="{{ route('footer.update',$footer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="facebook" class="form-label">Location</label>
                <input type="text" name="Location" class="form-control" value="{{ $footer->Location }}">
                @error('Location')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label"> Telephone</label>
                <input type="text" name="Telephone" class="form-control" value="{{ $footer->Telephone }}">
                @error('Telephone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="MailId" class="form-label">MailId</label>
                <input type="text" name="MailId" class="form-control" value="{{ $footer->MailId }}">
                @error('MailId')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="PhoneNumber" class="form-label">Phone number</label>
                <input type="text" name="PhoneNumber" class="form-control" value="{{ $footer->PhoneNumber }}">
                @error('PhoneNumber')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <button type="submit" class="btn btn-success"><a href="{{URL::to('/footer') }}"></a> Go Back</button>
        </form>
    </div>
</body>

</html>