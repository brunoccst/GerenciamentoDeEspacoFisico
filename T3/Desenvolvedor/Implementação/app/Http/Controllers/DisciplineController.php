<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Http\Requests;
use DisciplineRepository;

class DisciplineController extends Controller
{
    private $disciplineRepository;

    public function __construct()
    {
        $this->disciplineRepository = new DisciplineRepository();
        $this->middleware('auth');
    }

    public function index()
    {
        $disciplines = $this->disciplineRepository->all();
        return view('discipline.list', compact('disciplines'));
    }

    public function create()
    {
        return view('discipline.create');
    }

    public function store(Requests\CreateDisciplineRequest $request)
    {
        $this->disciplineRepository->create($request->all());
        $this->log('discipline', 'create');
        return redirect('disciplines');
    }

    public function edit(Discipline $discipline)
    {
        return view('discipline.edit', compact('discipline'));
    }

    public function update(Discipline $discipline, Requests\UpdateDisciplineRequest $request)
    {
        $discipline->update($request->all());
        $this->log('discipline', 'update');
        return redirect('disciplines');
    }

    public function destroy(Discipline $discipline)
    {
        $discipline->delete();
        $this->log('discipline', 'delete');
        return redirect('disciplines');
    }
}
