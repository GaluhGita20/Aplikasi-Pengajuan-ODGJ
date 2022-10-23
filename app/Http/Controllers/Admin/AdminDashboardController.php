<?php

namespace App\Http\Controllers\Admin;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    //
    public function index(){
        $page = 'dashboard';
        return view('backend.admin.dashboard', compact('page'));
    }

    public function form(){
        $page = 'form';
        return view('backend.admin.form', compact('page'));
    }

    public function obatIndex(){
        $page = 'obat';
        $data = Obat::all();
        return view('backend.admin.obat.index', compact('data','page'));
    }

    public function obatAdd(){
        $page = 'obat';
        return view('backend.admin.obat.add', compact('page'));
    }
    
    public function obatEdit($id){
        $page = 'obat';
        $data = Obat::find($id);
        return view('backend.admin.obat.edit', compact('page', 'data'));
    }

    public function obatSave(Request $request){
        $request->validate([
            'nama_obat' => 'required',
            'konsumsi_perhari' => 'required',
            'desc_obat' => 'required',
            'jenis_obat' => 'required',
        ]);

        Obat::create([
            'nama_obat' => $request->nama_obat,
            'konsumsi_perhari' => $request->konsumsi_perhari,
            'desc_obat' => $request->desc_obat,
            'jenis_obat' => $request->jenis_obat,
        ]);
        return redirect()->route('admin.obat.index');
    }

    public function obatUpdate(Request $request, $id){
        $request->validate([
            'nama_obat' => 'required',
            'konsumsi_perhari' => 'required',
            'desc_obat' => 'required',
            'jenis_obat' => 'required',
        ]);

        $data = Obat::find($id);

        $data->update([
            'nama_obat' => $request->nama_obat,
            'konsumsi_perhari' => $request->konsumsi_perhari,
            'desc_obat' => $request->desc_obat,
            'jenis_obat' => $request->jenis_obat,
        ]);
        return redirect()->route('admin.obat.index');
    }

    public function obatDelete(Request $request, $id){
        $data = Obat::find($id);
        $data->delete();    
        return redirect()->route('admin.obat.index');
    }
}
