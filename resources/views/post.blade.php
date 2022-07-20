@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post-> title }}</h2>
            <p>By: <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}"
            class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            @if ($post->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/random/1600x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">    
            @endif

            <article class="my-3">
                {!! $post-> body !!}
            </article>
            


            <a href="/posts" class="d-block mt-5">Kembali</a>
        </div>
    </div>
</div>


@endsection

{{-- Post::create([
    'title' => 'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'author' => 'Caca',
    'excerpt' => 'Lorem ipsum, dolor slug Ketiga',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa tenetur explicabo alias eius soluta veritatis, libero dolore nulla? Perferendis doloribus dicta quibusdam,</p> <p>dolor illum omnis! Veniam facere, corporis distinctio earum obcaecati sequi commodi nemo quam asperiores explicabo iusto hic consequuntur temporibus vel vitae assumenda quaerat neque natus repellat repellendus delectus voluptatibus adipisci. Accusamus,</p> <p>cupiditate nesciunt. Natus voluptatum autem voluptatem ducimus nemo aliquid, expedita dicta debitis earum odio, fuga impedit repellendus! Sapiente, magni illum aspernatur saepe esse alias culpa incidunt cum natus ullam similique iusto enim et tenetur? Nostrum laudantium, quis tempore nemo est nihil, dolores magnam aspernatur earum illo quaerat.</p>'
]) --}}
