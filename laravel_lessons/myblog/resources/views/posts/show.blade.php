@extends('layouts.default')

@section('title',$post->title)

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
  {{ $post -> title}}</h1>
<p>{!! nl2br(e($post->body)) !!}</p>

<h2>Comments</h2>
<ul>
@forelse ($post -> comments as $comment)
<li>
  {{$comment->body}}
</li>
@empty
<li>No comments yet</li>
@endforelse
</ul>

<form method="post" action="{{ action('CommentsController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="enter title" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{$errors -> first('title')}}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add Comment">
  </p>
</form>

@endsection
