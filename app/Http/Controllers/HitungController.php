<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HitungController extends Controller
{
    public function hitung()
    {
        $data = DB::table('detils')
        ->select(DB::raw('akun_id,SUM(jumlah_detil) as jumlah'))
        ->groupBy('akun_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('akuns')
              ->where('id', $dat->akun_id)
              ->update(['jumlah_akun' => $dat->jumlah]);
        }
        return $data;
    }

    public function hitung_sub_kom()
    {
        $data = DB::table('akuns')
        ->select(DB::raw('subkom_id,SUM(jumlah_akun) as jumlah'))
        ->groupBy('subkom_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('subkoms')
              ->where('id', $dat->subkom_id)
              ->update(['jumlah_subkom' => $dat->jumlah]);
        }
        return $data;
    }

    public function hitung_kom()
    {
        $data = DB::table('subkoms')
        ->select(DB::raw('komponen_id,SUM(jumlah_subkom) as jumlah'))
        ->groupBy('komponen_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('komponens')
              ->where('id', $dat->komponen_id)
              ->update(['jumlah_komponen' => $dat->jumlah]);
        }
        return $data;
    }

    public function hitung_ro()
    {
        $data = DB::table('komponens')
        ->select(DB::raw('ro_id,SUM(jumlah_komponen) as jumlah'))
        ->groupBy('ro_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('ros')
              ->where('id', $dat->ro_id)
              ->update(['jumlah_ro' => $dat->jumlah]);
        }
        return $data;
    }
    
    public function hitung_kro()
    {
        $data = DB::table('ros')
        ->select(DB::raw('kro_id,SUM(jumlah_ro) as jumlah'))
        ->groupBy('kro_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('kros')
              ->where('id', $dat->kro_id)
              ->update(['jumlah_kro' => $dat->jumlah]);
        }
        return $data;
    }
    
    public function hitung_kegiatan()
    {
        $data = DB::table('kros')
        ->select(DB::raw('kegiatan_id,SUM(jumlah_kro) as jumlah'))
        ->groupBy('kegiatan_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('kegiatans')
              ->where('id', $dat->kegiatan_id)
              ->update(['jumlah_kegiatan' => $dat->jumlah]);
        }
        return $data;
    }
    
    public function hitung_program()
    {
        $data = DB::table('kegiatans')
        ->select(DB::raw('program_id,SUM(jumlah_kegiatan) as jumlah'))
        ->groupBy('program_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('programs')
              ->where('id', $dat->program_id)
              ->update(['jumlah_program' => $dat->jumlah]);
        }
        return $data;
    }
    
    public function hitung_satker()
    {
        $data = DB::table('programs')
        ->select(DB::raw('satker_id,SUM(jumlah_program) as jumlah'))
        ->groupBy('satker_id')
        ->get();
        foreach($data as $dat)
        {
            $affected = DB::table('satkers')
              ->where('id', $dat->satker_id)
              ->update(['jumlah_satker' => $dat->jumlah]);
        }
        return $data;
    }

    public function hitung_tanggal()
    {
        $data = DB::table('sp2ds')
        ->get();
        foreach($data as $dat)
        {
            return Carbon::createFromFormat('Y-m-d', $dat->tgl_sp2d);
        }
        return $data;
    }
}
