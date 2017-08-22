<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Surat;
use PDF;



use Illuminate\Http\Request;

class ControllerMemorandum extends Controller
{
     public function store(){
    	$data = new Surat;
    	$data->kepada = Input::get('kepada',false);
    	$data->dari = Input::get('dari',false);
    	$data->no = Input::get('no',false);
    	$data->hal = Input::get('hal',false);
    	$data->tanggal = Input::get('tanggal',false);
    	$data->isi = Input::get('isi',false);
    	$data->save();

    	return redirect('/dashboard');

    	}

    public function read(){
        

        $data['memorandum'] = Surat::all();
        return view('inbox',$data);
    }

    public function show($id){
      $data['memorandum1'] = Surat::where('id',[$id])->get();
      return view('inboxid', $data);
    }

    public function preview($id){
      $data['memorandum1'] = Surat::where('id',[$id])->get();
      return view('inboxpreview', $data);
    }

       public function tampil($id){
      $data['memorandum1'] = Surat::where('id',[$id])->get();
      return view('suratPDF', $data);
    }



    public function hapus($id){
      Surat::where('id',[$id])->delete();
      $data['memorandum'] = Surat::all();
      return View('inbox',$data);
    }

    public function ubah ($id){
      $data = Surat::find($id);
      $data->kepada = Input::get('kepada',false);
    	$data->dari = Input::get('dari',false);
    	$data->no = Input::get('no',false);
    	$data->hal = Input::get('hal',false);
    	$data->tanggal = Input::get('tanggal',false);
    	$data->isi = Input::get('isi',false);
    	$data->save();

      return redirect('dashboard/inbox/memorandum');
    }

     public function pdf(){
      
         $pdf=PDF::loadview('suratPDF');
         return $pdf->download('suratview.pdf');

    }

    public function sent(){
        $data['memorandum'] = Surat::all();
        return view('kirimpesan',$data);
    }

    public function app($id){
         $data = Surat::find($id);
         $data->status = Input::get('status',1);
         $data->save();
         return redirect('dashboard/inbox/memorandum');
    }
}
