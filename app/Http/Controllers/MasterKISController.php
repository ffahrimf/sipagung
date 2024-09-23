<?php

namespace App\Http\Controllers;

use App\Models\KIS;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;


class MasterKISController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kis = KIS::orderBy('jenis', 'asc')->get();

        return view('master.kis.kis', [
            'kis' => $kis
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.kis.kis-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis' => 'required|max:40|unique:t_kis',
            'kategori' => 'required|max:40',
            'keterangan' => 'required|max:40',
        ]);

        $kis = KIS::create($request->all());

        Alert::success('Success', 'KIS has been saved !');
        return redirect('/mkis');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_kis)
{
    $kis = KIS::findOrFail($id_kis);
    $kisList = KIS::orderBy('jenis', 'asc')->get(); // Ambil daftar jenis kis

    return view('master.kis.kis-edit', [
        'kis' => $kis,
        'kisList' => $kisList, // Kirimkan ke view
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_kis)
    {
        $validated = $request->validate([
            'jenis' => 'required|max:40|unique:t_kis,jenis,' . $id_kis . ',id_kis',
            'kategori' => 'required|max:40',
            'keterangan' => 'required|max:40',
        ]);

        $kis = KIS::findOrFail($id_kis);
        $kis->update($validated);

        Alert::info('Success', 'KIS has been updated !');
        return redirect('/mkis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_kis)
    {
        try {
            $deletedkis = KIS::findOrFail($id_kis);

            $deletedkis->delete();

            Alert::error('Success', 'KIS has been deleted !');
            return redirect('/mkis');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, KIS already used !');
            return redirect('/mkis');
        }
    }
}
