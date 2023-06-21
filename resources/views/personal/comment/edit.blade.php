@extends('personal.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование комментария</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.comment.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('personal.comment.index') }}">Комментарии</a></li>
                            <li class="breadcrumb-item active">Редактирование комментария</li>
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
                            action="{{ route('personal.comment.update',  $comment->id) }}"
                            method="POST"
                            class="w-25"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите комментарий..."
                                    name="message"
                                    value="{{ $comment->message }}"
                                >
                                @error('message')
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
