@extends('admin.layout.app')
@section('title', 'Imóveis')

@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.nav')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Imóveis</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="col-lg-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-body table-responsive p-0">

                                <form action="{{ route('admin.imoveis.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="customFile">Imagem 800x800</label>
                                            <div class="custom-file">
                                                <input type="file" name="img" required class="custom-file-input"
                                                    placeholder="600x600px" id="customFile">
                                                <label class="custom-file-label" for="customFile">Imagem</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Categoria</label>
                                            <select class="custom-select rounded-0" name="cat_id">
                                                @foreach ($cat as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Nome</label>
                                            <input type="text" class="form-control" name="name" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Descrição</label>
                                            <input type="text" class="form-control" name="desc" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Conteúdo</label>
                                            <textarea class="form-control" name="content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Cidade</label>
                                            <input type="text" class="form-control" name="city" id="">
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </div>
                                    </div>
                                </form>
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

    @include('admin.layout.footer')
    </div>
@endsection
