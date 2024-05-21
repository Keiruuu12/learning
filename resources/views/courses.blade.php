<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>

<body>
    @extends('partials.navbar')
    <div class="container mt-5">
        <h1>Choose the course</h1>
        @if (session()->has('messages'))
        <div class="{{ session('messages')['notif'] }}">
            {{ session('messages')['message'] }}    
        </div>    
        @endif
        <div class="row">
            @foreach ($datas as $data)
                <div class="card mt-4 mx-3" style="width: 18rem;">
                    <img src="https://source.unsplash.com/700x500?{{ $data->course }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->course }}</h5>
                        <p class="card-text">{{ $data->lecture }}</p>
                        <button type="button" class="btn btn-primary col-sm-4"
                            data-bs-toggle="modal" data-bs-target="#{{ $data->id }}">Enroll</button>

                        <!-- Modal Bootstrap-->
                        <div class="modal fade" id="{{ $data->id }}" tabindex="-1" aria-labelledby="{{ $data->id }}Label"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="{{ $data->id }}Label">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('enroll') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="course" class="col-form-label">Course</label>
                                                <input type="text" class="form-control" id="enroll" name="course" value="{{ $data->course }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="enroll" class="col-form-label">Input Enroll</label>
                                                <input type="text" class="form-control" id="enroll" name="enroll">
                                            </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
