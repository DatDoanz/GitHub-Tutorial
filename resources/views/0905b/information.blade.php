<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit prduct</title>
  </head>
  <body>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12">
                <h2>Customer Information</h2>
                <a href="{{url('chagepassword')}}" class="btn btn-primary">Change Password</a>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('save-information')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" name="id" class="form-control"
                                value="{{$data->customersID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                               value="{{$data->customersFullname}}">
                    </div>
                    <div class="md-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control"
                               value="{{$data->customersAddress}}">
                    </div>
                    <div class="md-3">
                        <label for="text" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control"
                               value="{{$data->customersEmail}}">
                    </div>
                    <div class="md-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control"
                               value="{{$data->customersPhone}}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('list')}}" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>