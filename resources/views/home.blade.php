@extends('layouts.app')

@section('content')
    <div class="flex lg:justify-betwwen">
        <div class="lg:w-32 ">
            @include('_sidebar-link')
        </div>
        <div class="flex-none sm:flex-1 md:flex-auto lg:flex-initial xl:flex-1 lg:mx-10">
            @include('_public-tweet-panel')
            <div class="border border-gray-300 rounded-lg">
                @foreach ($tweets as $tweet)
                    @include('_tweet')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('_friend-list')
        </div>
    </div>
@endsection
