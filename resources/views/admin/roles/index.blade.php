@extends ('app')

@section('page-header')
<h2 align='center'>
    Assigning Roles
</h2>
@if($errors->any())
<div class="container">
    <ul class='alert alert-danger col-lg-12'>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
@section('content')
{!! Form::open(array('method' => 'POST' ,'action'=> ['Admin\RolesController@assign'], 'class'=>'form-horizontal')) !!}
<div class="form-group assign_role"> 
       <label for="sel1" class="col-lg-2 control-label">Select User</label>
   <div class="col-lg-2" align="center">
      <select class="form-group" id="userId" name="user_id" >
       <option value="">Select user</option>
       @foreach($users_list as $user) 
        @if($user->role_id!='1')
        @continue;
    <option value="{{ $user->id }}"> <a href="javascript:void(0);">{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</a></option>
      @endif
   @endforeach
   </select>
       </div>
  

       <label for="sel1" class="col-lg-2">Assign Role</label>
   <div class="col-lg-2">
      <select class="form-group" id="role_id" name="role_id" >
       <option value="">Assign Role</option>
       @foreach($roles as $role) 
       @if($role->id!='1')
        @continue;
      <option value="{{ $role->id }}"> <a href="javascript:void(0);">{{ ucfirst($role->name) }}</a></option>
      @endif
   @endforeach
   </select>
       </div>
        <div class="pull-right col-lg-4">
      <button class="btn btn-info " type="submit">Change Role</button>
      </div>
   </div>
   </div>


   </div>
{!! Form::close() !!}

<script type="text/javascript">
$(document).ready(function(){
  $('#userId').change(function(){            
   var user_id =$(this).val();
   $.ajax({
     url:'/roles/'+user_id,
      type: 'get',
//       data: { '_token': $('input[name=_token]').val()},
      success: function(response){
          $('#role_id').val($.trim(response.role_id));
        },error:function(e){ 
        alert(e.response);
    } 
   });
  }); 
});
</script>
@stop
