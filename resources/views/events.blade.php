@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/home_winkel">Home</a></span> <span>Events</span></p>
            <h1 class="mb-0 bread">Events</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
			<div class="row">
		          @php
					use Carbon\Carbon;
					use App\User;
						$event = DB::table('events')
											->orderBy('created_at', 'ASC')
											->paginate(5);
					@endphp
					
					@foreach ($event as $item)
					<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="/detail_event/{{ $item->id }}" class="block-20" style="background-image: url('{{asset('uploads/product/'.$item->image) }}');">
								
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
								<div><a href="/detail_event/{{ $item->id }}">{{ Carbon::parse($item->created_at)->diffforHumans() }}</a></div>
								<div><a href="/detail_event/{{ $item->id }}">
									@php
										$user = DB::select('select * from users where id = '.$item->provider.'' ) ;
									@endphp
									@foreach ($user as $row)
										{{ $row->name}}
									@endforeach	
								</a></div>
								<div><a href="/detail_event/{{ $item->id }}" class="meta-chat"><span class="icon-chat"></span> 
									@php
										$comment = DB::select('select * from comment where provider = '.$item->id.' and type = "event" ' );
									@endphp
									@if (count($comment) < 1)
										1
									@else
										{{ count($comment) }}
									@endif
								</a></div>
							  </div>
							  <h3 class="heading"><a href="/detail_event/{{ $item->id }}">Du {{ (date('d F Y', strtotime($item->date_start))) }} au {{ (date('d F Y', strtotime($item->date_stop))) }}</a></h3>
							  <p>{{ $item->description }}</p>
							  <p><a href="/detail_event/{{ $item->id }}" class="btn btn-primary py-2 px-3">Read more</a></p>
							</div>
							
						</div>
					</div>
					@endforeach
		         
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