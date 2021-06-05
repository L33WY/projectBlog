@extends('layouts.app')


@section('content')
<div class="container">
    <div class="mt-4"></div>

    <div class="row" style="border: 4px solid green">
        <div class="col-7 pl-0">
            <img class="w-100" src="/storage/{{ $post->image }}">
        </div>

        <div class="col-5">
            <div class="d-flex justify-content-between">
                <div class="pt-2 font-weight-bold"><h2>Title: <span style="color: green">{{ $post->title }}</span></h2></div>
                @can('update', $post->user->profile)
                    <form action="/post/{{ $post->id }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Delete" style="color: red">
                    </form>
{{--                    <div style="color: red"><h4><a href="/post/{{ $post->id }}">Delete</a></h4></div>--}}
                @endcan
            </div>

            <hr>

            <div class="pt-2"><h4>Created by: <a href="/profile/{{ $post->user->id }}" style="color:#3490dc;">{{ $post->user->name }}</a></h4></div>

            <div class="d-flex justify-content-between">
                <div><h4>Category: {{ $post->category }}</h4></div>
                <div><h4>Language: {{ $post->language }}</h4></div>
            </div>

            <div><h4>Created at:
                    {{ $postDate }}

                </h4></div>

            <hr>

            <h5>Description: </h5>
            <div>
                <p>{{ $post->description }}</p>
            </div>
            <div></div>
        </div>
    </div>

{{--  Comment section  --}}
    <div><h2 class="pt-4">Comments: </h2></div>

    <div><h4><a style="color:#3490dc;" href="/post/{{ $post->id }}/comment/create">Add new comment</a></h4></div>

    @foreach($comments as $comment)

        <div class="row" style="border: 4px solid green">
            <div class="col-12">
                <div class="d-flex justify-content-between p-1">
                    <div><h2>Posted by: <a style="color:#3490dc;" href="/profile/{{ $comment->id }}">{{ $comment->name }}</a></h2></div>
                    <div><h3>{{ $comment->created_at }}</h3></div>
                </div>
                <div><h4>Description: </h4></div>
                <div>
                    <p>{{ $comment->description }}</p>
                </div>
            </div>
        </div>

        <div class="pt-3"></div>
    @endforeach

</div>
@endsection
