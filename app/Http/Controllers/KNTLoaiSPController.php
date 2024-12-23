<?php

namespace App\Http\Controllers;

use App\Models\LoaiSPModel;
use Illuminate\Http\Request;

class KNTLoaiSPController extends Controller
{
    public function show(){
        $list = LoaiSPModel::all();
        return view('kntloaisanpham.kntdanhsach', ['kntdanhsach' => $list]);
    }
    public function create(){
        return view('kntloaisanpham.kntthem');
    }
    public function store(Request $request){
        $request->validate([
            'kntMaLoai'=> 'required',
            'kntTenLoai'=>'required',
            'kntStatus'=>'required|in:0,1',
        ]);
        $data = $request -> only('kntMaLoai', 'kntTenLoai', 'kntStatus');
        LoaiSPModel::create($data);
        return redirect('/kntloaisanpham');
    }
    public function edit($id){
        $select = LoaiSPModel::where('id', $id)->first();
        return view('kntloaisanpham.kntsua', ['kntdanhsach' => $select]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'kntMaLoai'=> 'required',
            'kntTenLoai'=>'required',
            'kntStatus'=>'required|in:0,1',
        ]);
        $data = $request->only(['kntMaLoai', 'kntTenLoai', 'kntStatus']);
        LoaiSPModel::where('id', $id)->update($data);
        return redirect('/kntloaisanpham');
    }
    public function delete($id){
        LoaiSPModel::where('id', $id)->delete();
        return view('kntloaisanpham.kntdanhsach');
    }
}
