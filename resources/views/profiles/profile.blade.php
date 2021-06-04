@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row pt-3">
        <div class="col-3">
            <img class="rounded-circle w-100" src="{{ url($user->profile->image) }}" style="border: 4px solid green; max-height: 190px">
        </div>

        <div class="col-9">
            <div class="d-flex justify-content-between">
                <div><h3 class="pr-4">Username: {{  $user->name }}</h3></div>
                @can('update', $user->profile)
                    <div><a href="/post/create" style="color: #3490dc">Add new Post</a></div>
                @endcan
            </div>
            @can('update', $user->profile)
                <div><a href="/profile/{{ $user->id }}/edit" style="color: #3490dc">Edit profile</a></div>
            @endcan
                <div><h3>Tech Title:
                        @isset($user->profile->title)
                            {{ $user->profile->title }}
                        @endisset
                    </h3></div>
            <div class="d-flex">
                <div><h4 class="pr-4">Company/Study:
                        @isset($user->profile->company)
                            {{ $user->profile->company  }}
                        @endisset
                    </h4></div>
                <div><h4>Posts: {{ $user->posts->count() }}</h4></div>
            </div>

            <div>Github: <a href="#">
                    @isset($user->profile->url)
                        {{ $user->profile->url }}
                    @endisset
                </a></div>

            <hr>

            <div class="font-weight-bold">Description: </div>
            <div>
                @isset($user->profile->description)
                    {{ $user->profile->description }}
                @endisset
            </div>
        </div>
    </div>

    <hr>

    @foreach($user->posts as $post)
        <a class="post-home" href="/post/{{ $post->id }}" >
            <div class="row" style="border: 2px solid green; ">

                <div class="d-flex align-items-center post-bg">

                    <div class="col-5 pl-0 pr-0">
                        <img class="d-block" src="{{ url('/storage/' . $post->image) }}" style="height: 300px; width: 100%;">
                    </div>
                    <div class="col-7">
                        <div class="text-center">
                            <div><h2 style="letter-spacing: 2px">Title: {{ $post->title }}</h2></div>
                            <div class="d-flex justify-content-between">
                                <div><h4 style="letter-spacing: 1px">Category: {{ $post->category }}</h4></div>
                                <div><h4 style="letter-spacing: 1px">Language: {{ $post->language }}</h4></div>
                            </div>
                        </div>
                        <div class="text-center">
                            {{ $post->description }}
                        </div>
                    </div>

                </div>
            </div>
        </a>

        <div class="mt-4"></div>
    @endforeach

</div>
@endsection
