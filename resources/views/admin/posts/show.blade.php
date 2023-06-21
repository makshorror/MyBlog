@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="mr-2">{{ $post->title }}</h1>
                        <a
                            href="{{ route('admin.post.edit', $post->id) }}"
                            class="text-success"
                        ><i class="fas fa-pencil-alt"></i></a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
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
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <tbody>

                                            <tr>
                                                <td>ID</td>
                                                <td>{{ $post->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Название</td>
                                                <td>{{ $post->title }}</td>
                                            </tr>

                                            <tr>
                                                <td>Контент</td>
                                                <td>{!!$post->content!!}</td>
                                            </tr>
                                            <tr>
                                                <td>Превью избражение</td>
                                                <td class="w-25">
                                                    <img
                                                        src="{{ url('storage/' . $post->preview_image) }}"
                                                        alt="Preview"
                                                        class="w-25"
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Главное избражение</td>
                                                <td class="w-25">
                                                        <img
                                                            src="{{ url('storage/' . $post->main_image) }}"
                                                            alt="Preview"
                                                            class="w-25"
                                                        >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Категория</td>
                                                <td>{{ $category->title }}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row col-1">
                    <form
                        action="{{ route('admin.post.destroy', $post->id) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="btn btn-block btn-danger  mb-3"
                        >
                            Удалить
                        </button>
                        </button>
                    </form>

                </div>

            </div>

        </section>     <!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
