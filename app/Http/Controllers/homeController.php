<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Rempah;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('Home', [
            'rempahs' => Rempah::all(),
            'teams' => Team::all()
        ]);
    }
}
