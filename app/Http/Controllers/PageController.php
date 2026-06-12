<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Database\QueryException;

class PageController extends Controller
{
    public function home()
    {
        try {
            $featuredMajors = Major::query()
                ->whereIn('name', [
                    'Rekayasa Perangkat Lunak',
                    'Teknik Mekatronika',
                    'Teknik Kendaraan Ringan',
                ])
                ->take(3)
                ->get();
        } catch (QueryException) {
            $featuredMajors = collect();
        }

        return view('home', compact('featuredMajors'));
    }

    public function about()
    {
        return view('about');
    }

    public function product()
    {
        try {
            $majors = Major::query()
                ->orderBy('category')
                ->orderBy('name')
                ->get();
        } catch (QueryException) {
            $majors = collect();
        }

        return view('product', compact('majors'));
    }

    public function major(Major $major)
    {
        return view('major', compact('major'));
    }

    public function contact()
    {
        return view('contact');
    }
}
