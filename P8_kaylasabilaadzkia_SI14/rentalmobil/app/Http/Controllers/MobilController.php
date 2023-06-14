<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mobil,merk,TipeMobil};

class MobilController extends Controller
{
    // protected $arrayMobil = [];

    function index()
    {
        // $dataMobil = session()->get('dataMobil');
        // return view('mobil.index', compact('dataMobil'));
        $mobilData = Mobil::all();
        return view('pages.mobil.index', ['mobilData' => $mobilData]);
    }

    function create()
    {
        // return view('mobil/form');
        $merkData = Merk::get();
        $tipeMobilData = TipeMobil::get();
        return view('pages.mobil.create', compact('merkData', 'tipeMobilData'));
    }

    function store(Request $request)
    {
        //untuk melakukan validasi data,memastikan data tidak ada yang kosong
        $mobilData = $request->validate ([
            'nama_mobil'=>'required',
            'merk_id'=>'required',
            'cc'=>'required',
            'tahun_mobil'=>'required',
            'nomor_polisi'=>'required',
            'warna'=>'required',
            'foto'=>'required',
            'tipe_mobil_id'=>'required',
        ]);

        //untuk menyimpan data
        Mobil::create($mobilData);

        return redirect()->to('/mobil')->with('success','Data berhasil disimpan');
        // $namaMobil = $request->nama_mobil;
        // $merkMobil = $request->merk_mobil; 
        // $CC = $request->CC;

        // $dataBaru = [
        //     'namaMobil' => $namaMobil,
        //     'merkMobil' => $merkMobil,
        //     'CC' => $CC
        // ];

        // array_push($arrayMobil, $this->$dataBaru);

        // return redirect()->to('/mobil')
        // ->with('dataMobil', $this->arrayMobil);
    }
}
