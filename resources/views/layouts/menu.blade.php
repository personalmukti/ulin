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








<li class="nav-item">
    <a href="{{ route('perencanaans.index') }}"
       class="nav-link {{ Request::is('perencanaans*') ? 'active' : '' }}">
        <p>@lang('models/perencanaans.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dokumentasis.index') }}"
       class="nav-link {{ Request::is('dokumentasis*') ? 'active' : '' }}">
        <p>@lang('models/dokumentasis.plural')</p>
    </a>
</li>

