<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        $nama = 'Wafiq Wardatul Khairani';

        $projects = Project::all();

        return view('public.home', compact('nama', 'projects'));
    }
}
