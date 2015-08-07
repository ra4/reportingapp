@extends ('app')

@section('page-header')
    <h2 align='center'>
     Show Reports of Single User
    </h2>
@endsection
@section('content')
@if($user && count($user) >= 1)
@foreach($user as $single_user)
 <div class="row">
  <div class="col-lg-1 col-md-2 col-lg-offset-2">
   {!! Html::image('images/avatar.png', 'image', array( 'width' => 78, 'height' => 86 )) !!}
  </div>
  <div class="col-lg-6 col-md-6 border-box">
      <p><strong>{{ ucfirst($single_user->user['first_name']) }} {{ ucfirst($single_user->user['last_name']) }} </strong></p>
      <p><strong>Work date</strong> - {{ $single_user->worked_on }} </p>
      <p><strong>Submitted date</strong> - {{ $single_user->created_at }}</p>
      <p><strong>Title</strong> - {{ $single_user->title }}</p>
      <p><strong>Summary</strong> - {!! nl2br($single_user->content) !!}</p>
  </div>
</div> 
@endforeach
@else
<h3 align='center'>There is no reports to display</h3>
@endif
    @stop

