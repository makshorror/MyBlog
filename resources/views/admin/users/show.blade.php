@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="mr-2">{{ $user->name }}</h1>
                        <a
                            href="{{ route('admin.user.edit', $user->id) }}"
                            class="text-success"
                        ><i class="fas fa-pencil-alt"></i></a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Консоль</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active">{{ $user->name }}</li>
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
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <tbody>

                                            <tr>
                                                <td>ID</td>
                                                <td>{{ $user->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Имя пользователя</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>

                                            <tr>
                                                <td>E-mail пользователя</td>
                                                <td>{{ $user->email }}</td>
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
                        action="{{ route('admin.user.destroy', $user->id) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="btn btn-block btn-danger"
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
