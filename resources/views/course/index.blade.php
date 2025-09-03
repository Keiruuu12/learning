<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title->course }}</title>
</head>

<body>
    @extends('partials.navbar')
    <div class="container" style="margin-top: 10vh">
        <div class="d-flex justify-content-between mb-4">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 7%">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a href="{{ route('dashboard') }}">
                <button class="btn btn-outline-secondary">
                    <i data-feather="arrow-left"></i> Back
                </button>
            </a>
        </div>

        @foreach ($datas as $data)
        <div class="card mb-3">
            <h5 class="card-header">learning {{ $data->learning }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $data->type }}</h5>
                <p class="card-text">{{ $data->task_content }}</p>

                @if (strtolower($data->type) === 'practice')    
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $data->id}}">Assignment</button>
                
                <!-- Modal -->
                <div class="modal fade" id="{{ $data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ $data->id}}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="{{ $data->learning }}Label">Assignment</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('course.store', $title) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" type="string" id="course_id" name="course_id" value="{{ $title->id }}" readonly hidden>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="string" id="learning" name="learning" value="{{ $data->learning }}" readonly hidden>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="string" id="task_content" name="task_content" value="{{ $data->task_content }}" readonly hidden>
                                    </div>            
                                    <div class="mb-3">
                                        <input class="form-control" type="string" id="practice_id" name="practice_id" value="{{ $data->id }}" readonly hidden>
                                    </div>            
                                    
                                    @foreach ($userAnswers->where('learning', $data->learning) as $userAnswer)
                                    <div class="mb-3">
                                        <label for="your_answer" class="form-label">your answer before</label>
                                        <input class="form-control" type="string" id="your_answer" name="your_answer" value="{{ $userAnswer->user_answer }} " readonly>
                                    </div>
                                    @endforeach

                                    <div class="mb-3">
                                        <label for="user_answer" class="form-label">Input Your New Answer File</label>
                                        <input class="form-control" type="file" id="user_answer" name="user_answer">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                        @if ($userAnswers->where('learning', $data->learning)->isNotEmpty() )
                                        <form action="{{ url('/delete-answer/' . $title->course ) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                        </form>
                                        @endif

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
