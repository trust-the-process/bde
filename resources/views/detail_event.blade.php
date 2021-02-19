@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('../winkel/images/bg_6.jpg')}}');">
        <div class="container"> 
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/event">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-0 bread">{{ $event->title }}</h1>
                </div>
            </div>
        </div>
    </div>

	<section class="ftco-section ftco-degree-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3 mt-5">#{{ $event->id }}. {{ $event->title }}</h2>
              <p> {{ $event->description }}</p>
              <p>
                <img src="{{asset('uploads/product/'.$event->image) }}" alt="" srcset=""  class="img-fluid" > 
              </p>
              <p>{{ $event->text }} </p>
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">{{ $event->mot_cles }}</a>
                </div>
              </div>
              
              <div class="about-author d-flex p-4 bg-light">
                @php
                    $user = DB::select('select * from users where id = '.$event->provider.'' ) ;
                @endphp
                <div class="bio align-self-md-center mr-4">
                  <img src="{{asset('../UCAC-ICAM.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc align-self-md-center">
                  <h3>
                    @foreach ($user as $row)
                        {{ $row->name}}
                    @endforeach	
                  </h3>
                  <p> {{ $event->description }}</p>
                </div>
              </div>
  
  
              <div class="pt-5 mt-5">
                @php
                    $comment = DB::select('select * from comment where type = "event" and provider = '.$event->id.' ' )
                @endphp

                <h3 class="mb-5">{{ count($comment)}} Comments</h3>
                <ul class="comment-list">
                  @foreach ($comment as $item)
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{asset('../images/bde1.png')}}" width="222px" height="122px" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>{{ $item->name }}</h3>
                      <div class="meta">{{ (date('d F Y', strtotime($item->created_at))) }}</div>
                      <p>{{ $item->comment }}</p>
                      <p><a href="#" class="reply">{{ $item->title }}</a></p>
                    </div>
                  </li>
                  @endforeach
                  
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="{{ route('form_add_comment') }}" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" name="name_comment" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" name="email_comment" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Titre du commentaire</label>
                      <input type="text" name="title_comment" class="form-control" id="website">
                    </div>
  
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>
                    <input type="hidden" name="motif" value="event">
                    <input type="hidden" name="type" value="event">
                    <input type="hidden" name="provider" value="{{ $event->id }}">

                  </form>
                </div>
              </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">

              <div class="sidebar-box ftco-animate">
                <h3 CLASS="heading">Recent events</h3>
                @php
                  $RECevent = DB::table('events')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(5);
                @endphp
                @foreach ($RECevent as $item_recent)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url({{asset('uploads/product/'.$item_recent->image) }});"></a>
                  <div class="text">
                  <a href="/detail_event/{{ $item_recent->id }}">
                    <h3 class="heading-1">{{ $item_recent->title }}</h3>
                  </a>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> {{ (date('d F Y', strtotime($item_recent->date_start))) }}</div>
                    <div><span class="icon-person"></span> 
                      @php
                        $user = DB::select('select * from users where id = '.$item_recent->provider.'' ) ;
                      @endphp
                      @foreach ($user as $row)
                        {{ $row->name}}
                      @endforeach
                    </div>
                    <div><span class="icon-chat"></span> 
                      @php
                        $comment = DB::select('select * from comment where provider = '.$item_recent->id.' and type = "event" ' );
                      @endphp
                      @if (count($comment) < 1)
                        1
                      @else
                        {{ count($comment) }}
                      @endif
                    </div>
                  </div>
                  </div>
                </div>
                
                @endforeach
                
                </div>
          
                <div class="sidebar-box ftco-animate">
                <h3 CLASS="heading">Mot cles</h3>
                <div class="tagcloud">
                  @php
                    $mot = DB::select('select DISTINCT mot_cles from events  ' );
                  @endphp
                  @foreach ($mot as $item_mot)
                    <a href="#" class="tag-cloud-link"># {{ $item_mot->mot_cles }}</a>
                  @endforeach
                </div>
                </div>
          
                <div class="sidebar-box ftco-animate">
                <h3 class="heading">Proverbes</h3>
                <p>Le seul individu forme, c'est celui qui a appris comment apprendre.<br> Karl Rogers, 1972</p>
                </div>


          </div>

        </div>
      </div>
    </section> <!-- .section -->


    @endsection