<?php

namespace App\Actions\Student;

use App\Models\Student;

class CreateStudent
{
    public static function create($request)
    {
        return Student::create($request->validated());
    }
}
