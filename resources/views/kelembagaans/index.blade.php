@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <h4>@lang('models/kelembagaans.singular')</h4>
                </div>
                @if (Auth::user()->role=='user')
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('kelembagaans.create') }}">
                         @lang('crud.add_new')
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('kelembagaans.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


