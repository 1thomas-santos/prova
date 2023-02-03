<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {

        $information = Aula::all();

        return view('dashboard', compact('information'));
    }
}
