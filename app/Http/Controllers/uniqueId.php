<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class uniqueId extends Controller
{
    //
    function studentId(int $id)
    {
        return $id*10;

    }
}
