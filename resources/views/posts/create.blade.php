@extends('layouts.app')

@section('tite', 'Create the post')


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
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                @include('posts.partials.form')
                <div class="d-grid gap-2 p-2 px-md-4 "><input type="submit" value="Create" class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800"></div>
            </form>
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
