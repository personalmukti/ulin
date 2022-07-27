<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/perencanaans.fields.id').':') !!}
    <p>{{ $perencanaan->id }}</p>
</div>

<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('desa', __('models/perencanaans.fields.desa').':') !!}
    <p>{{ $perencanaan->desa }}</p>
</div>

<!-- Perencanaan Field -->
<div class="col-sm-12">
    {!! Form::label('perencanaan', __('models/perencanaans.fields.perencanaan').':') !!}
    <p>{{ $perencanaan->perencanaan }}</p>
</div>

<!-- Pelaksanaan Field -->
<div class="col-sm-12">
    {!! Form::label('pelaksanaan', __('models/perencanaans.fields.pelaksanaan').':') !!}
    <p>{{ $perencanaan->pelaksanaan }}</p>
</div>

<!-- Pelaporan Field -->
<div class="col-sm-12">
    {!! Form::label('pelaporan', __('models/perencanaans.fields.pelaporan').':') !!}
    <p>{{ $perencanaan->pelaporan }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', __('models/perencanaans.fields.keterangan').':') !!}
    <p>{!! $perencanaan->keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/perencanaans.fields.created_at').':') !!}
    <p>{{ $perencanaan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/perencanaans.fields.updated_at').':') !!}
    <p>{{ $perencanaan->updated_at }}</p>
</div>

