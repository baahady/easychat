@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="timeline">
        <div class="col-md-4">
            <form action="#" v-on:submit="postStatus">
                <div class="form-group">
                    <textarea class="form-control" rows="5" maxlength="50" required></textarea>
                </div>
                    <button class="form-control" class="btn btn-default">send</button>
            </form>
        </div>
        <div class="col-md-8">
            timeline
        </div>
    </div>
</div>
@endsection
