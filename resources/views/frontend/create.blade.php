@extends ('app')

@section('page-header')
    <h1>
     Submit Your Report
    </h1>
@endsection
@section('content')
   
  
   
    {!! Form::open(['class' => 'form-horizontal','url'=>'reports']) !!}
    {!! Form::hidden('user_id', 1) !!}
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
                {!! Form::input('date','worked_on', date('Y-m-d'), ['class' => 'form-control']) !!}
            </div>
        </div><!--form control-->

         <div class="form-group">
            <label class="col-lg-2 control-label">Submit on</label>
             <div class="col-lg-10">
                {!! Form::input('date','submit_at', date('Y-m-d'), ['class' => 'form-control','readonly' => true]) !!}
            </div>
        </div><!--form control-->
        

        <div class="pull-right">
            <input type="submit" class="btn btn-success" value="Save" />
        </div>

    {!! Form::close() !!}
@stop
