@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>{{$user->username}}</h3>
			@if(Auth::user()->iisNot($user))
				@if(Auth::user()->isFollowing($user))
					unfollow
				@else
					follow
				@endif		
			@endif
		</div>
	</div>
</div>
@endsection