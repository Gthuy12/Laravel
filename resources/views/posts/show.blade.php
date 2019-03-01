@extends('layouts.app')
@section('content')
<h1 style="text-align:center">{{$post->title}}</h1>
<p>{{$post->category}}</p>
{!! $post->content !!}



@endsection