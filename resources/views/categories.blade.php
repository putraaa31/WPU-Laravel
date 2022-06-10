@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/random/500x500?{{ $category->name }}" class="card-img"
                        alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title flex-fill text-center p-4" style="background-color: rgba(0,0,0,0.7)">
                            {{ $category->name }}</h5>

                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

{{-- @foreach ($categories as $category)

<h4 class=""> Post Categories</h4>

<ul>
    <li>
        <h5><a href="/categories/{{ $category->slug }}">{{ $category->name }}</h2></a>
</li>
</ul>


@endforeach --}}

@endsection
