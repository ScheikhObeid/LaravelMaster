
  {{-- <div  >
    <h3><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h3>
    <p>{{ $post->content }}</p>
  </div>
  <div>
    @if ($post->comments_count)
    <p>{{ $post->comments_count }} comments</p>
    @else
      No comments yet!
    @endif
  </div>
<div class="mb-3">
  <a href="{{ route('posts.edit', ['post' => $post->id]) }}" 
    class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
    Edit</a>
  <form class="d-inline" action="{{ route('posts.destroy', ['post'=> $post->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <input type="submit" value="Delete" class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">
  </form>
</div> --}}



  <!--Card 1-->
  <div class="w-full md:w-[48%] lg:w-[33%] text-6xl rounded-xl bg-gray-100 overflow-hidden shadow-lg">
    <div>
    <img class="p-2 w-full" src="/img/cards/card_1.jpg" alt="Mountain">
  </div>
    <div class="px-3 py-2">
      <div class="font-bold text-xl mb-2"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></div>
      <p class="text-gray-700 text-base">
        {{ $post->content }}
      </p>
    </div>

    <div>
      <p class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
       by {{ $post->user->name  }}
      </p>

      <p class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
        Added {{ $post->created_at->diffForHumans()  }}
      </p>
      <p class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">    
        @if ($post->comments_count)
        {{ $post->comments_count }} comments
        @else
          No comments yet!
        @endif
      </p>
      <div class="text-sm">
        <span class="inline-block">  <a href="{{ route('posts.edit', ['post' => $post->id]) }}" 
          class="inline-flex items-center h-10 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
          Edit</a></span>
        <span class="inline-block">  <form class="d-inline" action="{{ route('posts.destroy', ['post'=> $post->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete" class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">
          </form></span>
        <p class="text-gray-900 leading-none">ِAdded</p>
        <p class="text-gray-600">Aug 18</p>
      </div>
    </div>
  </div>

