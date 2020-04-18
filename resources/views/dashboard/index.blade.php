@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
  	 @if(auth()->user()->role == 'admin')
    <h1>Dashboard Admin</h1>
    @else
    <h1>Dashboard Staff</h1>
    @endif
  </div>

  <div class="section-body">

  </div>

</section>
@endsection()