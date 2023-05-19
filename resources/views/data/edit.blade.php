@extends('layout.template') 
<!-- START FORM -->
@section('konten')


<form action='{{url('data/'.$data->id)}}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('data') }}' class="btn btn-secondary"> kembali</a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                {{$data->id}}
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $data->nama}}" id="nama">
            
            </div>
        </div>

        <div class="mb-3 row">
            <label for="produk" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='produk' value="{{ $data->produk}}" id="produk">
            
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wilayah" class="col-sm-2 col-form-label">wilayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='wilayah' value="{{ $data->wilayah}}" id="wilayah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wilayah" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
   
@endsection
