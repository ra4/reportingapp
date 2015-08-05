@extends ('app')

@section('page-header')
    <h1 align='center'>
     Show Reports of Single User
    </h1>
@endsection
@section('content')
{!! Html::image('images/avatar.png', 'image', array( 'width' => 78, 'height' => 86 )) !!}
@foreach($user as $single_user)
 <div class="row">
  <div class="col-lg-1 col-md-2 col-lg-offset-2">
   
  </div>
  <div class="col-lg-6 col-md-6 border-box">
      <p><strong>{{ ucfirst($single_user->user->first_name) }} {{ ucfirst($single_user->user->last_name) }} </strong></p>
      <p><strong>Work date</strong> - {{ $single_user->worked_on }} </p>
      <p><strong>Submitted date</strong> - {{ $single_user->created_at }}</p>
      <p><strong>Title</strong> - {{ $single_user->title }}</p>
      <p><strong>Summary</strong> - {{ $single_user->content }}</p>
  </div>
</div> 
@endforeach

    @stop

