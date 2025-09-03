<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseClass;
use App\Models\MyCourse;
use App\Models\PracticeForm;
use App\Models\userAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($idCourse)
    {
        $title = Course::where('id', $idCourse)->first();

        $datas = PracticeForm::where('user_id', auth()->user()->id)
                ->where('course_id', $idCourse)->get();

        $userAnswers = userAnswer::where('user_id', auth()->user()->id)
                    ->where('course_id', $idCourse)
                    ->get();
                    
                    
        return view('course.index', ['title' => $title, 'datas' => $datas, 'userAnswers' => $userAnswers]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_answer' => 'required',
            'course_id' => 'required',
            'task_content' => 'required',
            'learning' => 'required',
            'practice_id' => 'required',
        ]);


        $userAnswer = userAnswer::create([
            'course_id' => $request->course_id,
            'user_id' => auth()->user()->id,
            'learning' => $request->learning,
            'practice_id' => $request->practice_id,
            'user_answer' => $request->user_answer,
            'task_content' => $request->task_content
        ]);

        if ($request->hasFile('user_answer')) {
            $file = $request->file('user_answer');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('answer', $fileName, 'public'); 
            $userAnswer->user_answer = $fileName;
            $userAnswer->save();
        }

        return redirect('course.index')->with(session()->flash('messages', [
            'message' => 'Berhasil Menambahkan Jawaban',
            'notif' => 'alert alert-success'
        ]));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseClass $courseClass)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseClass $courseClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseClass $courseClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        userAnswer::find($id)->delete();
        return redirect()->back();

    }
}
