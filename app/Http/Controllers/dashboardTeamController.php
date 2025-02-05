<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class dashboardTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataTeam', [
            'teams' => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' =>'required|max:255',
            'slug' => 'required|unique:teams',
            'jabatan' => 'required',
            'foto'=>'required|image|file'
        ]);

        if($request->file('foto')){
            $validateData['foto'] = $request->file('foto')->store('post-image');
        }

        Team::create($validateData);
        return redirect('/dashboard/data-team')->with('succes', 'Data Anggota Team Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.detailRempahDashboard', [
            'team' => $team
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.editTeam', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $rules = [
            'nama' =>'required|max:255',
            'jabatan' => 'required',
            'foto'=>'required'
        ];

        if ($request->slug != $team->slug ){
            $rules['slug'] = 'required|unique:teams';
        }

        $validateData = $request->validate($rules);

        Team::create($validateData);
        return redirect('/dashboard/data-team')->with('succes', 'Data Anggota Team Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        Team::destroy($team->id);
        return redirect('/dashboard/data-team')->with('succes', 'Data Anggota Team Berhasil Di Hapus');
    }
}
