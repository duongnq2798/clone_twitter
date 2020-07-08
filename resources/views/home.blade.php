@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="flex-1">
            @include('_sidebar-link')
        </div>
        <div class="flex-1">2</div>
        <div class="flex-1">
            @include('_friend-list')
        </div>
    </div>
@endsection
