@extends ('app')

@section('page-header')
    <h1>
      Edit User
    </h1>
@endsection
@section('content')
   
  
    {!! Form::model($users , ['class' => 'form-horizontal', 'role' => 'form', 'action'=>['Admin\UsersController@update' , $users->id] , 'method' => 'PATCH']) !!}
          <div class="container">   
        <div class="form-group">
            <label class="col-lg-2 control-label">First Name</label>
            <div class="col-lg-10">
                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
            </div>
        </div><!--form control-->
         <div class="form-group">
            <label class="col-lg-2 control-label">Last Name</label>
            <div class="col-lg-10">
                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            <label class="col-lg-2 control-label">E-mail</label>
            <div class="col-lg-10">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail Address']) !!}
            </div>
        </div><!--form control-->

        

        <div class="pull-right">
            <input type="submit" class="btn btn-success" value="Save" />
        </div>
        </div>
        <div class="clearfix"></div>

    {!! Form::close() !!}
@stop
