@extends('layouts.adminmain')
@section('title', 'Ruangan')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Ruangan</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
    @if($message = Session::get('success'))
          <div class="alert alert-success">
            <p> {{ $message }} </p>
          </div>
        @endif
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            <a href="{{ route('ruangan.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('ruangan.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Ruangan</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($dataRuangan as $key => $ruangan)
                <tr>
                  <td>{{ $dataRuangan->firstItem() + $key }}</td>
                  <td>{{ $ruangan->nama_ruangan }}</td>
                  <td>{{ $ruangan->jurusan->nama_jurusan }}</td>
                  <td>
                    <a href="{{ route('ruangan.edit', ['id_ruangan' => $ruangan->id_ruangan]) }}">
                      <button type="button" class="btn btn-sm btn-warning">Edit</button>
                    </a>
                   <a href="{{ route('ruangan.delete', ['id_ruangan' => $ruangan->id_ruangan]) }}"
                    onclick="return confirm('Delete data?');" 
                    >
                      <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                    </a>
                   </td>
                </tr>
               @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
              </tbody>
            </table>

          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              
            </nav>
          </div>
        </div>
      </div>  
  </div>
  {!! $dataRuangan->links() !!}
</section>
@endsection()