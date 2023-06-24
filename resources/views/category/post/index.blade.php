@extends('layouts.main')


@section('content')
    <main class="blog">
        <div class="container">
            <h1
                class="edica-page-title"
                data-aos="fade-up"
            >{{ $category->title}}</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $item)
                        <div
                            class="col-md-4 fetured-post blog-post"
                            data-aos="fade-up"
                        >
                            <div class="blog-post-thumbnail-wrapper">
                                <img
                                    src="{{ asset('storage/' . $item->preview_image )}}"
                                    alt="blog post"
                                >
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="blog-post-category">{{ $item->category->title }}</p>
                                <form
                                    action="{{ route('post.like.store', $item->id) }}"
                                    method="POST"
                                >
                                    @csrf
                                    <button
                                        type="submit"
                                        class="border-0 bg-transparent"
                                    >
                                        @auth()
                                            @if(auth()->user()->likedPosts->contains($item->id))
                                                <i class="fas fa-heart"> {{ $item->liked_users_count }}</i>
                                            @else
                                                <i class="far fa-heart"> {{ $item->liked_users_count }}</i>
                                            @endif
                                        @endauth
                                    </button>
                                </form>
                                @guest()
                                    <div>
                                        <i class="far fa-heart"> {{ $item->liked_users_count }}</i>
                                    </div>
                                @endguest()
                            </div>
                            <a
                                href="{{ route('post.show', $item->id) }}"
                                class="blog-post-permalink"
                            >
                                <h6 class="blog-post-title">{{ $item->title }}</h6>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div
                        class="mx-auto"
                        style="margin-top: -100px;"
                    >
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            </div>
        </div>

    </main>
@endsection
