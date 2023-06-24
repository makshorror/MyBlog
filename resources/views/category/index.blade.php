@extends('layouts.main')


@section('content')
    <main class="blog">
        <div class="container">
            <h1
                class="edica-page-title"
                data-aos="fade-up"
            >Категории</h1>
            <section class="featured-posts-section mb-5">
                <ul class="list-group">
                    @foreach($categories as $item)
                    <li class="list-group-item">
                        <a href="{{ route('category.post.index', $item->id) }}">{{ $item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </section>
        </div>

    </main>
@endsection
