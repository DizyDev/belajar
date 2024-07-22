<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function coba()
    {
        $nama = 'Dwi';
        $data = ['nama' => $nama];
        return view('coba.halo',$data);
    }

}
