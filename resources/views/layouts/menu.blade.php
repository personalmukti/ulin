<li class="nav-header"># Content Management</li>
@if(Auth::user()->role=='admin')

<!-- <li class="nav-item">
    <a href="{{ route('projects.index') }}"
       class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <p>Project</p>
    </a>
</li> -->


@endif
