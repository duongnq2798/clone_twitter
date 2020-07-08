<div class="p-2 border-b border-b-gray-400">
  <div class="flex flex-shrink-0 mb-3">
  <img src="{{ $tweet->user->avatar}}" class="rounded-full mr-2" alt="">
    <div>
        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
  
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
  </div>
</div>