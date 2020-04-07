@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="h3 row">
            <div class="paragraph-marker-h3"></div>
            <div class="paragraph-h3">{{ $post->title }}</div>
        </div>
        <p class="text-muted">{{ $post->created_at }}</p>
        <img class="img-fluid mb-2"
            src="{{ asset('/storage/' . $post->image_path) }}" alt="Not found">
        <p class="font-weight-bold h4">{{$post->lead}}</p>
        <div class="h5">{!! $post->body !!}</div>
        <div class="my-3"></div>
        <a class="btn btn-primary" href="{{ route('main') }}">Главная</a>
    </div>
@endsection
