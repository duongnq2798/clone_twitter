@extends('layouts.app')

@section('content')
  @include('_public-tweet-panel')
  <div class="border border-gray-300 rounded-lg">
      @foreach ($tweets as $tweet)
          @include('_tweet')
      @endforeach
  </div>
@endsection
