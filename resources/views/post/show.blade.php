@extends('layouts.main')


@section('content')
    <main class="blog-post">
        <div class="container">
            <h1
                class="edica-page-title"
                data-aos="fade-up"
            >{{ $post->title }}</h1>
            <p
                class="edica-blog-post-meta"
                data-aos="fade-up"
                data-aos-delay="200"
            > {{ $date->translatedFormat('F d, Y') }} • {{ $date->format('H:i') }} • {{ $post->category->title }}
                                                      • {{ $post->comments->count() }} {{ $text }}</p>
            <section
                class="blog-post-featured-img"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <img
                    src="{{ asset('storage/' . $post->main_image) }}"
                    alt="featured image"
                    class="w-25"
                >
            </section>
            <section class="post-content">
                <div class="row">
                    <div
                        class="col-lg-9 mx-auto"
                        data-aos="fade-up"
                    >

                        <p>{!! $post -> content !!}</p>
                    </div>
                </div>
            </section>
            <div class="row mb-5">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2
                            class="section-title mb-4"
                            data-aos="fade-up"
                        >Похожие посты</h2>
                        <div class="row">

                            @foreach($relatedPosts as $item)
                                <div
                                    class="col-md-4"
                                    data-aos="fade-right"
                                    data-aos-delay="100"
                                >
                                    <img
                                        src="{{ asset('Storage/'. $item->preview_image) }}"
                                        alt="related post"
                                        class="post-thumbnail"
                                    >
                                    <p class="post-category">{{ $item->category->title }}</p>
                                    <a
                                        href="{{ route('post.show', $item->id) }}"
                                        class="blog-post-permalink"
                                    ><h5 class="post-title">{{ $item->title }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    @guest()
                        <div class="row mb-5">
                            <p
                                class="comment-section mb-4"
                                data-aos="fade-up"
                            ><a href="{{ route('login') }} " class="blog-post-permalink">Войдите</a> или <a href="{{ route('register') }}">зарегистрируйтесь</a>, чтобы оставлять или читать комментарии...</p>
                        </div>
                    @endguest

                    @auth()
                        <section class="comment-list mb-5">
                            <h3
                                class="section-title mb-5"
                                data-aos="fade-up"
                            >Комментарии ({{ $post->comments->count() }})</h3>
                            @foreach($post->comments as $item)

                                <div class="comment-text mb-3">
                            <span class="username">
                                <div>{{ $item->user->name }}</div>
                                    <span class="text-muted float-right">{{ $item->dateAsCarbon->diffForHumans() }}</span>
                            </span>
                                    {{ $item->message }}
                                </div>
                            @endforeach
                        </section>
                        <section class="comment-section">
                            <h2
                                class="section-title mb-5"
                                data-aos="fade-up"
                            >Оставить комментарий</h2>
                            <form
                                action=" {{ route('post.comment.store', $post->id) }}"
                                method="post"
                            >
                                @csrf
                                <div class="row">
                                    <div
                                        class="form-group col-12"
                                        data-aos="fade-up"
                                    >
                                        <label
                                            for="comment"
                                            class="sr-only"
                                        >Комментарий</label>
                                        <textarea
                                            name="message"
                                            id="comment"
                                            class="form-control"
                                            placeholder="Напишите ваш комментарий"
                                            rows="10"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-12"
                                        data-aos="fade-up"
                                    >
                                        <input
                                            type="submit"
                                            value="Добавить"
                                            class="btn btn-warning"
                                        >
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
