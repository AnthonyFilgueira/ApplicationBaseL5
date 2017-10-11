<div class="form-group">
    {!! Form::label('first_name',trans('validation.attributes.first_name')) !!}
    {!! Form::text('first_name',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
<div class="form-group">
    {!! Form::label('last_name', trans('validation.attributes.last_name')) !!}
    {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
<div class="form-group">
    {!! Form::label('email', trans('validation.attributes.email')) !!}
    {!! Form::text('email',null,['class'=>'form-control','type'=>'email','placeholder'=>''])!!}

</div>
<div class="form-group">
    {!! Form::label('password', trans('validation.attributes.password')) !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>''])!!}
</div>
<div class="form-group">
    {!! Form::label('type', trans('validation.type.user')) !!}
    {!! Form::select('type',[''=>trans('validation.select.type'),'user'=>trans('validation.users.user'),'admin'=>trans('validation.users.admin')],null,['class'=>'form-control']) !!}

</div>
