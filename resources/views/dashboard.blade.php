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
                    <img src="https://source.unsplash.com/700x500" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->courses->course }}</h5>
                        <p class="card-text">dasdsa</p>
                        <a href="#" class="btn btn-primary d-flex justify-content-center">Enter</a>
                    </div>
                </div>
            @endforeach
        </div>

        <h1 class="mt-5">Pending Task</h1>
        <div class="mt-3">
            <div class="card mb-4">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between;">
                        <h2>Matematika</h2>
                        <h6>12:00 - 14:00</h6>
                    </div>
                    <p>Soal halaman 15 bagian A dan B</p>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Enter</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="card mb-4">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between;">
                        <h2>Matematika</h2>
                        <h6>12:00 - 14:00</h6>
                    </div>
                    <p>Soal halaman 15 bagian A dan B</p>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Enter</a>
                </div>
            </div>
        </div>

    </div>


</body>

</html>
