@if(Session::has('create_msg'))
<div class="alert alert-success" id="message">{{ Session::get('create_msg') }}</div>
@endif

@if(Session::has('update_msg'))
<div class="alert alert-info" id="message">{{ Session::get('update_msg') }}</div>
@endif

@if(Session::has('delete_msg'))
<div class="alert alert-danger" id="message">{{ Session::get('delete_msg') }}</div>
@endif


@if(Session::has('warning_msg'))
<div class="alert alert-danger" id="message">{{ Session::get('warning_msg') }}</div>
@endif

@if(Session::has('success_msg'))
<div class="alert alert-success" id="message">{{ Session::get('success_msg') }}</div>
@endif



@section('scripts')
<script type="text/javascript">
setTimeout(function() {
    $('#message').fadeOut('slow');
}, 5000); 
</script>

@endsection