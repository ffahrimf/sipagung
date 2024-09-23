<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;


class MasterBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bantuan = Bantuan::orderBy('jenis', 'asc')->get();

        return view('master.bantuan.bantuan', [
            'bantuan' => $bantuan
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.bantuan.bantuan-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis' => 'required|max:40|unique:t_bantuan',
        ]);

        $bantuan = Bantuan::create($request->all());

        Alert::success('Success', 'Jenis Bantuan has been saved !');
        return redirect('/mbantuan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_bantuan)
{
    $bantuan = Bantuan::findOrFail($id_bantuan);
    $bantuanList = Bantuan::orderBy('jenis', 'asc')->get(); // Ambil daftar jenis bantuan

    return view('master.bantuan.bantuan-edit', [
        'bantuan' => $bantuan,
        'bantuanList' => $bantuanList, // Kirimkan ke view
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_bantuan)
    {
        $validated = $request->validate([
            'jenis' => 'required|max:40|unique:t_bantuan,jenis,' . $id_bantuan . ',id_bantuan'
        ]);

        $bantuan = Bantuan::findOrFail($id_bantuan);
        $bantuan->update($validated);

        Alert::info('Success', 'Jenis Bantuan has been updated !');
        return redirect('/mbantuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_bantuan)
    {
        try {
            $deletedbantuan = Bantuan::findOrFail($id_bantuan);

            $deletedbantuan->delete();

            Alert::error('Success', 'Jenis Bantuan has been deleted !');
            return redirect('/mbantuan');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, Jenis Bantuan already used !');
            return redirect('/mbantuan');
        }
    }
}
