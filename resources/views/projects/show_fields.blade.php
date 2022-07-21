<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/projects.fields.id').':') !!}
    <p>{{ $project->id }}</p>
</div>

<!-- Project Id Field -->
<div class="col-sm-12">
    {!! Form::label('project_id', __('models/projects.fields.project_id').':') !!}
    <p>{{ $project->project_id }}</p>
</div>

<!-- Project Name Field -->
<div class="col-sm-12">
    {!! Form::label('project_name', __('models/projects.fields.project_name').':') !!}
    <p>{{ $project->project_name }}</p>
</div>

<!-- Project Handler Field -->
<div class="col-sm-12">
    {!! Form::label('project_handler', __('models/projects.fields.project_handler').':') !!}
    <p>{{ $project->project_handler }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/projects.fields.created_at').':') !!}
    <p>{{ $project->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/projects.fields.updated_at').':') !!}
    <p>{{ $project->updated_at }}</p>
</div>

