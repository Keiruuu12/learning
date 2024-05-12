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
        <div class="row">
            @foreach ($datas as $data)
                <div class="card mt-4 mx-3" style="width: 18rem;">
                    <img src="https://source.unsplash.com/700x500?{{ $data->course }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->course }}</h5>
                        <p class="card-text">{{ $data->lecturer }}</p>
                        <button type="button" class="btn btn-primary col-sm-4"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll</button>

                        <!-- Modal Bootstrap-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Input Enroll</label>
                                                <input type="text" class="form-control" id="recipient-name">
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
