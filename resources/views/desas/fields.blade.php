<!-- Namadesa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namadesa', __('Nama Desa').' :') !!}
    {!! Form::text('namadesa', null, ['class' => 'form-control']) !!}
</div>

<!-- Namakepaladesa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namakepaladesa', __('Nama Kepala Desa').' :') !!}
    {!! Form::text('namakepaladesa', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamatdesa Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamatdesa', __('Alamat Desa').' :') !!}
    {!! Form::textarea('alamatdesa', null, ['id' => 'alamatdesa', 'class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', __('Keterangan').' :') !!}
    {!! Form::textarea('keterangan', null, ['id' => 'keterangan', 'class' => 'form-control']) !!}
</div>
