<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    @extends('partials.navbar')

    <div class="container" style="margin-top: 4%">
        <h1>Profile Page</h1>
        <div class="card mt-2">
            <div class="card-body">
                <img src="img/profile.jpeg" class="rounded mt-3 mx-auto d-block" alt="...">
                @foreach ($datas as $data)
                <div class="mb-3 mt-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $data->name }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-10">
                      <input type="string" readonly class="form-control-plaintext" id="npm" value="{{ $data->id_number }}">
                    </div>
                </div>
                <div class="mb-3 mt-3 row">
                    <label for="faculty" class="col-sm-2 col-form-label">Faculty</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="faculty" value="{{ $data->faculty }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="major" class="col-sm-2 col-form-label">Major</label>
                    <div class="col-sm-10">
                      <input type="string"  readonly class="form-control-plaintext" id="major" value="{{ $data->major }}">
                    </div>
                </div>
                <div class="mb-3 mt-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" readonly class="form-control-plaintext" id="email" value="{{ $data->email }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">address</label>
                    <div class="col-sm-10">
                      <input type="string"  readonly class="form-control-plaintext" id="address" value="{{ $data->address }}">
                    </div>
                </div>
                @endforeach
                <a href="#" class="btn btn-primary d-flex justify-content-center">Edit Profile</a>
            </div>
          </div>

    </div>

</body>
</html>