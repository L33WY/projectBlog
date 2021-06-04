@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit profile</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label "><strong>Tech Title</strong></label>

                    <input name="title"
                           id="title"
                           type="text"
                           class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                           title="title"
                           value="{{ old('title') ?? $user->profile->title ?? ""}}"
                           autocomplete="title" autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="description" class="col-md-4 col-form-label "><strong>Description</strong></label>

                    <input name="description"
                           id="description"
                           type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           description="description"
                           value="{{ old('description') ?? $user->profile->description ?? "" }}"
                           autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="company" class="col-md-4 col-form-label "><strong>Company/Study</strong></label>

                    <input name="company"
                           id="company"
                           type="text"
                           class="form-control @error('company') is-invalid @enderror"
                           company="company"
                           value="{{ old('company') ?? $user->profile->company ?? "" }}"
                           autocomplete="company" autofocus>

                    @error('company')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="url" class="col-md-4 col-form-label "><strong>Github</strong></label>

                    <input name="url"
                           id="url"
                           type="text"
                           class="form-control @error('url') is-invalid @enderror"
                           url="url" value="{{ old('url') ?? $user->profile->url ?? "" }}"
                           autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label "><strong>Profile Image</strong></label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <div class="justify-content-start">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
