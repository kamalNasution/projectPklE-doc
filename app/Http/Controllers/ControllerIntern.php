<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Intern;

class ControllerIntern extends Controller
{
  public function store(){
   $data = new Intern;
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
     $data['intern'] = Intern::all();
     return view('inboxintern',$data);
 }

 public function show($id){
   $data['intern1'] =Intern::where('id',[$id])->get();
   return view('inboxidintern', $data);
 }

 public function preview($id){
   $data['intern1'] =Intern::where('id',[$id])->get();
   return view('internpreview', $data);
 }
 public function hapus($id){
   Intern::where('id',[$id])->delete();
   $data['intern'] = Intern::all();
   return View('inboxintern',$data);
 }
 public function ubah ($id){
   $data = Intern::find($id);
   $data->kepada = Input::get('kepada',false);
   $data->dari = Input::get('dari',false);
   $data->no = Input::get('no',false);
   $data->hal = Input::get('hal',false);
   $data->tanggal = Input::get('tanggal',false);
   $data->isi = Input::get('isi',false);
   $data->save();

   return redirect('dashboard/inbox/intern');
 }
}
