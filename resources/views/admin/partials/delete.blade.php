{!! Form::open(['route' => ['admin.users.update',$user], 'method' => 'DELETE']) !!}
<button type="submit" class="btn btn-danger">{!! trans('validation.delete.user') !!}</button>
{!! Form::close() !!}

