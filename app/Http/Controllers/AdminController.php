<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showDataKriteria()
    {
        return view('admin.data-kriteria');
    }

    public function showDataAlternatif()
    {
        $data = DB::table('tbl_alternatif')->get();
        return view('admin.data-alternatif', compact('data'));
    }

    public function showAHPHasilAlternatif()
    {
        $data = DB::table('tbl_alternatif')->get();
        return view('admin.ahp-hasil-alternatif', compact('data'));
    }

    public function showAHPPerangkingan()
    {
        $tbl_antar_kriteria = DB::table('tbl_antar_kriteria')->first();
        $tbl_jumlah_tanggungan = DB::table('tbl_jumlah_tanggungan')->first();
        $tbl_pekerjaan_kepala_keluarga = DB::table('tbl_pekerjaan_kepala_keluarga')->first();
        $tbl_pendidikan_kepala_keluarga = DB::table('tbl_pendidikan_kepala_keluarga')->first();
        $tbl_sumber_air = DB::table('tbl_sumber_air')->first();
        $data = DB::table('tbl_alternatif')->get();

        return view('admin.ahp-perangkingan', compact('tbl_antar_kriteria', 'data'));
    }

    public function showMetodeVIKOR()
    {
        $bobot = DB::table('tbl_bobot')->first();
        $data = DB::table('tbl_alternatif')->get();


        $C1 = DB::table('tbl_alternatif')
            ->select('ha_pp')
            ->get();
        $C2 = DB::table('tbl_alternatif')
            ->select('ha_pkrkk')
            ->get();
        $C3 = DB::table('tbl_alternatif')
            ->select('ha_jt')
            ->get();
        $C4 = DB::table('tbl_alternatif')
            ->select('ha_pddkk')
            ->get();
        $C5 = DB::table('tbl_alternatif')
            ->select('ha_sa')
            ->get();
        $C1Value = array();
        $C2Value = array();
        $C3Value = array();
        $C4Value = array();
        $C5Value = array();
        foreach ($C1 as $key => $value) {
            array_push($C1Value, $value->ha_pp);
        }
        foreach ($C2 as $key => $value) {
            array_push($C2Value, $value->ha_pkrkk);
        }
        foreach ($C3 as $key => $value) {
            array_push($C3Value, $value->ha_jt);
        }
        foreach ($C4 as $key => $value) {
            array_push($C4Value, $value->ha_pddkk);
        }
        foreach ($C5 as $key => $value) {
            array_push($C5Value, $value->ha_sa);
        }


        return view('admin.vikor', compact('bobot','data', 'C1Value', 'C2Value', 'C3Value', 'C4Value', 'C5Value'));
    }

    public function showGrafikPerbandingan()
    {
        return view('admin.grafik-perbandingan');
    }

    public function showAHP()
    {
        return view('admin.ahp');
    }

    public function showAHPPerbandinganAntarKriteria()
    {
        $data = DB::table('tbl_antar_kriteria')->first();
        return view('admin.matriks.antar-kriteria', compact('data'));
    }

    public function showAHPPerbandinganJumlahTanggungan()
    {
        $data = DB::table('tbl_jumlah_tanggungan')->first();
        return view('admin.matriks.jumlah-tanggungan', compact('data'));
    }

    public function showAHPPerbandinganPekerjaanKepalaKeluarga()
    {
        $data = DB::table('tbl_pekerjaan_kepala_keluarga')->first();
        return view('admin.matriks.pekerjaan-kepala-keluarga', compact('data'));
    }

    public function showAHPPerbandinganPendidikanKepalaKeluarga()
    {
        $data = DB::table('tbl_pendidikan_kepala_keluarga')->first();
        return view('admin.matriks.pendidikan-kepala-keluarga', compact('data'));
    }

    public function showAHPPerbandinganPenghasilanPerbulan()
    {
        $data = DB::table('tbl_penghasilan_perbulan')->first();
        return view('admin.matriks.penghasilan-perbulan', compact('data'));
    }

    public function showAHPPerbandinganSumberAir()
    {
        $data = DB::table('tbl_sumber_air')->first();
        return view('admin.matriks.sumber-air', compact('data'));
    }

    public function showTambahDataAlternatif()
    {
        return view('admin.tambah-data-alternatif');
    }

    public function showDataPengguna()
    {
        $data = DB::table('users')->get();
        return view('admin.data-pengguna', compact('data'));
    }

    public function showUbahDataAlternatif($id)
    {
        $data = DB::table('tbl_alternatif')->where('id', $id)->first();
        return view('admin.ubah-data-alternatif', compact('data'));
    }

    public function deleteDataPengguna($id)
    {
        try {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function deleteDataAlternatif($id)
    {
        try {
            DB::table('tbl_alternatif')->where('id', $id)->delete();
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }


    // Method Post

    public function postAHPPerbandinganAntarKriteria(Request $request)
    {
        try {
            DB::table('tbl_antar_kriteria')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPPerbandinganJumlahTanggungan(Request $request)
    {
        try {
            DB::table('tbl_jumlah_tanggungan')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPPerbandinganPekerjaanKepalaKeluarga(Request $request)
    {
        try {
            DB::table('tbl_pekerjaan_kepala_keluarga')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPPerbandinganPendidikanKepalaKeluarga(Request $request)
    {
        try {
            DB::table('tbl_pendidikan_kepala_keluarga')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPPerbandinganPenghasilanPerbulan(Request $request)
    {
        try {
            DB::table('tbl_penghasilan_perbulan')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPPerbandinganSumberAir(Request $request)
    {
        try {
            DB::table('tbl_sumber_air')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postTambahDataAlternatif(Request $request)
    {
        try {
            DB::table('tbl_alternatif')
                ->insert([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'ha_pp' => $request->ha_pp,
                    'ha_pkrkk' => $request->ha_pkrkk,
                    'ha_jt' => $request->ha_jt,
                    'ha_pddkk' => $request->ha_pddkk,
                    'ha_sa' => $request->ha_sa,
                ]);
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postAHPHasilAlternatif(Request $request)
    {
        try {
            DB::table('tbl_alternatif')
                ->updateOrInsert(
                [
                    'id_alternatif' => $request->id_alternatif
                ],
                [
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat
                ]);
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postVikorBobot(Request $request)
    {
        try {
            DB::table('tbl_bobot')->where('id', 1)->update($request->all());
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }

    public function postUbahDataAlternatif($id, Request $request)
    {
        try {
            DB::table('tbl_alternatif')->where('id', $id)->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'ha_pp' => $request->ha_pp,
                'ha_pkrkk' => $request->ha_pkrkk,
                'ha_jt' => $request->ha_jt,
                'ha_pddkk' => $request->ha_pddkk,
                'ha_sa' => $request->ha_sa,
            ]);
            return redirect()->back()->with(['status' => "success"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => "failed"]);
        }
    }
}
