<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'John Doe', 'age' => 20, 'grade' => 'A'],
            ['name' => 'Jane Smith', 'age' => 22, 'grade' => 'B'],
            ['name' => 'Emily Johnson', 'age' => 19, 'grade' => 'A'],
        ];

        return view('student', compact('students'));
    }
}