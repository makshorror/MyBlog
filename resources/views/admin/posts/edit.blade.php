@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">Редактирование поста</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <h6 class="mb-3">
                            Добавление поста

                        </h6>
                        <form
                            action="{{ route('admin.post.update',  $post->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите название поста..."
                                    name="title"
                                    value="{{ $post->title }}"
                                >
                                @error('title')
                                <div class="text-danger">Пустое поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea
                                    name="content"
                                    id="summernote"
                                >
                                    {{ $post->content }}
                                </textarea>
                                @error('content')
                                <div class="text-danger">Пустое поле</div>
                                @enderror
                            </div>

                            <div class="w-25">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >Обновить</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
