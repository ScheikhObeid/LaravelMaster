@extends('layouts.app')

@section('tite', 'Update the post')


@section('content')

<form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('PUT')
    @include('posts.partials.form')
    <div  class="d-grid gap-2 p-2 px-md-4 "><input type="submit" value="Update" class="btn btn-primary"></div>
</form>
    
@endsection