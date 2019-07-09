@extends('layouts.app')

@section('content')
<div class="container" style="width: 900px;">
  <div>Name: {{ $user->name }}</div>
  <div>Email: {{ $user->email }}</div>
  <div>User name: {{ $user->user_name }}</div>

  <hr>
  @if ( isset($user->journeys) )
    @foreach ($user->journeys as $journey)
      <div style="">User id: {{ $journey->user_id }}</div>
      <div style="">Start: {{ $journey->start_point }}</div>
      <div style="">Checkpoints: {{ $journey->check_points }}</div>
      <div style="">End: {{ $journey->end_point }}</div>
      <hr>
    @endforeach
  @endif
</div>
@endsection