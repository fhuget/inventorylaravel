<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard">Bernd</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Be</a>
          </div>
          <ul class="sidebar-menu">
            @if(auth()->user()->role == "admin")
              <li class="">
                <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="far fa-square"></i> <span>Fakultas</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('jurusan.index') }}"><i class="far fa-square"></i> <span>Jurusan</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('ruangan.index') }}"><i class="far fa-square"></i> <span>Ruangan</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('barang.index') }}"><i class="far fa-square"></i> <span>Barang</span></a>
              </li>
              @elseif(auth()->user()->role == "staff")
              <li class="">
                <a class="nav-link" href="{{ route('barang.index') }}"><i class="far fa-square"></i> <span>Barang</span></a>
              </li>
              @endif
              
          </ul>
        </aside>
      </div>