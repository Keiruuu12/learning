<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning</title>
</head>

<body>
    @extends('partials.navbar')
    <div class="container mt-5">

        {{-- Notif alert if login success --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 7%">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1>Dashboard</h1>
        <div class="row">
            @foreach ($datas as $data)
                <div class="card mt-4 mx-3" style="width: 18rem;">
                    <img src="img/major.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->course->course }}</h5>
                        <p class="card-text">{{ $data->course->lecture }}</p>
                        <a href="course/{{ $data->course->id }}" class="btn btn-primary d-flex justify-content-center">Enter</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
