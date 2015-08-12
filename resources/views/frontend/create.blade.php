@extends ('app')

@section('page-header')
<h2 align='center'>
    Submit Your Report
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

{!! Form::open(['class' => 'form-horizontal','url'=>'reports','files'=>true]) !!}

<div class="form-group">
    <label class="col-lg-2 control-label">Title</label>
    <div class="col-lg-10">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
</div><!--form control-->
<div class="form-group">
    <label class="col-lg-2 control-label">Report</label>
    <div class="col-lg-10">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Report']) !!}
    </div>
</div><!--form control-->
<div class="form-group">
    <label class="col-lg-2 control-label">Worked on</label>
    <div class="col-lg-10">
        {!! Form::input('date','worked_on',null, ['class' => 'form-control' , 'id'=> 'datepicker']) !!}
    </div>
</div><!--form control-->

<div class="form-group">
    <label class="col-lg-2 control-label">Submit on</label>
    <div class="col-lg-10">
        {!! Form::input('date','submit_at', date('Y-m-d'), ['class' => 'form-control','readonly' => true]) !!}
    </div>
</div><!--form control-->
<div class="form-group">
   <label class="col-lg-2 control-label">Work Type</label>
    <div class="col-lg-2 ">
        <label>Full Day
        {!! Form::radio('work_type_id', '1',true) !!}
          </label>
    </div>
    <div class="col-lg-2 ">
        <label>Half Day
       {!! Form::radio('work_type_id', '2') !!}
       </label>
    </div>
    <div class="col-lg-2 ">
        <label>Work From Home
        {!! Form::radio('work_type_id', '3') !!}
           </label>

    </div>
</div>
<div class="pull-right">
    <input type="submit" class="btn btn-success" value="Save" />
</div>

{!! Form::close() !!}

@stop
