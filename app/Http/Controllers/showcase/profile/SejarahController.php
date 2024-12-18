<?php

namespace App\Http\Controllers\showcase\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Sejarah};
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class SejarahController extends Controller
{

    public function index()
    {

        $sejarah = Sejarah::all();

        return view('showcase.profile.sejarah', [
            'sejarah' => $sejarah
        ]);
    }
}
