<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <!-- Basic -->
    @livewire('links')

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        @livewire('navigation')
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Galeria</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Galeria</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">


                <div class="row">
                    @foreach ($views as $view)
                        @if ($view->gallery)
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ Storage::url($view->gallery->url) }}">
                                    <img class="img-fluid" src="{{ Storage::url($view->gallery->url) }}"
                                       data-caption="{{$view->name}} alt="Gallery Images">
                                </a>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ Storage::url($view->gallery->url) }}">
                                    <img class="img-fluid" src="{{ Storage::url($view->gallery->url) }}"
                                       data-caption="{{$view->name}} alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

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
                                    <img class="d-block w-100 rounded-circle"
                                        src="{{ asset('inicio/images/profile-1.jpg') }}" alt="">
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
                                    <img class="d-block w-100 rounded-circle"
                                        src="{{ asset('inicio/images/profile-3.jpg') }}" alt="">
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
                                    <img class="d-block w-100 rounded-circle"
                                        src="{{ asset('inicio/images/profile-7.jpg') }}" alt="">
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
                            +57 314 265 9038
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            crispromax00@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            diagonal 146 # 136a59
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
