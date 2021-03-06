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
                <div class="media" v-for="post in posts" track-by="id" transition="expand">
                    <div class="media-left">
                        <img class="media-object" v-bind:src="post.user.avatar" style="padding-right: 5px">
                    </div>
                    <div class="media-body">
                        <div class="user">
                            <a :href="post.user.profileUrl"><strong>@{{post.user.username}}</strong></a> - @{{post.HumanCreatedAt}}
                        </div>
                        <p>@{{post.body}}</p>
                    </div>
                </div>
                
            </div>
            <hr>
            <a href="#" class="btn btn-primary" v-if="total > posts.length" v-on:click="getMorePosts($event)">Show more</a>

        </div>
    </div>
</div>
@endsection
