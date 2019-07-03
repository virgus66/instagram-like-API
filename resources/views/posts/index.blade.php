@extends('layouts.app')

@section('content')
<div class="container" style="width: 900px;">
  @foreach( $posts as $post )
    <div class="row">
      <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-50">
      </div>
      <div class="col-4">
        <div>
          <div class="d-flex align-items-center">
            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle pr-2" style="height:35px">
            <h6>
              <strong>
                <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->user_name }}</a>
                <a href="#" class="pl-3">Follow</a>
              </strong>
            </h6>
          </div>

          <hr>

          <div>
            <p>
              <span>
                <strong>
                  <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->user_name }}</a>
                </strong>
              </span>
              {{ $post->caption }}
            </p>
          </div>
        </div>

      </div>
    </div>
  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection