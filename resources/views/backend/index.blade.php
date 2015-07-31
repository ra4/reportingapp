@extends ('app')

@section('content')

<h1>List Users</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Actions</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{!! $user->id !!}</td>
            <td>{!! $user->first_name !!}</td>
            <td>{!! $user->last_name !!}</td>
            <td>{!!  $user->email !!}</td>
            <td>
                {!! link_to_route('users.edit', "Edit", $user->id) !!}
                {!! Form::open(['method' => 'DELETE', 'route' => array('users.destroy', $user->id),'onsubmit' => 'return ConfirmDelete()']) !!}
                {!! Form::submit('Delete') !!}
                {!! Form::close() !!} 
            </td>


        </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('footer')

<script>

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete this user ?");
        if (x)
            return true;
        else
            return false;
    }

</script>
@stop