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
                    <h1>Comprar</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog details -->
    <div class="blog-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        @if (session('info'))
                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>
                        @endif
                        <h2>{{ $saucer->name }}</h2>
                        <p>{!! $saucer->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <div class="blog-inner-box">
                            <div class="side-blog-img">
                                @if ($saucer->image)
                                    <img class="img-fluid" src="{{ Storage::url($saucer->image->url) }}" alt="">
                                @else
                                    <img class="img-fluid"
                                        src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg"
                                        alt="">
                                @endif
                            </div>
                            <div class="date-blog-up">
                                {{ $date->format('d/m/Y') }}
                            </div>
                            <div class="inner-blog-detail details-page">
                                <h3><i class="fa fa-align-justify" aria-hidden="true"></i>
                                    {!! $saucer->description !!}</h3>
                                <h3><i class="fa fa-money"></i> Precio: ${!! $saucer->price !!}</h3>
                                <h3><i class="fa fa-user"></i> Personal : ${!! $saucer->small !!}</h3>
                                <h3><i class="fa fa-users"></i> Mediano : ${!! $saucer->medium !!}</h3>
                                <h3><i class="fa fa-users"></i> Familiar: ${!! $saucer->large !!}</h3>
                            </div>
                        </div>




                        <div class="blog-comment-box">
                            <h3>Comments</h3>
                            <div class="comment-item">
                                <div class="comment-item-left">
                                    <img src="{{ asset('inicio/images/avt-img.jpg') }}" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Rubel Ahmed</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                            varius urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                            <div class="comment-item children">
                                <div class="comment-item-left">
                                    <img src="images/avt-img.jpg" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Admin</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>1.30 pm</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                            varius urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-item-left">
                                    <img src="images/avt-img.jpg" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Rubel Ahmed</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                            varius urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-respond-box">
                            <h3>Leave your comment </h3>
                            <div class="comment-respond-form">
                                <form id="commentrespondform" class="comment-form-respond row" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input id="name_com" class="form-control" name="name" placeholder="Name"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <input id="email_com" class="form-control" name="email"
                                                placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <textarea class="form-control" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-submit">Submit comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="right-side-blog">
                        <h3>Preparando su comida....</h3>
                        <div class="blog-search-form">
                            @if ($saucer->image)
                                <img class="img-fluid" src="{{ Storage::url($saucer->image->url) }}" alt="">
                            @else
                                <img class="img-fluid"
                                    src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg"
                                    alt="">
                            @endif
                        </div>
                        @if (session('info'))
                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>
                        @endif

                        <div class="contact-box" style="padding: 0px 0px;">
                            <div class="container">
                                @if (Auth::check())
                                    <form action="{{ route('food.menu.store') }}" method="POST">@csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="heading-title text-center">
                                                    <h2>Pedir</h2>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    </p>
                                                    <p>Nombre: {{ auth()->user()->name }}</p>
                                                    <p>Email: {{ auth()->user()->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="contactForm">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="number" placeholder="Numero de telefono"
                                                                    id="phone" class="form-control" name="phone"
                                                                    required data-error="Por favor ingresa tu Telefono">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select name="small"
                                                                    class="custom-select d-block form-control"
                                                                    id="guest">
                                                                    <option value="0">Cuantas desea:
                                                                        Personal?
                                                                    </option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select name="medium"
                                                                    class="custom-select d-block form-control"
                                                                    id="guest">
                                                                    <option value="0">Cuantas desea:
                                                                        Mediano?
                                                                    </option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select name="large"
                                                                    class="custom-select d-block form-control"
                                                                    id="guest">
                                                                    <option value="0">Cuantas desea:
                                                                        Familiar?
                                                                    </option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="hidden" name="saucer_id"
                                                                    value="{{ $saucer->id }}">
                                                                <input type="date" placeholder="Fecha"
                                                                    class="form-control" name="date" required
                                                                    data-error="Por favor ingresa la Fecha">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="time" placeholder="Hora"
                                                                    class="form-control" name="time" required
                                                                    data-error="Por favor ingresa la hora">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="body" id="message" placeholder="Escribe un mensaje" rows="4"
                                                                    data-error="Escribe tu mensaje" required></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="submit-button text-center">
                                                        <button class="btn btn-common" id="submit" type="submit">Crear
                                                            Orden</button>
                                                        <div id="msgSubmit" class="h3 text-center hidden">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <p><a href="/login">Para ordenar, registrese o iniciar sesion</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- End details -->

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
