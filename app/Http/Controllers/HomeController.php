<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMKS NURUL JADID',
            'alamat'       => 'Jln.KH Zaini Munim'
        ];
        return view('v_home', $data);
    }
    public function about($id)
    {
        return 'Ini halaman about<br>' . $id;
    }
}
