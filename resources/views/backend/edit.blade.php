@extends ('app')

@section('page-header')
    <h2 align='center'>
      Edit User
    </h2>
@endsection
@section('content')
   @if($errors->any())
   <div class="container">
   <ul class='alert alert-danger col-lg-8 col-lg-push-2'>
       @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
       </ul>
       </div>
   @endif
  
    {!! Form::model($users , ['class' => 'form-horizontal', 'role' => 'form', 'action'=>['Admin\UsersController@update' , $users->id] , 'method' => 'PATCH']) !!}
          <div class="container col-lg-8 col-lg-push-2">   
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
