<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('ID').':') !!}
    <p>{{ $desa->id }}</p>
</div>

<!-- Namadesa Field -->
<div class="col-sm-12">
    {!! Form::label('namadesa', __('Nama Desa').':') !!}
    <p>{{ $desa->namadesa }}</p>
</div>

<!-- Namakepaladesa Field -->
<div class="col-sm-12">
    {!! Form::label('namakepaladesa', __('Nama Kepala Desa').':') !!}
    <p>{{ $desa->namakepaladesa }}</p>
</div>

<!-- Alamatdesa Field -->
<div class="col-sm-12">
    {!! Form::label('alamatdesa', __('Alamat Desa').':') !!}
    <p>{!! $desa->alamatdesa !!}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', __('Keterangan').':') !!}
    <p>{!! $desa->keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('Dibuat Tanggal').':') !!}
    <p>{{ $desa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('Diperbarui Tanggal').':') !!}
    <p>{{ $desa->updated_at }}</p>
</div>

