@extends('home.layout.app')
@section('title', 'Imóveis')
@section('content')
    <!-- urbano venda -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">imóveis</h5>
                <h1>
                    Nossos imóveis
                </h1>
            </div>
            <div class="row g-5">
                @foreach ($data as $item)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('upload/imoveis/' . $item->image) }}" class="img-fluid w-100 rounded"
                                    alt="">
                                <div class="project-content">
                                    <a href="{{ route('home.imovel.view', $item->slug) }}" class="text-center">
                                        {{-- <h4 class="text-secondary">{{ $item->cidade }}</h4> --}}
                                        <p class="m-0 text-white">{{ $item->tipo->name }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ $item->endereco }}</h3>
                                Cidade: {{ $item->city }} <br>
                                Quartos: {{ $item->quartos }} <br>
                                Banheiros: {{ $item->banheiros }} <br>
                                Garagem: {{ $item->garagem }} <br>
                                Área: {{ $item->area }} <br>
                                <strong>{{ $item->desc }}</strong>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
