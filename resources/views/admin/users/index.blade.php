@extends('app')

@section('content')
<div class="container">
    <div class="row">
    
            
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.tables.users') }}</div>
                @if (\Session::has('message'))
                <p class="alert alert-success">{{\Session::get('message')}}</p>
                @endif
                <p id="error_ajax" class="alert alert-success" hidden="true"></p>
                <div class="panel-body">
                    <p>
                        {!! link_to('admin/users/create', trans('validation.new.user'),['class'=>'btn btn-info'])!!}
                        
                    </p>
                     @include('admin.users.partials.table') 
                </div>
            </div>
        </div>
</div>
{!! Form::open(['route' => ['admin.users.destroy',':USER_ID'], 'method' => 'DELETE','id' => 'form-delete']) !!}
{!! Form::close() !!}

@endsection

@section('scripts')
<script src="{{ asset('/js/users.js') }}"></script>

@include('libs.datatables')
    @if(App::getLocale() == 'es')
    <script>
        $('#users').DataTable( {
            language: { 
                url: '/js/datatables/Spanish.json'    
            }
        } );
    </script>
    @else
    <script>
        $('#users').DataTable();
    </script>
    @endif
@endsection

