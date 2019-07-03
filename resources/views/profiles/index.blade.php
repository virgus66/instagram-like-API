@extends('layouts.app')

@section('content')
<div class="container" style="width: 900px;">
    <div class="row justify-content-center pt-5">
        <div class="col-md-3">
            <img src="{{ $user->profile->profileImage() }}" style="height: 150px;">
        </div>
        <div class="col-md-9 pl-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h3>{{ $user->user_name }}</h3>
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                @can('update', $user->profile)
                    <a href="{{ asset('post/create') }}">Add new post</a>
                @endcan

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                @endcan
            </div>
            <div class="d-flex mt-5">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4">
                <div class="font-weight-bold"></div>
                <div>{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
            </div>
            <div>
                <a href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A' }}</a>
            </div>
        </div>

        <div class="row mt-5">
            @foreach( $user->posts as $post )
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}">
                        <img class="w-100" src="/storage/{{ $post->image }}">
                    </a>
                </div> 
            @endforeach
        </div>
    </div>
</div>
@endsection
