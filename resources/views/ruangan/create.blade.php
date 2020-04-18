@extends('layouts.adminmain')
@section('title', 'Tambah Data Ruangan')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Ruangan <small>Add Data</small></h1>
  </div>

  <div class="section-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('ruangan.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
           <div class="card-body">
  <form method="post" action="{{ route('ruangan.store') }}" enctype="multipart/form-data">
       @csrf
           <div class="form-group">
            <label>Ruangan</label>
             <input type="text" name="nama_ruangan" class="form-control input-lg" />
            </div>
              <div class="form-group">
             <label >Jurusan</label>
                <select class="form-control input-lg"  name="jurusan_id">
                    @foreach( $datajurusan as $jur)
                            <option value="" hidden>Pilih Jurusan</option>
                            <option value="{{$jur->id}}">
                                  {{ $jur->nama_jurusan }}
                            </option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
               <input type="submit" name="add" class="btn btn-primary" value="Add" />
            </div>
      </form>
    </div></div></div></div></section>
    @endsection()