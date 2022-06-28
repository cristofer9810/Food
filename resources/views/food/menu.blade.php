<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Basic -->
    @livewire('links')

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        @livewire('navigation')
        <style>
            .contenedor::-webkit-scrollbar {
                width: 7px;
            }

            .contenedor::-webkit-scrollbar-thumb {
                background: #ffffff;
                border-radius: 5px;
            }
        </style>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Menu principal</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Menu principal</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todo</button>
                            @foreach ($tastes as $taste)
                                <button data-filter=".{{ $taste->name }}">{{ $taste->name }}</button>
                            @endforeach
                            {{-- la variable data-filter esta en el primer div especificando el grupo al que pertenecen, esto hace que se ordenen en nuestro front
                            cambien segun lo escogido --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">


                {{-- aqui esta la variable a cambiar cuando ↓↓↓↓↓ tenga hecho la BD de los pedidos a pedir XD --}}

                @forelse ($saucers as $saucer)
                    <div class="col-lg-4 col-md-6 special-grid {{ $saucer->taste->name }}">
                        <div class="gallery-single fix">
                            @if ($saucer->image)
                                <img id="picture" class="img-fluid" alt="Image"
                                    src="{{ Storage::url($saucer->image->url) }}">
                            @else
                                <img class="img-fluid" alt="Image"
                                    src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg">
                            @endif
                            <div class="why-text contenedor">
                                <h4>{{ $saucer->name }}</h4>
                                <p>{!! $saucer->description !!}</p>
                                <h5>${{ $saucer->price }}</h5>
                                <a href="{{ route('food.menu-details', $saucer->id) }}">
                                    <button type="button" class="btn btn-primary mb-1 btn-sm">Comprar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No hay platillos en la bodega</p>
                @endforelse



            </div>
        </div>
    </div>
    </div>
    <!-- End Menu -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Customer Reviews -->
    <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Customer Reviews</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul
                                        Mitchel</strong></h5>
                                <h6 class="text-dark m-0">Web Developer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                    eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                    vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve
                                        Fonsi</strong></h5>
                                <h6 class="text-dark m-0">Web Designer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                    eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                    vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel
                                        vebar</strong></h5>
                                <h6 class="text-dark m-0">Seo Analyst</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                    eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                    vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Reviews -->

    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">
                            +01 123-456-4590
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            yourmail@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            800, Lorem Street, US
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    @livewire('footer')
    <!-- End Footer -->

    @livewire('js')
</body>

</html>
