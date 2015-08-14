            @if(Session::has('message'))
            <p class="alert alert-{!!Session::get('message-type')!!}">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                {{ Session::get('message') }}</p>
            @endif