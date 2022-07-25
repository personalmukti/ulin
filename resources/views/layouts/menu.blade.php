<li class="nav-header"># Content Management</li>
@if(Auth::user()->role=='admin') 
<li class="nav-item">
    <a href="{{ route('projects.index') }}"
       class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <p>Project</p>
    </a>
</li>


@endif<li class="nav-item">
    <a href="{{ route('perencanaans.index') }}"
       class="nav-link {{ Request::is('perencanaans*') ? 'active' : '' }}">
        <p>@lang('models/perencanaans.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('desas.index') }}"
       class="nav-link {{ Request::is('desas*') ? 'active' : '' }}">
        <p>@lang('models/desas.plural')</p>
    </a>
</li>


