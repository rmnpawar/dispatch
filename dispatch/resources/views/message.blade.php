@if(Session::has('message'))
<div class="well">
<p class="alert alert-info">{{ Session::get('message') }}</p>
</div>
@endif