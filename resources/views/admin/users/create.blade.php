@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                            action="{{ route('admin.user.store') }}"
                            method="POST"
                            class="w-25"
                        >
                            @csrf
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите имя пользователя..."
                                    name="name"
                                    value="{{ old('name') }}"
                                >
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите email..."
                                    name="email"
                                    value="{{ old('email') }}"
                                >
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Выберете роль пользователю</label>
                                <select
                                    name="role_id"
                                    class="form-control"
                                >
                                    @foreach($roles as $id => $item)
                                        <option
                                            value="{{ $id }}"
                                            {{ $id == old('role_id') ? ' selected' : ''}}
                                        >{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-25">
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
