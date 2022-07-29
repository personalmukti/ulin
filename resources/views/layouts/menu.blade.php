<li class="nav-header"># Utama</li>


@if(Auth::user()->role=='admin')
<li class="nav-item">
    <a href="{{ route('desas.index') }}"
       class="nav-link {{ Request::is('desas*') ? 'active' : '' }}">
        <p>@lang('models/desas.singular')</p>
    </a>
</li>

@endif




<li class="nav-item">
    <a href="{{ route('perencanaans.index') }}"
       class="nav-link {{ Request::is('perencanaans*') ? 'active' : '' }}">
        <p>@lang('models/perencanaans.singular')</p>
    </a>
</li>

<!-- <li class="nav-item">
    <a href="{{ route('dokumentasis.index') }}"
       class="nav-link {{ Request::is('dokumentasis*') ? 'active' : '' }}">
        <p>@lang('models/dokumentasis.singular')</p>
    </a>
</li> -->

<li class="nav-item">
    <a href="{{ route('kelembagaans.index') }}"
       class="nav-link {{ Request::is('kelembagaans*') ? 'active' : '' }}">
        <p>@lang('models/kelembagaans.singular')</p>
    </a>
</li>

