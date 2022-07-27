<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/dokumentasis.fields.id').':') !!}
    <p>{{ $dokumentasi->id }}</p>
</div>

<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('desa', __('models/dokumentasis.fields.desa').':') !!}
    <p>{{ $dokumentasi->desa }}</p>
</div>

<!-- Kategori Field -->
<div class="col-sm-12">
    {!! Form::label('kategori', __('models/dokumentasis.fields.kategori').':') !!}
    <p>{{ $dokumentasi->kategori }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', __('models/dokumentasis.fields.nama').':') !!}
    <p>{{ $dokumentasi->nama }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', __('models/dokumentasis.fields.file').':') !!}
    <p>{{ $dokumentasi->file }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', __('models/dokumentasis.fields.keterangan').':') !!}
    <p>{{ $dokumentasi->keterangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/dokumentasis.fields.created_at').':') !!}
    <p>{{ $dokumentasi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/dokumentasis.fields.updated_at').':') !!}
    <p>{{ $dokumentasi->updated_at }}</p>
</div>

