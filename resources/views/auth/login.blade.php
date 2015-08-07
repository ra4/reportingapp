@extends('app')

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
<div class="container-inner" style="margin-top:100px">

    <div class="col-md-push-4 col-md-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form role="form" action="/auth/login" method="post">
                    {!! csrf_field() !!}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success" name="submit" type="submit">Login</button><br><br>
                        {!! link_to('password/email', 'Forgot Your Password?') !!} 
                       
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>
@stop
