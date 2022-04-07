@extends('layout')

@section('content')
    @if(true)
        <h1>Just learning the Blade basics</h1>
    @endif

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
