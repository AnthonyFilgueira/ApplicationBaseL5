@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('validation.create.user')}}</div>
				<div class="panel-body">
				
					<form  role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

					@include ('admin.partials.errors')
                
               
                  
                    @include('admin.users.partials.fields')
                    <button type="submit" class="btn btn-primary">{!! trans('validation.create.user') !!}</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-success">{!! trans('pagination.back') !!}</a>
          
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
