@extends('home.layout.app')
@section('title', 'Home')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('home/img/carousel-1.jpg') }}" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Bem vindo!</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Um lugar para chamar de seu</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Encontre os melhores imóveis.</p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Destaques
                                    de Venda</button></a>
                            <a href="{{ route('home.contatos.index') }}" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contato</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('home/img/carousel-2.jpg') }}" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Soluções</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Maior portal de Imóveis</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown"></p>
                            <a href="" class="me-2">
                                <button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                    Imóveis para viver bem!
                                </button></a>
                            <a href="{{ route('home.contatos.index') }}" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contato
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">299</h1>
                        <h5 class="text-white mt-1">
                            Sucesso em conseguir um cliente feliz
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">125</h1>
                        <h5 class="text-white mt-1">
                            Milhares de negócios de sucesso
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">
                            Total de clientes que amam Alô Brasil
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">
                            Avaliações dadas por clientes satisfeitos
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('home/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('home/img/about-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">
                        Sobre nós
                    </h5>
                    <h1 class="mb-4">
                        Sobre a agência Alô Brasil e suas soluções inovadoras
                    </h1>
                    <p>
                        A Alô Brasil trás modernidade e praticidade, que marcam o momento
                        digital do mercado imobiliário. Para isso, nos especializamos na construção de equipes competentes,
                        experientes e comprometidas com a excelência e resultados.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    {{-- <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Design</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Development</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">UI/UX Design</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Cecurity</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Digital Marketing</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Programming</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                    Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->


    <!-- imoveis venda -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">imóveis</h5>
                <h1>
                    Nossos imóveis à venda
                </h1>
            </div>
            <div class="row g-5">
                @foreach ($imoveisV as $item)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('upload/imoveis/' . $item->img) }}" class="img-fluid w-100 rounded"
                                    alt="">
                                <div class="project-content">
                                    <a href="{{ route('home.imovel.view', [$item->name]) }}" class="text-center">
                                        <h4 class="text-secondary">{{ $item->name }}</h4>
                                        <p class="m-0 text-white">{{ $item->desc }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- vendas End -->
    <!-- imoveis alugar -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">imóveis</h5>
                <h1>
                    Imóveis disponíveis para alugar
                </h1>
            </div>
            <div class="row g-5">
                @foreach ($imoveisV as $item)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('upload/imoveis/' . $item->img) }}" class="img-fluid w-100 rounded"
                                    alt="">
                                <div class="project-content">
                                    <a href="{{ route('home.imovel.view', [$item->name]) }}" class="text-center">
                                        <h4 class="text-secondary">{{ $item->name }}</h4>
                                        <p class="m-0 text-white">{{ $item->desc }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- vendas End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Entrar em contato</h5>
                <h1 class="mb-3">Contato para qualquer dúvida</h1>
                {{-- <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with
                    Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                        href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Endereço</h4>
                                <a href="" target="_blank" class="h5">Av. Chico Brito, 1317</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Tel.</h4>
                                <a class="h5"
                                    href="https://wa.me//559982854848?text=Tenho%20interesse%20em%20comprar%20seu%20carro"
                                    target="_blank">+5599 82854848</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email</h4>
                                <a class="h5" href="{{ route('home.contatos.store') }}" target="_blank">contato@alobrasil.net</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7029517872793!2d-47.44156122617423!3d-6.55913129343399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d0a064d3cca30d%3A0xf0a3479b22224e43!2sAv.%20Chico%20Brito%2C%201317%20-%20Estreito%2C%20MA%2C%2065975-000%2C%20Brazil!5e0!3m2!1sen!2sbd!4v1707995093203!5m2!1sen!2sbd"
                                width="380" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="alert alert-success text-center" style="margin: 10px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="text-align: center">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('msg'))
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="alert alert-success text-center"
                                                style="color: black; margin: 10px; background-color: yellow;">
                                                {{ session('msg') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form action="{{ route('home.contatos.store') }}" method="post">
                            @csrf
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" name="name" class="form-control border-0 py-3"
                                        placeholder="Seu nome">
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="fone" class="form-control border-0 py-3"
                                        placeholder="Telefone">
                                </div>
                                <div class="mb-4">
                                    <input type="email" name="email" class="form-control border-0 py-3"
                                        placeholder="Seu Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" name="assunto" class="form-control border-0 py-3"
                                        placeholder="Assunto">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" name="msg" cols="10"
                                        placeholder="Mensagem"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
