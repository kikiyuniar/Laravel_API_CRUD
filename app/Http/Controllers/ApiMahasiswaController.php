<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ApiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_data_mahasiswa()
    {
        return response()->json(Mahasiswa::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert_data_mahasiswa(Request $request)
    {
        $insert = new Mahasiswa();
        $insert->nama_mahasiswa = $request->namaMahasiswa;
        $insert->jenis_kelamin = $request->jenisKelamin;
        $insert->alamat = $request->alamat;
        $insert->save();

        return response(
            [
                'status' => 'OK',
                'message' => 'Data berhasil',
                'data' => $insert
            ],
            200
        );
    }

    public function update_data_mahasiswa(Request $request, $id)
    {
        $cek = Mahasiswa::firstWhere('npm_mahasiswa', $id);

        if ($cek) {
            // $insert = new Mahasiswa();
            $update = Mahasiswa::find($id);
            $update->nama_mahasiswa = $request->namaMahasiswa;
            $update->jenis_kelamin = $request->jenisKelamin;
            $update->alamat = $request->alamat;
            $update->save();

            return response(
                [
                    'status' => 'OK',
                    'message' => 'Data berhasil di update',
                    'data' => $update
                ],
                200
            );
        } else {
            return response(
                [
                    'status' => 'OK',
                    'message' => 'Data tidak berhasil di update'
                ],
                404
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_data_mahasiswa($id)
    {
        $cek = Mahasiswa::firstWhere('npm_mahasiswa', $id);

        if ($cek) {
            $update = Mahasiswa::destroy($id);
            return response(
                [
                    'status' => 'OK',
                    'message' => 'Data berhasil di hapus'
                ],
                200
            );
        } else {
            return response(
                [
                    'status' => 'OK',
                    'message' => 'Data tidak berhasil di hapus'
                ],
                404
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
