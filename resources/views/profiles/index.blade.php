@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{$user->profile->profileImage()}}" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h2">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id}}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan

            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Your Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a class="font-weight-bold" href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection