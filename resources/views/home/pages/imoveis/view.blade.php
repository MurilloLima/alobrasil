@extends('home.layout.app')
@section('title', $data->endereco)
<style>
    .profile {
        width: 600px;
        height: 500px;
        /* border-radius: 50%; */
    }

    .profile img {
        width: 100%;
    }
</style>

@section('content')
    <div class="container-fluid my-5">
        <div class="container py-5">
            <div class="container gallery-container">
                <h1>{{ $data->tipo->name }},{{ $data->endereco }}</h1>
                <p class="page-description text-left">Clicar na imagem para vê-la ampliada</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('upload/imoveis/' . $data->image) }}" alt=""
                                style="width: 100%; height: 400px;">
                        </div>
                    </div>
                    <div class="tz-gallery">
                        @foreach ($data->images as $item)
                            <a class="lightbox" href="{{ asset('upload/imoveis/' . $item->image) }}">
                                <img src="{{ asset('upload/imoveis/' . $item->image) }}"
                                    style="width: 100px; height: 100px;" alt="">
                            </a>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-5">
                    <h5 class="text-primary">Imóvel {{ $data->tipo->name }}</h5>
                    {{-- <h1 class="mb-4">{{ $data->endereco }}</h1> --}}
                    <p>{{ $data->city }}</p>
                    <p>Area m²: {{ $data->area }}</p>
                    <p>Quartos: {{ $data->quartos }}</p>
                    <p>Banheiros: {{ $data->banheiros }}</p>
                    <p>Garagem: {{ $data->garagem }}</p>
                    <h2>R$:{{ $data->valor }}</h2>
                    <p class="mb-4">{{ $data->desc }}</p>
                    <a href="https://wa.me//559982854848?text=Tenho%20interesse%20em%20comprar%20seu%20imóvel"
                        class="btn btn-secondary rounded-pill px-5 py-3 text-white">Tenho interesse</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($video as $item)
                            <a class="lightbox" href="{{ asset('upload/video/' . $item->file) }}">
                                <video src="{{ asset('upload/video/as.mov') }}"
                                    style="width: 100px; height: 100px;"></video>
                            </a>
                        @endforeach

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size: 10px">Compartilhar</span> <br>
                        <a href="https://api.whatsapp.com/send?text=link/{{ $data->slug }}">
                            <img src="{{ asset('home/img/whatsapp.png') }}" class="whatsapp" alt="" width="25">
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=link/">
                            <img width="25" height="25"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/768px-Facebook_icon_2013.svg.png"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
