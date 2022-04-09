@extends('layouts.app')

@section('title', $post->title)

@section('content')



<div class="min-h-screen p-2 bg-gray-100 border-2">
    <div class="w-full mx-1 space-y-32">
  
      <!-- section -->
      <section class="w-full  md:flex md:space-x-2 items-start">
        <div class="w-60 sticky top-0 py-4 bg-gray-100 border-2">
          <h2 class="font-extrabold text-2xl">
            Intro
          </h2>
        </div>
  
        <div class="md:w-[62%] leading-snug space-y-5 border-2">
            <div>
                <h1 class="text-2xl">{{ $post->title}}</h1><br>
                <p>{{ $post->content }}</p>
                <p>Added {{ $post->created_at->diffForHumans() }}</p>
                
                @if (now()->diffInMinutes($post->created_at)< 5)
                <div class="alert alert-info">New!</div>
                
                @endif
                <h4>Comments</h4>
                @forelse ($post->comments as $comment)
                <p>
                    {{ $comment->content }} <br> <span ></span>
                </p>
                <p class="text-info">
                    added {{ $comment->created_at->diffForHUmans() }}
                </p>
                    
                @empty
                <p>No comments yet!</p>
                    
                @endforelse
                </div> 
        </div>
  
        <div class="w-72 sticky top-0 py-4 bg-gray-100 border-2">
          <h2 class="font-extrabold text-2xl">
            Intro
          </h2>
        </div>
      </section>
    </div>
  </div>
  
  

@endsection
