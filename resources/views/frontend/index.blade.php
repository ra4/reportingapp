@extends ('app')

@section('page-header')
    <h2 align='center'>
     Users Reports
    </h2>

@endsection
@section('content')
  {!! Form::open(array('method' => 'POST' ,'action'=> ['ReportsController@filter'], 'class'=>'form-horizontal')) !!}
  <div class="row filter_form_css">   
  <div class="form-group"> 
       <label for="sel1" class="col-lg-8 control-label">Select User</label>
   <div class="col-lg-12" align="center">
      <select class="form-group" id="userId" name="user_id" >
       <option value="">Select user</option>
       @foreach($users_list as $user) 
    <option value="{{ $user->id }}"> <a href="javascript:void(0);">{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</a></option>
   @endforeach
   </select>
       </div>
   </div>
   <div class="form-group">
            <label class="col-lg-2 control-label">From</label>
            <div class="col-lg-10">
                {!! Form::input('text','filter_from',null, ['class' => 'form-control' , 'id'=> 'datepickerfrom']) !!}
            </div>
        </div>
   <div class="form-group">
            <label class="col-lg-2 control-label">to</label>
            <div class="col-lg-10">
                {!! Form::input('text','filter_to',null, ['class' => 'form-control' , 'id'=> 'datepickerto']) !!}
            </div>
        </div>
   <div class="pull-right">
      <button type="submit" class="btn btn-info ">Info</button>
      </div>
   </div>
  {!! Form::close() !!}
  
   @foreach($reports as $report)
 <div class="row">
  <div class="col-lg-1 col-md-2 col-lg-offset-2">
   {!! Html::image('images/avatar.png', 'image', array( 'width' => 78, 'height' => 86 )) !!}
  </div>
  <div class="col-lg-6 col-md-6 border-box">
      <p><strong>{{ ucfirst($report->user['first_name']) }} {{ ucfirst($report->user['last_name']) }} </strong></p>
      <p><strong>Work date</strong> - {{ $report->worked_on }} </p>
      <p><strong>Submitted date</strong> - {{ $report->created_at }}</p>
      <p><strong>Title</strong> - {{ $report->title }}</p>
      <p><strong>Job Type</strong> - {{ $report->attendence['work_type']['name'] }}</p>
      <p><strong>Summary</strong> - {!! nl2br($report->content) !!}</p>
      <p><strong>Actions</strong>:- {!! Form::open(['method' => 'DELETE', 'route' => array('reports.destroy', $report->id),'onsubmit' => 'return ConfirmDelete()']) !!}
                                   {!! Form::submit('Delete Report', ['class' => 'btn btn-primary']) !!}
                                   {!! Form::close() !!} 
               
            </p>
  </div>
</div> 
 
  @endforeach
  <div class="pull-left">
        {!! $reports->total() !!} report(s) total
    </div>

    <div class="pull-right">
        {!! $reports->render() !!}
    </div>
   <div class="clearfix"></div>
   
   
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

