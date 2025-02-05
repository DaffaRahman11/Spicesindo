<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Rempah;
use Illuminate\Http\Request;

class dashboardRempahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataRempah', [
            'rempahs' => Rempah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createRempah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'namaRempah' =>'required|max:255',
            'slug' => 'required|unique:rempahs',
            'detailRempah' => 'required',
            'fotoRempah'=>'required|image|file'
        ]);

        if($request->file('fotoRempah')){
            $validateData['fotoRempah'] = $request->file('fotoRempah')->store('post-image');
        }

        Rempah::create($validateData);
        return redirect('/dashboard/data-rempah')->with('succes', 'Data Rempah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rempah $rempah)
    {
        return view('admin.detailRempahDashboard', [
            'rempah' => $rempah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rempah $rempah)
    {
        return view('admin.editRempah', [
            'rempah' => $rempah,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rempah $rempah)
    {
        $rules = [
            'namaRempah' =>'required|max:255',
            'detailRempah' => 'required',
            'fotoRempah'=>'required'
        ];

        if ($request->slug != $rempah->slug ){
            $rules['slug'] = 'required|unique:rempahs';
        }

        $validateData = $request->validate($rules);

        Rempah::create($validateData);
        return redirect('/dashboard/data-rempah')->with('succes', 'Data Rempah Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rempah $rempah)
    {
        Rempah::destroy($rempah->id);
        return redirect('/dashboard/data-rempah')->with('succes', 'Data Rempah Berhasil Di Hapus');
    }
    
    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(Rempah::class, 'slug', $request->namaRempah);
        return response()->json(['slug' => $slug]);
    }
}
