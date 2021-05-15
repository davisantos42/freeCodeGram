@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/images/freeCodeCampUser.jpg" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="">
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>379</strong> posts</div>
                <div class="pr-5"><strong>71.1k</strong> followers</div>
                <div class="pr-5"><strong>311</strong> following</div>
            </div>
            <div class="pt-3"><strong>freecodecamp.org</strong></div>
            <div>We're a global community of millions of people learning to code together. We're an open source,
                donor-supported, 501(c)(3) nonprofit.</div>
            <div><a class="font-weight-bold" href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4"><img class="w-100" src="/images/freeCodeCampUserImage1.jpg" alt=""></div>
        <div class="col-4"><img class="w-100" src="/images/freeCodeCampUserImage2.jpg" alt=""></div>
        <div class="col-4"><img class="w-100" src="/images/freeCodeCampUserImage3.jpg" alt=""></div>
    </div>


</div>
@endsection