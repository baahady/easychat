@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="timeline">
        <div class="col-md-4">
            <form action="#" v-on:submit="postStatus">
                <div class="form-group">
                    <textarea class="form-control" rows="5" maxlength="50" v-model="post"></textarea>
                </div>
                    <button class="form-control" class="btn btn-default">send</button>
            </form>
        </div>
        <div class="col-md-8">
            <p v-if="!posts.length">no post yet</p>
            <div class="post" v-if="posts.length">
                <div class="media" v-for="post in posts" track-by="id">
                    <div class="media-left">
                        <img class="media-object">
                    </div>
                    <div class="media-body">
                        <div class="user">
                            <a href="#"><strong>@{{post.user.username}}</strong></a>
                        </div>
                        <p>@{{post.body}}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
