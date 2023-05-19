<?php

namespace App\Http\Controllers;

use App\data;
use Illuminate\Http\Request;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if(strlen($katakunci)){
            $data = data::where('id','like',"%$katakunci%")
                    ->orWhere('nama','like',"%$katakunci%")
                    ->orWhere('produk','like',"%$katakunci%")
                    ->orWhere('wilayah','like',"%$katakunci%")
                    ->paginate($jumlahbaris);
        }else{
            $data = data::orderBy('id','desc')->paginate($jumlahbaris);
        }
        return view('data.index')->with('data2', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $request->validate([
            'id'=>'required|numeric|unique:data,id',
            'nama'=>'required',
            'produk'=>'required',
            'wilayah'=>'required',
        ],[
            'id.required'=>'ID wajib diisi',
            'id.numeric'=>'ID wajib dalam angka',
            'id.unique'=>'ID yang diisi sudah ada',
            'nama.required'=>'NAMA wajib diisi',
            'produk.required'=>'PRODUK wajib diisi',
            'wilayah.required'=>'wilayah wajib diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'nama'=>$request->nama,
            'produk'=>$request->produk,
            'wilayah'=>$request->wilayah,
        ];
        data::create($data);
        return redirect()->to('data')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data2 = data::where('id',$id)->first();
        return view('data.edit')->with('data', $data2);
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
        $request->validate([
            'nama'=>'required',
            'produk'=>'required',
            'wilayah'=>'required',
        ],[
            'nama.required'=>'NAMA wajib diisi',
            'produk.required'=>'PRODUK wajib diisi',
            'wilayah.required'=>'WILAYAH wajib diisi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'produk'=>$request->produk,
            'wilayah'=>$request->wilayah,
        ];
        data::where('id',$id)->update($data);
        return redirect()->to('data')->with('success', 'Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        data::where('id', $id)->delete();
        return redirect()->to('data')->with('success', 'Berhasil menghapus data');
    }
}
