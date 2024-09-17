<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
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
                    <h1>Contactanos</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Contact -->
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Contactanos</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if (session('info'))
                        <div class="alert alert-success">
                            <strong>{{ session('info') }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="name" placeholder="Nombres"
                                    class="form-control" name="name" required
                                    type="text" value="" equired data-error="ingrese el nombre">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="escribe un mensaje" rows="4" data-error="Escribe tu mensaje"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Contactar</button>
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
    <!-- End Contact -->

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
    <script>
        $('.map-full').mapify({
            points: [{
                lat: 40.7143528,
                lng: -74.0059731,
                marker: true,
                title: 'Marker title',
                infoWindow: 'Yamifood Restaurant'
            }]
        });
    </script>
</body>

</html>
