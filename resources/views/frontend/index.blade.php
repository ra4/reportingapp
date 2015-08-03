@extends ('app')

@section('page-header')
    <h1 align='center'>
     Users Reports
    </h1>
@endsection
@section('content')
  
  @foreach($reports as $report)
  
 <div class="row">
  <div class="col-lg-1 col-md-2 col-lg-offset-2">
   {!! Html::image('images/avatar.png', 'image', array( 'width' => 78, 'height' => 86 )) !!}
  </div>
  <div class="col-lg-6 col-md-6 border-box">
      <p><strong>{{ ucfirst($report->user->first_name) }} {{ ucfirst($report->user->last_name) }} </strong></p>
      <p><strong>Work date</strong> - {{ $report->worked_on }} </p>
      <p><strong>Submitted date</strong> - {{ $report->created_at }}</p>
      <p><strong>Title</strong> - {{ $report->title }}</p>
      <p><strong>Summary</strong> - {{ $report->content }}</p>
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
    @stop

