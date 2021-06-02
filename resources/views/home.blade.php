@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row pt-3">
        <div class="col-3">
            <img class="rounded-circle w-100" src="storage/static/logo.png" style="border: 4px solid green; max-height: 190px">
        </div>

        <div class="col-9">
            <div class="d-flex">
                <div><h3 class="pr-4">Username: L3WY</h3></div>
                <div><h3>Tech Title: Backed developer</h3></div>
            </div>
            <div class="d-flex">
                <div><h4 class="pr-4">Company/Study: pjatk</h4></div>
                <div><h4>Posts: 25</h4></div>
            </div>

            <hr>

            <div class="font-weight-bold">Description: </div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
        </div>
    </div>

    <hr>

    <div class="row" style="border: 2px solid green">
            <div class="d-flex align-items-center">

                <div class="col-5 pl-0 pr-0">
                    <img class="w-100" src="storage/static/errorImg.jpg">
                </div>
                <div class="col-7">
                    <div class="text-center">
                        <div><h2 style="letter-spacing: 2px">Title: </h2></div>
                        <div><h4 style="letter-spacing: 1px">Category: </h4></div>
                    </div>
                    <div class="text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                </div>

            </div>
    </div>

</div>
@endsection
