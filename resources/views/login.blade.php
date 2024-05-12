<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body>

  <div class="row justify-content-center mt-5">
    <div class="col-md-4">

      {{-- Notif alert if login unsuccess --}}
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    </div>
  </div>
    <div class="container" style="margin-top: 10vh;">
      <div class="card text-center">
        <div class="card-header">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://source.unsplash.com/1300x250" class="d-block w-20" alt="https://source.unsplash.com/1440x250">
            </div>
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">Login Learning</h5>
          <form action="/login" method="POST">
            @csrf
            <div class="mb-3 row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email Account Learning" autofocus required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Your Password Account" required>
              </div>  
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="card-footer text-body-secondary">
          Enjoy For This Project
        </div>
      </div>
    </div>



    <script src="js/bootstrap.js"></script>
</body>
</html>