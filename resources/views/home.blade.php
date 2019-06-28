@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="img/images.png" style="height: 250px;" class="p-5">
        </div>
        <div class="col-md-9 p-5">
            <div><h1>{{ Auth::user()->name }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4">
                <div class="font-weight-bold"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to </p>
            </div>
            <div>
                <a href="www.web-architects.co.uk">www.web-architects.co.uk</a>
                nvjkfsd
            </div>
        </div>
    </div>
</div>
@endsection
