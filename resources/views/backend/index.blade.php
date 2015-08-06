@extends ('app')

@section('content')

<h2>List Users</h2>
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
                {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!} 
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

 <div class="pull-left">
        {!! $users->total() !!} user(s) total
    </div>

    <div class="pull-right">
        {!! $users->render() !!}
    </div>
   <div class="clearfix"></div>
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