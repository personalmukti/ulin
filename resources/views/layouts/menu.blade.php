<li class="nav-header"># Content Management</li>

<li class="nav-item">
    <a href="{{ route('perencanaans.index') }}"
       class="nav-link {{ Request::is('perencanaans*') ? 'active' : '' }}">
        <p>Perencanaan</p>
    </a>
</li>

@if(Auth::user()->role=='admin')
<li class="nav-item">
    <a href="{{ route('desas.index') }}"
       class="nav-link {{ Request::is('desas*') ? 'active' : '' }}">
        <p>Desa</p>
    </a>
</li>

@endif




