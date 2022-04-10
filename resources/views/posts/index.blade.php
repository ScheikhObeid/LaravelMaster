@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')


<div class="min-h-screen p-2 bg-gray-100 border-2">
    <div class="w-full mx-1 space-y-32">
  
      <!-- section -->
      <section class="w-full  md:flex md:space-x-2 items-start">
        <div class="w-60 sticky top-0 py-4 bg-gray-100 border-2">
            @include('posts.partials.sidebarlinks')
        </div>
  
        <div class="w-[62%] border-2">
            <div class="flex flex-wrap w-full border-gray-300 justify-between">
            @forelse ($posts as $key => $post)
                @include('posts.partials.post')
               
            @empty
            No posts found!
            
            @endforelse

        </div>
        </div>
  
        <div class="w-72 sticky top-0 py-4 bg-gray-100 border-2">
            @include('posts.partials.sidebarlinks')
        </div>
      </section>
    </div>
  </div>
@endsection