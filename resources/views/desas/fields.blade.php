<!-- Namadesa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namadesa', __('models/desas.fields.namadesa').':') !!}
    {!! Form::text('namadesa', null, ['class' => 'form-control']) !!}
</div>

<!-- Namakepaladesa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namakepaladesa', __('models/desas.fields.namakepaladesa').':') !!}
    {!! Form::text('namakepaladesa', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamatdesa Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamatdesa', __('models/desas.fields.alamatdesa').':') !!}
    {!! Form::textarea('alamatdesa', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', __('models/desas.fields.keterangan').':') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>