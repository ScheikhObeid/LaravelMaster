@extends('layouts.app')


@section('content')

{{-- <form method="POST" action="{{ url('register') }}">
@csrf
<div class="form-group">
    <label> Name </label>
    <input name="name"  value="{{ old('name') }}" required 
    class="form-control {{ $errors->has('name') ? 'is-invalid': ''}}">
</div> <br>

<div class="form-group">
    <label> E-mail</label>
        <input name="email" value="{{ old('email') }}" required class="form-control">
</div><br>

<div class="form-group">
    <label>Password</label>
        <input name="password" required class="form-control">
</div><br>

<div class="form-group">
    <label>Confirm password</label>
        <input name="password_confirmation"  required class="form-control">
</div><br>

<button type="submit" class="btn btn-primary btn-block" >Register</button>
</form> --}}


{{-- new --}}

<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <img src="/img/logo/td_logo.jpg" alt="Logo" class="mx-auto h-12 w-auto">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Registration</h2>
      </div>
      <form class="mt-8 space-y-6"  method="POST" action="{{ route('register') }}">
        @csrf
     
        <div class="rounded-md shadow-sm -space-y-px">

        <div>
            <br>
            <input  id="name" name="name" value="{{ old('name') }}" type="name" required 
                    class="{{ $errors->has('name') ? 'is-invalid': ''}} appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
        </div>

        <div>
            <br>
            <input  id="email-address" name="email" value="{{ old('email') }}" type="email" autocomplete="email"  required 
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>

          <div>
            <br>
            <input  id="password" name="password" type="password" autocomplete="current-password" required 
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
          </div>

          <div>
            <br>
            <input  id="password_confirmation" name="password_confirmation"  type="password" autocomplete="current-password" required 
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmation password ">
          </div>

        </div>
  

  
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: solid/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Register
          </button>
        </div>
      </form>
    </div>
  </div>

@endsection