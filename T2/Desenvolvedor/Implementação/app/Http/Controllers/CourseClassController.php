<?php

namespace App\Http\Controllers;

use App\CourseClass;
use CourseClassRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseClassController extends Controller
{
    private $courseClassRepository;

    public function __construct()
    {
        $this->courseClassRepository = new CourseClassRepository();
        $this->middleware('auth');
    }

    public function index()
    {
        $courseClasses = $this->courseClassRepository->all();
        return view('course-class.list', compact('courseClasses'));
    }

    public function create()
    {
        return view('course-class.create');
    }

    public function store(Requests\CreateCourseClassRequest $request)
    {
        $this->courseClassRepository->create($request->all());
        return redirect('course-classes');
    }

    public function edit(CourseClass $course_class)
    {
        return view('course-class.edit', compact('course_class'));
    }

    public function update(CourseClass $course_class, Requests\UpdateCourseClassRequest $request)
    {
        $course_class->update($request->all());
        return redirect('course-classes');
    }

    public function destroy(CourseClass $course_class)
    {
        $course_class->delete();
        return redirect('course-classes');
    }
}
