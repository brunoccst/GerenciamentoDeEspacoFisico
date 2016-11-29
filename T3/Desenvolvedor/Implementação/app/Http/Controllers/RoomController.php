<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Room;
use RoomRepository;

class RoomController extends Controller
{
    private $roomRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->roomRepository = new RoomRepository();
    }

    public function index()
    {
        $rooms = $this->roomRepository->all();
        return view('room.list', compact('rooms'));
    }

    public function create()
    {
        return view('room.create');
    }

    public function store(Requests\CreateRoomRequest $request)
    {
        $this->roomRepository->create($request->all());
        $this->log('room', 'create');
        return redirect('rooms');
    }

    public function edit(Room $room)
    {
        return view('room.edit', compact('room'));
    }

    public function update(Room $room, Requests\UpdateRoomRequest $request)
    {
        $room->update($request->all());
        $this->log('room', 'update');
        return redirect('rooms');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        $this->log('room', 'delete');
        return redirect('rooms');
    }
}
