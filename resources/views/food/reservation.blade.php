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
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reservacion</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Reservation -->
    <div class="reservation-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Reservacion</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    @if (session('info'))
                        <div class="alert alert-success">
                            <strong>{{ session('info') }}</strong>
                        </div>
                    @endif
                    <div class="contact-block">
                        <form action="{{ route('reservation.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Completar para reservar</h3>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="name" placeholder="Nombres"
                                                class="datepicker picker__input form-control" name="name" required
                                                type="text" value="" equired data-error="ingrese el nombre">
                                            <div class="help-block with-errors"></div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="">Cuando:</label>
                                            <input id="input_time" name="date1"
                                                class="time form-control picker__input" type="date" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="custom-select d-block form-control" name="person"
                                                id="person" required data-error="Ingrese en numero de personas">
                                                <option disabled selected>mesa para: *</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Informacion de contacto</h3>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name_last" name="name_last"
                                                placeholder="Apellidos" required
                                                data-error="Por favor ingrese apellidos ">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="">Hora:</label>
                                            <input id="input_time" name="time1"
                                                class="time form-control picker__input" type="time" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Email" id="email"
                                                class="form-control" name="email" required
                                                data-error="por favor ingresar tu email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Telefono" id="phone"
                                                class="form-control" name="telefono" required
                                                data-error="Por favor ingresa tu celular o Telefono">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Reservar</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reservation -->

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
