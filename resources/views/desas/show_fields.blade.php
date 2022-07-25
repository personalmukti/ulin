<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/desas.fields.id').':') !!}
    <p>{{ $desa->id }}</p>
</div>

<!-- Namadesa Field -->
<div class="col-sm-12">
    {!! Form::label('namadesa', __('models/desas.fields.namadesa').':') !!}
    <p>{{ $desa->namadesa }}</p>
</div>

<!-- Namakepaladesa Field -->
<div class="col-sm-12">
    {!! Form::label('namakepaladesa', __('models/desas.fields.namakepaladesa').':') !!}
    <p>{{ $desa->namakepaladesa }}</p>
</div>

<!-- Alamatdesa Field -->
<div class="col-sm-12">
    {!! Form::label('alamatdesa', __('models/desas.fields.alamatdesa').':') !!}
    <p>{{ $desa->alamatdesa }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', __('models/desas.fields.keterangan').':') !!}
    <p>{{ $desa->keterangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/desas.fields.created_at').':') !!}
    <p>{{ $desa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/desas.fields.updated_at').':') !!}
    <p>{{ $desa->updated_at }}</p>
</div>

