<li class="nav-item">
    <a href="{{ route('projects.index') }}"
       class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <p>@lang('models/projects.plural')</p>
    </a>
</li>

