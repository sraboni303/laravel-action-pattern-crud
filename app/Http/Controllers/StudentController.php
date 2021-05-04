<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        return $request;
    }
}
