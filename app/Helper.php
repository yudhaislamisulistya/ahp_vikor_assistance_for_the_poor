<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Helper{
    public static function getStatusDataAlternatif($nilai)
    {
        $status = "";
        if ($nilai == 5) {
            $status = "Sangat Tinggi";
        }else if ($nilai == 4) {
            $status = "Tinggi";
        }else if ($nilai == 3) {
            $status = "Cukup";
        }else if ($nilai == 2) {
            $status = "Rendah";
        }else if ($nilai == 1) {
            $status = "Sangat Rendah";
        }

        return $status;
    }

    public static function getEigenPenghasilanPerbulan($status)
    {
        $nilai = 0;
        $tbl_penghasilan_perbulan = DB::table('tbl_penghasilan_perbulan')->first();
        // Baris C01
        $c01_c01 = $tbl_penghasilan_perbulan->pp_c01_c01 / $tbl_penghasilan_perbulan->pp_total_c01;
        $c01_c02 = $tbl_penghasilan_perbulan->pp_c01_c02 / $tbl_penghasilan_perbulan->pp_total_c02;
        $c01_c03 = $tbl_penghasilan_perbulan->pp_c01_c03 / $tbl_penghasilan_perbulan->pp_total_c03;
        $c01_c04 = $tbl_penghasilan_perbulan->pp_c01_c04 / $tbl_penghasilan_perbulan->pp_total_c04;
        $c01_c05 = $tbl_penghasilan_perbulan->pp_c01_c05 / $tbl_penghasilan_perbulan->pp_total_c05;
        $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


        // Baris C02
        $c02_c01 = $tbl_penghasilan_perbulan->pp_c02_c01 / $tbl_penghasilan_perbulan->pp_total_c01;
        $c02_c02 = $tbl_penghasilan_perbulan->pp_c02_c02 / $tbl_penghasilan_perbulan->pp_total_c02;
        $c02_c03 = $tbl_penghasilan_perbulan->pp_c02_c03 / $tbl_penghasilan_perbulan->pp_total_c03;
        $c02_c04 = $tbl_penghasilan_perbulan->pp_c02_c04 / $tbl_penghasilan_perbulan->pp_total_c04;
        $c02_c05 = $tbl_penghasilan_perbulan->pp_c02_c05 / $tbl_penghasilan_perbulan->pp_total_c05;
        $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

        // Baris C03
        $c03_c01 = $tbl_penghasilan_perbulan->pp_c03_c01 / $tbl_penghasilan_perbulan->pp_total_c01;
        $c03_c02 = $tbl_penghasilan_perbulan->pp_c03_c02 / $tbl_penghasilan_perbulan->pp_total_c02;
        $c03_c03 = $tbl_penghasilan_perbulan->pp_c03_c03 / $tbl_penghasilan_perbulan->pp_total_c03;
        $c03_c04 = $tbl_penghasilan_perbulan->pp_c03_c04 / $tbl_penghasilan_perbulan->pp_total_c04;
        $c03_c05 = $tbl_penghasilan_perbulan->pp_c03_c05 / $tbl_penghasilan_perbulan->pp_total_c05;
        $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

        // Baris C04
        $c04_c01 = $tbl_penghasilan_perbulan->pp_c04_c01 / $tbl_penghasilan_perbulan->pp_total_c01;
        $c04_c02 = $tbl_penghasilan_perbulan->pp_c04_c02 / $tbl_penghasilan_perbulan->pp_total_c02;
        $c04_c03 = $tbl_penghasilan_perbulan->pp_c04_c03 / $tbl_penghasilan_perbulan->pp_total_c03;
        $c04_c04 = $tbl_penghasilan_perbulan->pp_c04_c04 / $tbl_penghasilan_perbulan->pp_total_c04;
        $c04_c05 = $tbl_penghasilan_perbulan->pp_c04_c05 / $tbl_penghasilan_perbulan->pp_total_c05;
        $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

        // Baris C05
        $c05_c01 = $tbl_penghasilan_perbulan->pp_c05_c01 / $tbl_penghasilan_perbulan->pp_total_c01;
        $c05_c02 = $tbl_penghasilan_perbulan->pp_c05_c02 / $tbl_penghasilan_perbulan->pp_total_c02;
        $c05_c03 = $tbl_penghasilan_perbulan->pp_c05_c03 / $tbl_penghasilan_perbulan->pp_total_c03;
        $c05_c04 = $tbl_penghasilan_perbulan->pp_c05_c04 / $tbl_penghasilan_perbulan->pp_total_c04;
        $c05_c05 = $tbl_penghasilan_perbulan->pp_c05_c05 / $tbl_penghasilan_perbulan->pp_total_c05;
        $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;
        if ($status == 5) {
            $nilai = round($jumlah_baris_c01 / 5, 2);
        }else if ($status == 4) {
            $nilai = round($jumlah_baris_c02 / 5, 2);
        }else if ($status == 3) {
            $nilai = round($jumlah_baris_c03 / 5, 2);
        }else if ($status == 2) {
            $nilai = round($jumlah_baris_c04 / 5, 2);
        }else if ($status == 1) {
            $nilai = round($jumlah_baris_c05 / 5, 2);
        }

        return $nilai;
    }

    public static function getEigenPekerjaanKepalaKeluarga($status)
    {
        $nilai = 0;
        $tbl_pekerjaan_kepala_keluarga = DB::table('tbl_pekerjaan_kepala_keluarga')->first();
        // Baris C01
        $c01_c01 = $tbl_pekerjaan_kepala_keluarga->pkk_c01_c01 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c01;
        $c01_c02 = $tbl_pekerjaan_kepala_keluarga->pkk_c01_c02 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c02;
        $c01_c03 = $tbl_pekerjaan_kepala_keluarga->pkk_c01_c03 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c03;
        $c01_c04 = $tbl_pekerjaan_kepala_keluarga->pkk_c01_c04 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c04;
        $c01_c05 = $tbl_pekerjaan_kepala_keluarga->pkk_c01_c05 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


        // Baris C02
        $c02_c01 = $tbl_pekerjaan_kepala_keluarga->pkk_c02_c01 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c01;
        $c02_c02 = $tbl_pekerjaan_kepala_keluarga->pkk_c02_c02 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c02;
        $c02_c03 = $tbl_pekerjaan_kepala_keluarga->pkk_c02_c03 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c03;
        $c02_c04 = $tbl_pekerjaan_kepala_keluarga->pkk_c02_c04 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c04;
        $c02_c05 = $tbl_pekerjaan_kepala_keluarga->pkk_c02_c05 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

        // Baris C03
        $c03_c01 = $tbl_pekerjaan_kepala_keluarga->pkk_c03_c01 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c01;
        $c03_c02 = $tbl_pekerjaan_kepala_keluarga->pkk_c03_c02 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c02;
        $c03_c03 = $tbl_pekerjaan_kepala_keluarga->pkk_c03_c03 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c03;
        $c03_c04 = $tbl_pekerjaan_kepala_keluarga->pkk_c03_c04 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c04;
        $c03_c05 = $tbl_pekerjaan_kepala_keluarga->pkk_c03_c05 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

        // Baris C04
        $c04_c01 = $tbl_pekerjaan_kepala_keluarga->pkk_c04_c01 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c01;
        $c04_c02 = $tbl_pekerjaan_kepala_keluarga->pkk_c04_c02 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c02;
        $c04_c03 = $tbl_pekerjaan_kepala_keluarga->pkk_c04_c03 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c03;
        $c04_c04 = $tbl_pekerjaan_kepala_keluarga->pkk_c04_c04 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c04;
        $c04_c05 = $tbl_pekerjaan_kepala_keluarga->pkk_c04_c05 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

        // Baris C05
        $c05_c01 = $tbl_pekerjaan_kepala_keluarga->pkk_c05_c01 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c01;
        $c05_c02 = $tbl_pekerjaan_kepala_keluarga->pkk_c05_c02 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c02;
        $c05_c03 = $tbl_pekerjaan_kepala_keluarga->pkk_c05_c03 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c03;
        $c05_c04 = $tbl_pekerjaan_kepala_keluarga->pkk_c05_c04 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c04;
        $c05_c05 = $tbl_pekerjaan_kepala_keluarga->pkk_c05_c05 / $tbl_pekerjaan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;
        if ($status == 5) {
            $nilai = round($jumlah_baris_c01 / 5, 2);
        }else if ($status == 4) {
            $nilai = round($jumlah_baris_c02 / 5, 2);
        }else if ($status == 3) {
            $nilai = round($jumlah_baris_c03 / 5, 2);
        }else if ($status == 2) {
            $nilai = round($jumlah_baris_c04 / 5, 2);
        }else if ($status == 1) {
            $nilai = round($jumlah_baris_c05 / 5, 2);
        }

        return $nilai;
    }

    public static function getEigenJumlahTanggungan($status)
    {
        $nilai = 0;
        $tbl_jumlah_tanggungan = DB::table('tbl_jumlah_tanggungan')->first();
        // Baris C01
        $c01_c01 = $tbl_jumlah_tanggungan->jt_c01_c01 / $tbl_jumlah_tanggungan->jt_total_c01;
        $c01_c02 = $tbl_jumlah_tanggungan->jt_c01_c02 / $tbl_jumlah_tanggungan->jt_total_c02;
        $c01_c03 = $tbl_jumlah_tanggungan->jt_c01_c03 / $tbl_jumlah_tanggungan->jt_total_c03;
        $c01_c04 = $tbl_jumlah_tanggungan->jt_c01_c04 / $tbl_jumlah_tanggungan->jt_total_c04;
        $c01_c05 = $tbl_jumlah_tanggungan->jt_c01_c05 / $tbl_jumlah_tanggungan->jt_total_c05;
        $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


        // Baris C02
        $c02_c01 = $tbl_jumlah_tanggungan->jt_c02_c01 / $tbl_jumlah_tanggungan->jt_total_c01;
        $c02_c02 = $tbl_jumlah_tanggungan->jt_c02_c02 / $tbl_jumlah_tanggungan->jt_total_c02;
        $c02_c03 = $tbl_jumlah_tanggungan->jt_c02_c03 / $tbl_jumlah_tanggungan->jt_total_c03;
        $c02_c04 = $tbl_jumlah_tanggungan->jt_c02_c04 / $tbl_jumlah_tanggungan->jt_total_c04;
        $c02_c05 = $tbl_jumlah_tanggungan->jt_c02_c05 / $tbl_jumlah_tanggungan->jt_total_c05;
        $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

        // Baris C03
        $c03_c01 = $tbl_jumlah_tanggungan->jt_c03_c01 / $tbl_jumlah_tanggungan->jt_total_c01;
        $c03_c02 = $tbl_jumlah_tanggungan->jt_c03_c02 / $tbl_jumlah_tanggungan->jt_total_c02;
        $c03_c03 = $tbl_jumlah_tanggungan->jt_c03_c03 / $tbl_jumlah_tanggungan->jt_total_c03;
        $c03_c04 = $tbl_jumlah_tanggungan->jt_c03_c04 / $tbl_jumlah_tanggungan->jt_total_c04;
        $c03_c05 = $tbl_jumlah_tanggungan->jt_c03_c05 / $tbl_jumlah_tanggungan->jt_total_c05;
        $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

        // Baris C04
        $c04_c01 = $tbl_jumlah_tanggungan->jt_c04_c01 / $tbl_jumlah_tanggungan->jt_total_c01;
        $c04_c02 = $tbl_jumlah_tanggungan->jt_c04_c02 / $tbl_jumlah_tanggungan->jt_total_c02;
        $c04_c03 = $tbl_jumlah_tanggungan->jt_c04_c03 / $tbl_jumlah_tanggungan->jt_total_c03;
        $c04_c04 = $tbl_jumlah_tanggungan->jt_c04_c04 / $tbl_jumlah_tanggungan->jt_total_c04;
        $c04_c05 = $tbl_jumlah_tanggungan->jt_c04_c05 / $tbl_jumlah_tanggungan->jt_total_c05;
        $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

        // Baris C05
        $c05_c01 = $tbl_jumlah_tanggungan->jt_c05_c01 / $tbl_jumlah_tanggungan->jt_total_c01;
        $c05_c02 = $tbl_jumlah_tanggungan->jt_c05_c02 / $tbl_jumlah_tanggungan->jt_total_c02;
        $c05_c03 = $tbl_jumlah_tanggungan->jt_c05_c03 / $tbl_jumlah_tanggungan->jt_total_c03;
        $c05_c04 = $tbl_jumlah_tanggungan->jt_c05_c04 / $tbl_jumlah_tanggungan->jt_total_c04;
        $c05_c05 = $tbl_jumlah_tanggungan->jt_c05_c05 / $tbl_jumlah_tanggungan->jt_total_c05;
        $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;
        if ($status == 5) {
            $nilai = round($jumlah_baris_c01 / 5, 2);
        }else if ($status == 4) {
            $nilai = round($jumlah_baris_c02 / 5, 2);
        }else if ($status == 3) {
            $nilai = round($jumlah_baris_c03 / 5, 2);
        }else if ($status == 2) {
            $nilai = round($jumlah_baris_c04 / 5, 2);
        }else if ($status == 1) {
            $nilai = round($jumlah_baris_c05 / 5, 2);
        }

        return $nilai;
    }

    public static function getEigenPendidikanKepalaKekuarga($status)
    {
        $nilai = 0;
        $tbl_pendidikan_kepala_keluarga = DB::table('tbl_pendidikan_kepala_keluarga')->first();
        // Baris C01
        $c01_c01 = $tbl_pendidikan_kepala_keluarga->pkk_c01_c01 / $tbl_pendidikan_kepala_keluarga->pkk_total_c01;
        $c01_c02 = $tbl_pendidikan_kepala_keluarga->pkk_c01_c02 / $tbl_pendidikan_kepala_keluarga->pkk_total_c02;
        $c01_c03 = $tbl_pendidikan_kepala_keluarga->pkk_c01_c03 / $tbl_pendidikan_kepala_keluarga->pkk_total_c03;
        $c01_c04 = $tbl_pendidikan_kepala_keluarga->pkk_c01_c04 / $tbl_pendidikan_kepala_keluarga->pkk_total_c04;
        $c01_c05 = $tbl_pendidikan_kepala_keluarga->pkk_c01_c05 / $tbl_pendidikan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


        // Baris C02
        $c02_c01 = $tbl_pendidikan_kepala_keluarga->pkk_c02_c01 / $tbl_pendidikan_kepala_keluarga->pkk_total_c01;
        $c02_c02 = $tbl_pendidikan_kepala_keluarga->pkk_c02_c02 / $tbl_pendidikan_kepala_keluarga->pkk_total_c02;
        $c02_c03 = $tbl_pendidikan_kepala_keluarga->pkk_c02_c03 / $tbl_pendidikan_kepala_keluarga->pkk_total_c03;
        $c02_c04 = $tbl_pendidikan_kepala_keluarga->pkk_c02_c04 / $tbl_pendidikan_kepala_keluarga->pkk_total_c04;
        $c02_c05 = $tbl_pendidikan_kepala_keluarga->pkk_c02_c05 / $tbl_pendidikan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

        // Baris C03
        $c03_c01 = $tbl_pendidikan_kepala_keluarga->pkk_c03_c01 / $tbl_pendidikan_kepala_keluarga->pkk_total_c01;
        $c03_c02 = $tbl_pendidikan_kepala_keluarga->pkk_c03_c02 / $tbl_pendidikan_kepala_keluarga->pkk_total_c02;
        $c03_c03 = $tbl_pendidikan_kepala_keluarga->pkk_c03_c03 / $tbl_pendidikan_kepala_keluarga->pkk_total_c03;
        $c03_c04 = $tbl_pendidikan_kepala_keluarga->pkk_c03_c04 / $tbl_pendidikan_kepala_keluarga->pkk_total_c04;
        $c03_c05 = $tbl_pendidikan_kepala_keluarga->pkk_c03_c05 / $tbl_pendidikan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

        // Baris C04
        $c04_c01 = $tbl_pendidikan_kepala_keluarga->pkk_c04_c01 / $tbl_pendidikan_kepala_keluarga->pkk_total_c01;
        $c04_c02 = $tbl_pendidikan_kepala_keluarga->pkk_c04_c02 / $tbl_pendidikan_kepala_keluarga->pkk_total_c02;
        $c04_c03 = $tbl_pendidikan_kepala_keluarga->pkk_c04_c03 / $tbl_pendidikan_kepala_keluarga->pkk_total_c03;
        $c04_c04 = $tbl_pendidikan_kepala_keluarga->pkk_c04_c04 / $tbl_pendidikan_kepala_keluarga->pkk_total_c04;
        $c04_c05 = $tbl_pendidikan_kepala_keluarga->pkk_c04_c05 / $tbl_pendidikan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

        // Baris C05
        $c05_c01 = $tbl_pendidikan_kepala_keluarga->pkk_c05_c01 / $tbl_pendidikan_kepala_keluarga->pkk_total_c01;
        $c05_c02 = $tbl_pendidikan_kepala_keluarga->pkk_c05_c02 / $tbl_pendidikan_kepala_keluarga->pkk_total_c02;
        $c05_c03 = $tbl_pendidikan_kepala_keluarga->pkk_c05_c03 / $tbl_pendidikan_kepala_keluarga->pkk_total_c03;
        $c05_c04 = $tbl_pendidikan_kepala_keluarga->pkk_c05_c04 / $tbl_pendidikan_kepala_keluarga->pkk_total_c04;
        $c05_c05 = $tbl_pendidikan_kepala_keluarga->pkk_c05_c05 / $tbl_pendidikan_kepala_keluarga->pkk_total_c05;
        $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;
        if ($status == 5) {
            $nilai = round($jumlah_baris_c01 / 5, 2);
        }else if ($status == 4) {
            $nilai = round($jumlah_baris_c02 / 5, 2);
        }else if ($status == 3) {
            $nilai = round($jumlah_baris_c03 / 5, 2);
        }else if ($status == 2) {
            $nilai = round($jumlah_baris_c04 / 5, 2);
        }else if ($status == 1) {
            $nilai = round($jumlah_baris_c05 / 5, 2);
        }

        return $nilai;
    }

    public static function getEigenSumberAir($status)
    {
        $nilai = 0;
        $tbl_sumber_air = DB::table('tbl_sumber_air')->first();
            // Baris C01
            $c01_c01 = $tbl_sumber_air->sa_c01_c01 / $tbl_sumber_air->sa_total_c01;
            $c01_c02 = $tbl_sumber_air->sa_c01_c02 / $tbl_sumber_air->sa_total_c02;
            $c01_c03 = $tbl_sumber_air->sa_c01_c03 / $tbl_sumber_air->sa_total_c03;
            $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03;


            // Baris C02
            $c02_c01 = $tbl_sumber_air->sa_c02_c01 / $tbl_sumber_air->sa_total_c01;
            $c02_c02 = $tbl_sumber_air->sa_c02_c02 / $tbl_sumber_air->sa_total_c02;
            $c02_c03 = $tbl_sumber_air->sa_c02_c03 / $tbl_sumber_air->sa_total_c03;
            $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03;

            // Baris C03
            $c03_c01 = $tbl_sumber_air->sa_c03_c01 / $tbl_sumber_air->sa_total_c01;
            $c03_c02 = $tbl_sumber_air->sa_c03_c02 / $tbl_sumber_air->sa_total_c02;
            $c03_c03 = $tbl_sumber_air->sa_c03_c03 / $tbl_sumber_air->sa_total_c03;
            $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03;
        if ($status == 4) {
            $nilai = round($jumlah_baris_c01 / 3, 2);
        }else if ($status == 3) {
            $nilai = round($jumlah_baris_c02 / 3, 2);
        }else if ($status == 2) {
            $nilai = round($jumlah_baris_c03 / 3, 2);
        }

        return $nilai;
    }

    public static function getNamaPengguna($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return $data;
    }

    public static function get5DataPengguna()
    {
        $data = DB::table('users')->limit(5)->get();
        return $data;
    }

    public static function get5DataAlternatif()
    {
        $data = DB::table('tbl_alternatif')->limit(5)->get();
        return $data;
    }

    public static function getCountTabel($kolom)
    {
        $data = DB::table($kolom)->get();
        return count($data);
    }



}
