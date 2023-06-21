@extends('layouts.main')


@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Мой Блог</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $item)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ 'storage/' . $item->preview_image }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $item->category->title }}</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $item->title }}</h6>
                        </a>
                    </div>
                @endforeach
                    <div class="mx-auto" style="margin-top: -80px;">
                        {{ $posts->links() }}
                    </div>
            </div>

        </section>
        <h5 class="widget-title mt-5">Случайные посты</h5>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($randomPosts as $item)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $item->preview_image }}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{ $item->category->title }}</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $item->title }}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Наиболее популярные</h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $item)
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{ 'storage/' . $item->preview_image }}">
                                <div class="media-body">
                                    <h6 class="post-title">{{ $item->title }}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
