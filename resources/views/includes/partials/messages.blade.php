 @if(Session::has('flash_message_report'))
            <p class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                {{ Session::get('flash_message_report') }}</p>
            @endif
            @if(Session::has('flash_message_assign_role'))
            <p class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                {{ Session::get('flash_message_assign_role') }}</p>
            @endif
            @if(Session::has('flash_message'))
            <p class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}</p>
            @endif