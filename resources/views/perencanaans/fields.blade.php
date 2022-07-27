<!-- Desa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa', __('models/perencanaans.fields.desa').':') !!}
    {!! Form::text('desa', null, ['class' => 'form-control']) !!}
</div>

<!-- Perencanaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perencanaan', __('models/perencanaans.fields.perencanaan').':') !!}
    {!! Form::select('perencanaan', ['Pending' => 'Pending', ' Approve' => ' Approve'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Pelaksanaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelaksanaan', __('models/perencanaans.fields.pelaksanaan').':') !!}
    {!! Form::select('pelaksanaan', ['Pending' => 'Pending', ' Approve' => ' Approve'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Pelaporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelaporan', __('models/perencanaans.fields.pelaporan').':') !!}
    {!! Form::select('pelaporan', ['Pending' => 'Pending', ' Approve' => ' Approve'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', __('models/perencanaans.fields.keterangan').':') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>