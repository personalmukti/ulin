<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', __('models/projects.fields.project_id').':') !!}
    {!! Form::text('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_name', __('models/projects.fields.project_name').':') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Handler Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_handler', __('models/projects.fields.project_handler').':') !!}
    {!! Form::text('project_handler', null, ['class' => 'form-control']) !!}
</div>