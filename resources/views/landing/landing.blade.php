
@extends('landing.layout.app')

@section('content')

    <!-- hero area -->
    @include('landing.partial.hero')
    <!-- /hero-area -->

    <!-- feature -->
    @include('landing.partial.feature')
    <!-- /feature -->

    <!-- marketing -->
    @include('landing.partial.marketing')
    <!-- /marketing -->

    <!-- service -->
    @include('landing.partial.service')
    <!-- /service -->

    <!-- team -->
    @include('landing.partial.team')
    <!-- /team -->

    <!-- pricing -->

    <!-- /pricing -->

    <!-- client logo slider -->
    @include('landing.partial.client')
    <!-- /client logo slider -->

    <!-- newsletter -->
    @include('landing.partial.newsletter')
    <!-- /newsletter -->

@endsection
