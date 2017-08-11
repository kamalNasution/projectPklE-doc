<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\SuratEdaran;

class ControllerSuratEdaran extends Controller
{
  public function store(){
    $data = new SuratEdaran;
    $data->kepada = Input::get('kepada',false);
    $data->dari = Input::get('dari',false);
    $data->no = Input::get('no',false);
    $data->hal = Input::get('hal',false);
    $data->tanggal = Input::get('tanggal',false);
    $data->isi = Input::get('isi',false);
    $data->save();

    return redirect('/dasbor');

  }
  public function read(){
    $data['surat_edaran'] = SuratEdaran::all();
    return view('inboxsuratedaran',$data);
  }
  public function show($id){
    $data['surat_edaran1'] = SuratEdaran::where('id',[$id])->get();
    return view('inboxidsuratedaran', $data);
  }
  public function preview($id){
    $data['surat_edaran1'] = SuratEdaran::where('id',[$id])->get();
    return view('edaranpreview', $data);
  }

  public function hapus($id){
    SuratEdaran::where('id',[$id])->delete();
    $data['surat_edaran'] = SuratEdaran::all();
    return view('inboxsuratedaran',$data);
  }
  public function ubah ($id){
    $data = SuratEdaran::find($id);
    $data->kepada = Input::get('kepada',false);
    $data->dari = Input::get('dari',false);
    $data->no = Input::get('no',false);
    $data->hal = Input::get('hal',false);
    $data->tanggal = Input::get('tanggal',false);
    $data->isi = Input::get('isi',false);
    $data->save();

    return redirect('dashboard/inbox/suratedaran');
  }
}
