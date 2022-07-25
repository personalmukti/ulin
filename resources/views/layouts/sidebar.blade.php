<aside class="main-sidebar elevation-4 bg-sidebar" style="background-image: url(assets/dtox-1.0.0/images/backgrounds/about-bg.png); background-size:100% 110%;">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{ config('app.url') }}assets/dtox-1.0.0/images/logo.png"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-dark"><b>{{ config('app.name') }}</b></span>
    </a>
    <div class="sidebar">
        <hr>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
