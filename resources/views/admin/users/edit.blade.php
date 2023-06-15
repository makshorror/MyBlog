@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
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
                            Добавление пользователя

                        </h6>
                        <form
                            action="{{ route('admin.user.update',  $user->id) }}"
                            method="POST"
                            class="w-25"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите название пользователя..."
                                    name="name"
                                    value="{{ $user->name }}"
                                >
                                @error('name')
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
