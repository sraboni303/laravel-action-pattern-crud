<?php
namespace App\Actions\Student;

class UpdateStudent
{
    public static function update($request, $student)
    {
        return $student->update($request->validated());
    }
}
