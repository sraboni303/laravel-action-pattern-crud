<?php
namespace App\Actions\Student;

use App\Models\Student;

class DeleteStudent
{
    public static function delete($student)
    {
        return $student->delete();
    }
}
