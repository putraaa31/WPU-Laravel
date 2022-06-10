@extends('layouts.main')
@section('container')

<h2 class="mb-3 text-center">{{ $title }}</h2>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/random/1600x400?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small>
                By: <a href="/posts?user={{ $posts[0]->user->username }}"
                    class="text-decoration-none">{{ $posts[0]->user->name }}</a> |
                <a href="/posts?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none">{{ $posts[0]->category->name }}</a> |
                {{ $posts[0]->created_at->diffForHumans()  }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
</div>





    <div class="container mt-5">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">

                    <div class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, 0.7)"><a
                            href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none text-white">{{ $post->category->name }}</a></div>

                    <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}"
                        class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small>
                                By: <a href="/posts?user={{ $post->user->username }}"
                                    class="text-decoration-none">{{ $post->user->name }}</a>
                                {{ $post->created_at->diffForHumans()  }}
                            </small>
                        </p>
                        <p class="card-text fs-6">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@else
<p class="fs-4 text-center">No post found..</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>
    

@endsection

{{-- @foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</h2></a>

<p>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> | <a
        href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
</p>

<p>{{ $post->excerpt }}</p>

<a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>

@endforeach --}}
