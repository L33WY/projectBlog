@extends('layouts.app')

@section('content')
<div class="container">

    <diV class="row">
        <div class="col-12" style=" height: 400px; background-image: url('/storage/homeImg.jpg');  background-position: bottom; background-size: cover; background-color: #00ff80; background-blend-mode:multiply")>
            <div>
                <h1 style="font-size: xxx-large">
                    <div style="display: flex;">
                        <img src="{{url('/static/logo.png')}}"
                             style="max-height: 50px;
                                 max-width: 30px; padding-right: 6px;">

                        <div style="padding-left: 6px; padding-top: 2px; border-left: 1px solid #333">
                            <span style="text-decoration: line-through;">404 NOT</span>
                            <span class="font-weight-bold" style="color: #fff"> FOUND</span>
                        </div>
                    </div>
                </h1>
            </div>

            <div class="pt-5"></div>
            <div class="pt-5"></div>
            <div class="pt-5"></div>

            <div class=" col align-self-end">
                <h1 class="align-items-end" style=" text-align: right;color: #fff; font-weight: bold">Get stucked? <br> Try to find some answers <br> and move on :D</h1>
            </div>
        </div>
    </diV>

    <div class="pt-5 font-weight-bold"><h1>Lates posts: </h1></div>
    <hr>

    @foreach($posts as $post)
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
