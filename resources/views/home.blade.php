@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home
                    @if (\Session::has('message'))
                    <p class="alert alert-danger">{{\Session::get('message')}}</p>
                    @endif
                </div>

                <div class="panel-body">


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
