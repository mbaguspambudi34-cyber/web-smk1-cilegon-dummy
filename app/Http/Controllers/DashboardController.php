<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $majorId = $request->query('major_id');
        $search = $request->query('search');

        $majors = Major::withCount('students')->get();
        $totalMajors = $majors->count();
        $totalStudents = Student::count();
        $maleStudents = Student::where('gender', 'Laki-laki')->count();
        $femaleStudents = Student::where('gender', 'Perempuan')->count();
        $topMajor = $majors->sortByDesc('students_count')->first();
        $averageStudentsPerMajor = $totalMajors ? round($totalStudents / $totalMajors, 2) : 0;
        $selectedMajor = $majorId ? $majors->firstWhere('id', (int) $majorId) : null;

        $studentsQuery = Student::with('major')
            ->when($majorId, fn ($query) => $query->where('major_id', $majorId))
            ->when($search, fn ($query) => $query->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%");
            }));

        $students = $studentsQuery->latest()->get();

        return view('dashboard.index', compact(
            'totalStudents',
            'totalMajors',
            'maleStudents',
            'femaleStudents',
            'students',
            'majors',
            'selectedMajor',
            'topMajor',
            'averageStudentsPerMajor',
            'search'
        ));
    }
}
