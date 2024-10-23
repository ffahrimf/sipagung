<?php

namespace App\Http\Controllers\showcase\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{VisiMisi};
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class VisiMisiController extends Controller
{

    public function index()
    {

        $visiMisi = VisiMisi::all();

        return view('showcase.profile.visi-misi', [
            'visiMisi' => $visiMisi
        ]);
    }
}
