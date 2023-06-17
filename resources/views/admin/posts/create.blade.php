@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">Добавление поста</li>
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
                        <form
                            action="{{ route('admin.post.store') }}"
                            method="POST"
                            enctype="multipart/form-data"

                        >
                            @csrf

                            <div class="form-group w-25">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите название поста..."
                                    name="title"
                                    value="{{ old('title') }}"
                                >
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea
                                    name="content"
                                    id="summernote"
                                >{{ old('content') }}
                                </textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <label for="exampleInputFile">Загрузка превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            name="preview_image"
                                        >
                                        <label class="custom-file-label">Выберете изображение
                                        </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <label for="exampleInputFile">Загрузка главного изображения</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            name="main_image"
                                        >
                                        <label class="custom-file-label">Выберете изображение
                                        </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <label>Выберете категорию</label>
                                <select
                                    name="category_id"
                                    class="form-control"
                                >
                                    @foreach($categories as $item)
                                        <option
                                            value="{{ $item->id }}"
                                            {{ $item->id == old('category_id') ? ' selected' : ''}}
                                        >{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Выберите теги</label>
                                <select
                                    class="select2"
                                    name="tag_ids[]"
                                    multiple="multiple"
                                    data-placeholder="Выберите теги..."
                                    style="width: 100%;"
                                >
                                    @foreach($tags as $item)
                                        <option value="{{ $item->id }}"
                                                {{ is_array( old( 'tag_ids')) && in_array( $item->id, old('tag_ids')) ? ' selected' : ''}}
                                        >{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-25 form-group">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >Добавить
                                </button>
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
