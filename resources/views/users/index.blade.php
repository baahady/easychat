@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>{{$user->username}}</h3>
			@if(Auth::user()->iisNot($user))
				@if(Auth::user()->isFollowing($user))
					<a href="{{route('user.unfollow',$user)}}">unfollow</a>
				@else
					<a href="{{route('user.follow',$user)}}">follow</a>
				@endif		
			@endif
		</div>
	</div>
</div>
@endsection