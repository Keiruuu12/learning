<?php

namespace App\Http\Controllers;

use App\Models\CourseClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($nameCourse)
    {
        $title = Str::title($nameCourse);
        return view('course.index', ['title' => $title]);
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
        //
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
    public function destroy(CourseClass $courseClass)
    {
        //
    }
}
