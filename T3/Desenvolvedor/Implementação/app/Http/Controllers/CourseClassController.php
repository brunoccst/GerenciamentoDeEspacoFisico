<?php

namespace App\Http\Controllers;

use App\CourseClass;
use App\Grade;
use App\Http\Requests;
use CourseClassRepository;

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
        $courseClassesAllocated = CourseClass::has('grades')->get();
        $courseClassesNotAllocated = CourseClass::doesntHave('grades')->get();
        return view('course-class.list', compact('courseClassesAllocated', 'courseClassesNotAllocated'));
    }

    public function create()
    {
        return view('course-class.create');
    }

    public function store(Requests\CreateCourseClassRequest $request)
    {
        $this->courseClassRepository->create($request->all());
        $this->log('courseClass', 'create');
        return redirect('course-classes');
    }

    public function edit(CourseClass $course_class)
    {
        return view('course-class.edit', compact('course_class'));
    }

    public function update(CourseClass $course_class, Requests\UpdateCourseClassRequest $request)
    {
        $course_class->update($request->all());
        $this->log('courseClass', 'update');
        return redirect('course-classes');
    }

    public function destroy(CourseClass $course_class)
    {
        $course_class->delete();
        $this->log('courseClass', 'delete');
        return redirect('course-classes');
    }
}
