<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MyCourse;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user()->id;
        $datas = Course::whereNotExists(function ($query) use ($user) {
            $query->select('*')
            ->from('my_courses')
            ->whereRaw('my_courses.course_id = courses.id')
            ->where('my_courses.user_id', $user);
        })->get();

        return view('courses', ['datas' => $datas]);
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
            'enroll' => 'required',
            'course' => 'required',
        ]);

        $course = Course::where('enroll', $request->enroll)
                ->where('course', $request->course)    
                ->first();

        if(!$course){
            return redirect('courses')->with(session()->flash('messages', [
                'message' => 'Penambahan Course Gagal',
                'notif' => 'alert alert-danger'
            ]));
        }

        MyCourse::create([
            'user_id' => auth()->user()->id,
            'course_id' => $course->id
        ]);

        return redirect('courses')->with(session()->flash('messages', [
            'message' => 'Penambahan Berhasil',
            'notif' => 'alert alert-success'
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
