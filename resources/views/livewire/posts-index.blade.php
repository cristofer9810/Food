<div>
     {{-- este va ser mi prueba  --}}

     @foreach ($posts as $post)
     <div class="col-lg-4 col-md-6 col-12">
         <div class="blog-box-inner">
             <div class="blog-img-box">
                 @if ($post->image)
                 <img class="img-fluid" src="{{ Storage::url($post->image->url) }}" alt="600">
                 @else
                 <img class="img-fluid" src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg" alt="">
                 @endif
             </div>
             <div class="blog-detail">
                 <h4>{{ $post->name }}</h4>
                 <ul>
                     <li><span>Post by Admin</span></li>
                     <li>|</li>
                     <li><span>27 February 2018</span></li>
                 </ul>
                 <p>{!! $post->extract !!} </p>
                 <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                 <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
             </div>
         </div>
     </div>
     {{-- aqui termina el div prueba --}}
     @endforeach

     <div class="card-footer">
         {{$posts->links()}}
     </div>
</div>
