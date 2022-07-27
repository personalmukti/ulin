<li class="nav-header"># Utama</li>


@if(Auth::user()->role=='admin')
<li class="nav-item">
    <a href="{{ route('desas.index') }}"
       class="nav-link {{ Request::is('desas*') ? 'active' : '' }}">
        <p>Desa</p>
    </a>
</li>

@endif

<li class="nav-header"># Pengaturan</li>




