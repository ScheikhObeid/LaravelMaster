@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<h1>Contact</h1>

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
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem, aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum provident eum voluptatum numquam consequatur! Consectetur, quos rem.</p>

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