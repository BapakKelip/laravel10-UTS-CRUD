<?php

namespace App\Http\Controllers;

use App\Models\pesertas;
use App\Http\Requests\StorepesertasRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatepesertasRequest;

class PesertasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesertas.data')->with([
            'pesertas' => pesertas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validated();

        $pesertas = new Pesertas;
        $pesertas->idpesertas = $request->txtidpesertas;
        $pesertas->no_pendaftaran = $request->txtpendaftaran;
        $pesertas->tempat_lahir = $request->txttempatlahir;
        $pesertas->tanggal_lahir = $request->txttanggallahir;
        $pesertas->sarjana = $request->txtsarjana;
        $pesertas->pendidikan_fakultas = $request->txtdakultas;
        $pesertas->pendidikan_universitas = $request->txtuniv;
        $pesertas->organisasi = $request->txtorganisasi;
        $pesertas->keterampilan = $request->txtketerampilan;
        $pesertas->kota = $request->txtkota;
        $pesertas->handphone = $request->txthandphone;
        $pesertas->name = $request->txtname;
        $pesertas->telepon = $request->txtphone;
        $pesertas->alamat = $request->txtalamat;
        $pesertas->jenis_kelamin = $request->txtgender;
        $pesertas->email = $request->txtemail;
        $pesertas->save();

        return redirect('pesertas')->with('msg','Add new Peserta Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(pesertas $pesertas,$idpesertas)
    {
       $data = $pesertas->find($idpesertas);
        // echo $data->allamat;
        return view('pesertas.formedit')->with([
        'idpesertas'=> $idpesertas,
        'txtidpesertas'=> $data->idpesertas,
        'txtpendaftaran'=> $data->no_pendaftaran,
        'txttempatlahir'=> $data->tempat_lahir,
        'txttanggallahir'=> $data->tanggal_lahir,
        'txtsarjana'=> $data->sarjana,
        'txtdakultas'=> $data->pendidikan_fakultas,
        'txtuniv'=> $data->pendidikan_universitas,
        'txtorganisasi'=> $data->organisasi,
        'txtketerampilan'=> $data->keterampilan,
        'txtkota'=> $data->kota,
        'txthandphone'=> $data->handphone,
        'txtname'=> $data->name,
        'txtphone'=> $data->telepon,
        'txtalamat'=> $data->alamat,
        'txtgender'=> $data->jenis_kelamin,
        'txtemail'=> $data->email,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesertas $pesertas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$idpesertas)
    {
        // echo $idpesertas;
        $pesertas = new Pesertas;
        $data = $pesertas->find($idpesertas);
        // $pesertas->idpesertas = $request->txtidpesertas;
        $data->no_pendaftaran = $request->txtpendaftaran;
        $data->tempat_lahir = $request->txttempatlahir;
        $data->tanggal_lahir = $request->txttanggallahir;
        $data->sarjana = $request->txtsarjana;
        $data->pendidikan_fakultas = $request->txtdakultas;
        $data->pendidikan_universitas = $request->txtuniv;
        $data->organisasi = $request->txtorganisasi;
        $data->keterampilan = $request->txtketerampilan;
        $data->kota = $request->txtkota;
        $data->handphone = $request->txthandphone;
        $data->name = $request->txtname;
        $data->telepon = $request->txtphone;
        $data->alamat = $request->txtalamat;
        $data->jenis_kelamin = $request->txtgender;
        $data->email = $request->txtemail;
        $data->save();

        return redirect('pesertas')->with('msg','Data dengan nama ' .$data->name. ' berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesertas $pesertas,$idpesertas)
    {
        $pesertas = new Pesertas;
        $data = $pesertas->find($idpesertas);
        $data->delete();
        return redirect('pesertas')->with('msg','Data dengana nama ' . $data->name . ' Berhasil di hapus');
    }
}
