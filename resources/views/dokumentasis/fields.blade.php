<!-- Desa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa', __('models/dokumentasis.fields.desa').':') !!}
    {!! Form::text('desa', null, ['class' => 'form-control']) !!}
</div>

<!-- Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori', __('models/dokumentasis.fields.kategori').':') !!}
    {!! Form::select('kategori', ['Perencanaan' => 'Perencanaan', ' Pelaksanaan' => ' Pelaksanaan', ' Pelaporan' => ' Pelaporan'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', __('models/dokumentasis.fields.nama').':') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', __('models/dokumentasis.fields.file').':') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file', ['class' => 'custom-file-input']) !!}
            {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', __('models/dokumentasis.fields.keterangan').':') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>