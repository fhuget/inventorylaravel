@extends('layouts.adminmain')
@section('title', 'Tambah Data Barang')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Barang <small>Add Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('barang.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
           <div class="card-body">
            <form method="post" action="{{ route('barang.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Barang</label>
                        <input type="text" name="nama_barang" class="form-control input-lg" />
                </div>
              <div class="form-group">
                <label >Ruangan</label>
                    <select class="form-control input-lg"  name="ruangan_id">
                        @foreach( $dataruangan as $ruangan)
                        <option value="" hidden>Pilih Ruangan</option>
                        <option value="{{$ruangan->id_ruangan}}">{{ $ruangan->nama_ruangan }}</option>
                        @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label>Total</label>
                    <input type="text" name="total" class="form-control input-lg" />
            </div>
            <div class="form-group">
                <label>Rusak</label>
                    <input type="text" name="broken" class="form-control input-lg" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden>
            </div>
            
            
            <div class="form-group">
               <input type="submit" name="add" class="btn btn-primary" value="Add" />
            </div>
      </form>
    </div></div></div></div></section>
    @endsection()