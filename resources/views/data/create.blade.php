@extends('layout.template') 
<!-- START FORM -->
@section('konten')


<form action='{{url('data')}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('data') }}' class="btn btn-secondary"> kembali</a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' id="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama'  id="nama">
            
            </div>
        </div>
        <div class="mb-3 row">
            <label for="produk" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='produk'  id="produk">
            
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='wilayah' id="wilayah">
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
