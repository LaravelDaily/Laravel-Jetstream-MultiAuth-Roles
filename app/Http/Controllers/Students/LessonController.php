<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function index()
    {
        return view('student.lessons.index');
    }

}
