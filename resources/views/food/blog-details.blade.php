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
                    <h1>Blog</h1>
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
                        <h2>{{ $post->name }}</h2>
                        <p>{!! $post->extract !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <div class="blog-inner-box">
                            <div class="side-blog-img">
                                @if ($post->image)
                                    <img class="img-fluid" src="{{ Storage::url($post->image->url) }}" alt="">
                                @else
                                    <img class="img-fluid"
                                        src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg"
                                        alt="">
                                @endif
                                <div class="date-blog-up">
                                    {{ $date->format('d/m/Y') }}
                                </div>
                            </div>
                            <div class="inner-blog-detail details-page">
                                <h3>{!! $post->extract !!}</h3>
                                <ul>
                                    <li><i class="zmdi zmdi-account"></i>Posted By :
                                        <span>{{ $post->user->name }}</span>
                                    </li>
                                    <li>|</li>
                                    <li><i class="zmdi zmdi-time"></i>Hora : <span> {{ $date->format('H:i') }}</span>
                                    </li>
                                </ul>
                                <p>
                                    {!! $post->body !!}
                                </p>
                                <blockquote>
                                    <p>{!! $post->extract !!}</p>
                                </blockquote>
                                <p>
                                    {!! $post->finalbody !!}
                                </p>
                            </div>
                        </div>
                        <div class="blog-comment-box">
                            <h3>Comments</h3>
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
                        <h3>lo mejor de lo mejor?</h3>
                        <div class="blog-search-form">
                            @if ($post->image)
                                <img class="img-fluid" src="{{ Storage::url($post->image->url) }}" alt="">
                            @else
                                <img class="img-fluid"
                                    src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg"
                                    alt="">
                            @endif
                        </div>
                        <h3>Categorias</h3>
                        <div class="blog-categories">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('food.category', $category) }}"><span>{{ $category->name }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <h3>Post similares</h3>
                        <div class="post-box-blog">
                            <div class="recent-post-box">
                                {{-- pruebas de similares --}}
                                @foreach ($similares as $similar)
                                    <div class="recent-box-blog">
                                        <div class="recent-img">
                                            <a class="flex" href="{{ route('food.blog-details', $similar) }}">
                                                @if ($similar->image)
                                                    <img class="img-fluid" style="height: 80px; width: 80px;"
                                                        src="{{ Storage::url($similar->image->url) }}">
                                                @else
                                                    <img class="img-fluid"
                                                        src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                                                @endif
                                        </div>
                                        <div class="recent-info">
                                            <ul>
                                                <li><i class="zmdi zmdi-account"></i>Posted By :
                                                    <span>{{ $post->user->name }}</span>
                                                </li>
                                                <li>|</li>
                                                <li><i class="zmdi zmdi-time"></i>Hora :
                                                    <span>{{ $date->format('H:i') }}</span></li>
                                            </ul>
                                            <h4>{{ $similar->name }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- aqui termina --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
