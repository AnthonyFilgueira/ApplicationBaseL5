@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@include ('admin.partials.errors')

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.email')}}</label>
							<div class="col-md-6">
                                                            {!! Form::text('email','admin@example.com',['class'=>'form-control','type'=>'email'])!!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password')}}</label>
							<div class="col-md-6">
                                                            {!! Form::password('password',['class'=>'form-control'])!!}
								
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
                                                                            
                                                                            {!!Form::checkbox('name', 'remember')!!}
                                                                            {!!Form::label('remember', trans('validation.template.remember') )!!}
										
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                                            {!! Form::submit( trans('validation.template.login'),['class'=>'btn btn-primary','type'=>'button'])!!}
                                                            <a class="btn btn-link" href="{{ url('/password/email') }}">{{ trans('validation.template.password.lost')}}</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
