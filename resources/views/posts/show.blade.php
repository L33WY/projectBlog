@extends('layouts.app')


@section('content')
<div class="container">
    <div class="mt-4"></div>

    <div class="row" style="border: 4px solid green">
        <div class="col-7 pl-0">
            <img class="w-100" src="/storage/{{ $post->image }}">
        </div>

        <div class="col-5">
            <div class="pt-2 font-weight-bold"><h2>Title: <span style="color: green">{{ $post->title }}</span></h2></div>

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
</div>
@endsection
