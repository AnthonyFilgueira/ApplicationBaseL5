<div class="table-responsive container-fluid">
<table id="users" class="table table-striped table-bordered">
    <thead>
        <tr>
        <th class="text-center">#</th>
        <th class="text-center">{{trans('validation.attributes.name')}}</th>
        <th class="text-center">{{trans('validation.attributes.email')}}</th>
        <th class="text-center">{{trans('validation.type.user')}}</th>
        <th class="text-center">{{trans('validation.attributes.action')}}</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr data-id="{{ $user->id }}">
        <td class="text-center">{{$user->id}}</td>
        <td class="text-center">{{$user->full_name}}</td>
        <td class="text-center">{{$user->email}}</td>
        <td class="text-center">{{$user->type}}</td>
        <td class="text-center"> 
           {!! link_to(route('admin.users.edit',$user),trans('validation.operation.edit') ,['class'=>'btn btn-success'])!!}
           {!! link_to('#',trans('validation.operation.delete') ,['class'=>'btn btn-danger'])!!}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>