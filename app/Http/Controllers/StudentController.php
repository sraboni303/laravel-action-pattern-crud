<?php

namespace App\Http\Controllers;

use App\Actions\Student\CreateStudent;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        $created = CreateStudent::create($request);

        if($created){
            session()->flash('message', 'Student Added Successfuly...');
        }else{
            session()->flash('message', 'Something went wrong...');
        }
        return back();
    }
}
