
<div class="bg-gray-200 text-black rounded-lg py-4 px-6">
  <h3 class="font-bold text-xl mb-4">Following</h3>

  <ul>
      @foreach (auth()->user()->follows as $user)
          <li class="mb-4">
              <div class="flex items-center text-sm">
                  <a href="{{ route('profile', $user) }}">
                    <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2"
                ></a>

                  {{ $user->name }}
              </div>
          </li>
      @endforeach
  </ul>