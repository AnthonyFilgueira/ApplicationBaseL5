@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.edit.user').':' }} {{ $user->first_name }}</div>
                @if (\Session::has('message'))
                <p class="alert alert-success">{{\Session::get('message')}}</p>
                @endif
                <div class="panel-body">
                @include ('admin.partials.errors')
                {!! Form::model($user,['route' => ['admin.users.update',$user], 'method' => 'PUT']) !!}
                  
                  @include('admin.users.partials.fields')
                  <button type="submit" class="btn btn-primary">{!! trans('validation.update.user') !!}</button>
                  <a href="{{route('admin.users.index')}}" class="btn btn-success">{!! trans('pagination.back') !!}</a>
                  
                {!! Form::close() !!}
                </div>
                 
            </div>
            @include('admin.partials.delete')
        </div>
    </div>
</div>
@endsection
