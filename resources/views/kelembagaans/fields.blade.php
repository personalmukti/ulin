<!-- Desa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa', __('models/kelembagaans.fields.desa').':') !!}
    {!! Form::text('desa', null, ['class' => 'form-control']) !!}
</div>

<!-- Bpd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bpd', __('models/kelembagaans.fields.bpd').':') !!}
    {!! Form::select('bpd', ['Ada' => 'Ada', ' Tidak ada' => ' Tidak ada'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Lkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lkd', __('models/kelembagaans.fields.lkd').':') !!}
    {!! Form::select('lkd', ['Ada' => 'Ada', ' Tidak ada' => ' Tidak ada'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Pkk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pkk', __('models/kelembagaans.fields.pkk').':') !!}
    {!! Form::select('pkk', ['Ada' => 'Ada', ' Tidak ada' => ' Tidak ada'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Rt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rt', __('models/kelembagaans.fields.rt').':') !!}
    {!! Form::text('rt', null, ['class' => 'form-control']) !!}
</div>

<!-- Rw Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rw', __('models/kelembagaans.fields.rw').':') !!}
    {!! Form::text('rw', null, ['class' => 'form-control']) !!}
</div>

<!-- Posyandu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('posyandu', __('models/kelembagaans.fields.posyandu').':') !!}
    {!! Form::text('posyandu', null, ['class' => 'form-control']) !!}
</div>

<!-- Karangtaruna Field -->
<div class="form-group col-sm-6">
    {!! Form::label('karangtaruna', __('models/kelembagaans.fields.karangtaruna').':') !!}
    {!! Form::text('karangtaruna', null, ['class' => 'form-control']) !!}
</div>

<!-- Bumdes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bumdes', __('models/kelembagaans.fields.bumdes').':') !!}
    {!! Form::text('bumdes', null, ['class' => 'form-control']) !!}
</div>

<!-- Lpm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lpm', __('models/kelembagaans.fields.lpm').':') !!}
    {!! Form::text('lpm', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', __('models/kelembagaans.fields.keterangan').':') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>