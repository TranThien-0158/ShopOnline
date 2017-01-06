<div id="messages">
	@if (session('messages'))
	    <div class="alert alert-danger">
	        {{ session('messages') }}
	    </div>
	@endif
</div>