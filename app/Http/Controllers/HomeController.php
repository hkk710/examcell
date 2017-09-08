<?php

namespace Examination\Http\Controllers;

use Illuminate\Http\Request;
use Examination\Student;
use Examination\Room;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function postIndex(Request $request) {
        $rooms = Room::inRandomOrder()->get();
        $students = Student::all();
        foreach ($rooms as $room) {
            $room->students()->sync($students->where('room', '=', null)->take($room->strength));
            foreach ($students->where('room', '=', null)->take($room->strength) as $student) {
                $student->room = $room->number;
            }
        }
        return ['hi'];
    }
}
