@extends('layouts.app')

@section('content')
    <header class="mb-6">
        <img style="width: 100%; border-radius: 20px" src="/images/default-profile-banner.jpg" alt="">
    </header>

    <div class="flex justify-between">
        <div>
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p>joined {{ $user->created_at->diffForHumans()}}</p>
        </div>

        <div>
            <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Follow Me</a>
        </div>
    </div>
    <hr>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection