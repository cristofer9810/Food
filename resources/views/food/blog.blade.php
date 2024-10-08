<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    @livewire('links')
    <style>
        .nueva {
            height: 420px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
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
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog -->
    <div class="blog-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Blog</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">


                {{-- aqui esta el primero --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-01.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                {{-- aqui termina --}}


                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-02.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-03.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-04.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-05.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-06.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-07.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{ asset('inicio/images/blog-img-08.jpg') }}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                {{-- este va ser mi prueba --}}

                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-box-inner">
                            <div class="blog-img-box">
                                @if ($post->image)
                                    <img class="img-fluid nueva" src="{{ Storage::url($post->image->url) }}">
                                @else
                                    <img class="img-fluid"
                                        src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg"
                                        alt="">
                                @endif
                            </div>
                            <div class="blog-detail">
                                <h4>{{ $post->name }}</h4>
                                <ul>
                                    <li><span>{{ $post->user->name }}</span></li>
                                    <li>|</li>
                                    <li><span>{{ $date->format('d/m/Y') }}</span></li>
                                </ul>
                                <p>{!! $post->extract !!} </p>
                                <p><b>quieres conocer más acerca de este tema dale click a leer más . </b></p>
                                <a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('food.blog-details', $post) }}">Leer más</a>
                            </div>
                        </div>
                    </div>
                    {{-- aqui termina el div prueba --}}
                @endforeach


            </div>
            <div class="card-footer">

                {{ $posts->links() }}
            </div>


        </div>
    </div>
    <!-- End blog -->

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
