<div class="border border-blue-400 rounded-lg px-8 py-6">
  <form method="post" action="/tweets/">
    @csrf
      <textarea 
        name="body" 
        class="w-full p-8" 
        placeholder="What's up doc?"
        style="color: black;">
      </textarea>
      <hr class="my-4">
      
      <footer class="flex justify-between">
      <img 
      
          src="{{ auth()->user()->avatar}}" 
          class="rounded-full mr-2" 
          alt="your avatar">

          <button type="submit" 
          class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">T
          weet a roo</button>
      </footer>
  </form>

  @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
  @enderror
</div>