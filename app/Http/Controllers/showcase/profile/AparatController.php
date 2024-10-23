<?php

namespace App\Http\Controllers\showcase\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class AparatController extends Controller
{

    public function index()
    {
        return view('showcase.profile.aparat');
    }
}
