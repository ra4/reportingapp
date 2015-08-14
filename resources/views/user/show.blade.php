@extends ('app')

@section('content')
 
<div class="container">
  <div class="row">
       <div class="col-md-4 col-lg-12">
            <label class="lb-in-xs">User Type:</label>
           <span>{{ ucfirst($user_profile->role->name)}}</span>     
      </div>
      <div class="col-md-4 col-lg-4">
          {!! Html::image('images/avatar.png', 'image', array( 'width' => 78, 'height' => 86 )) !!}   
      </div>
      
      <div class="col-md-8">
          <div>
              <label class="lb-in-xs">Name:</label>
              <span>{{ ucfirst($user_profile->first_name)}} {{ ucfirst($user_profile->last_name)}}</span>
          </div>
          
          <div>
              <label class="lb-in-xs">Email:</label>
              <span>{{$user_profile->email}}</span>
          </div>
          
          <div>
              <label class="lb-in-xs">Department</label>
              <span>Php</span>
          </div>
          
          <div>
              <label class="lb-in-xs">Mobile No.</label>
              <span>42424214214214</span>
          </div>
      </div>
      
      <div class="col-md-12">
          @if(Auth::user()->id==$user_profile->id || Auth::user()->role_id!='3' )
           {!! link_to_route('users.edit', "Edit Your Profile", $user_profile->id) !!}
           @endif
      </div>
  </div>
</div>
 
@stop
@section('footer')
