<?php

namespace App\Http\Controllers;

use App\CourseClass;
use App\Discipline;
use App\Grade;
use App\Http\Requests;
use App\Room;

class GradeController extends Controller
{
    private $gradeRepository;
    private $disciplineRepository;
    private $courseClassRepository;
    private $roomRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->gradeRepository = new \GradeRepository();
        $this->disciplineRepository = new \DisciplineRepository();
        $this->courseClassRepository = new \CourseClassRepository();
        $this->roomRepository = new \RoomRepository();
    }

    public function index()
    {
        $grades = $this->gradeRepository->all();
        return view('grade.list', compact('grades'));
    }

    public function create()
    {
        $disciplines = $this->disciplineRepository->all();
        $courseClasses = $this->courseClassRepository->all();
        $rooms = $this->roomRepository->all();
        return view('grade.create', compact('disciplines', 'courseClasses', 'rooms'));
    }

    public function store(Requests\CreateGradeRequest $request)
    {
        $grade = new Grade();
        $grade->discipline()->associate(Discipline::find($request->get('discipline_id')));
        $grade->courseClass()->associate(CourseClass::find($request->get('course_class_id')));
        $grade->room()->associate(Room::find($request->get('room_id')));
        $grade->save();
        return redirect('grades');
    }

    public function edit(Grade $grade)
    {
        return view('grade.edit', compact('grade'));
    }

    public function update(Grade $grade, Requests\UpdateGradeRequest $request)
    {
        $grade->discipline()->associate(Discipline::find($request->get('discipline_id')));
        $grade->courseClass()->associate(CourseClass::find($request->get('course_class_id')));
        $grade->room()->associate(Room::find($request->get('room_id')));
        $grade->save();
        return redirect('grades');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect('grades');
    }
}
