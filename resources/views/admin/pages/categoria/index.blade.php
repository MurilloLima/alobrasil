@extends('admin.layout.app')
@section('title', 'Categoria')

@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.nav')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger text-center" style="margin: 10px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="text-align: center">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('msg'))
                            <div class="row text-center">
                                <div class="col-md-12" \>
                                    <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                        {{ session('msg') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Categorias</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Categoria</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- /.card -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                style="margin-bottom: 5px;">Cadastrar</button>

                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categoria as $item)
                                                <tr>

                                                    <td>{{ $item->name }}</td>
                                                    <td style="width: 100px" class="text-center">
                                                        <a href="{{ route('admin.categoria.edit', [$item->id]) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                        <form onsubmit="return confirm('Deseja excluir?');"
                                                            action="{{ route('admin.pages.categoria.destroy', $item->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
        @include('admin.layout.footer')
    </div>
@endsection
