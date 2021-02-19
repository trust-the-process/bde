@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    
                    @if (session('status'))

                    <script>
                        function name() {
                            swal({
                                title: "Vous etez bien connecte !  ",
                                text: "Attendez les mises a jour et connectez vous!",
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        text: "Confirm Me",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-success",
                                        closeModal: true
                                    }
                                }
                            });
                        }
                    </script>
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

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
                                            <p><a href="/detail_event/{{ $item->id }}" class="btn btn-primary py-2 px-3">Read more</a>
                                                <form action="/add_wishlist" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id_product" value="{{ $item->id}}">
                                                    <input type="hidden" name="name_product" value="{{ $item->title}}">
                                                    <input type="hidden" name="quantity_product" value="1">
                                                    <input type="hidden" name="price_product" value="{{($item->id)}}">

                                                    <a>
                                                        <button type="submit" class="btn btn-success"><span class="icon-favorite"></span>Life</button>
                                                    </a>
                                                </form>
                                            </p>
                                          </div>
                                          
                                      </div>
                                  </div>
                                  @endforeach
                               
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Boutique') }}</div>

                <div class="card-body">
                    <div class="row">
						@php
						use App\product;
							$accessoire = DB::table('product')->paginate(12);
						@endphp
						@if (count($accessoire) > 0)
							@foreach ($accessoire as $item)
							<div class="col-sm-8 col-md-8 col-lg-6 ftco-animate">
								<div class="product">
									<a href="/product-detail/{{ $item->id }}" class="img-prod"><img class="img-fluid" src="{{asset('uploads/product/'.$item->image.'')}}" alt="Colorlib Template">
										<div class="overlay"></div>
									</a>
									<div class="text py-3 px-3">
										<h3><a href="#">{{ $item->title }}</a></h3>
										<div class="d-flex">
											<div class="pricing">
												<p class="price"><span class="price-sale">{{ number_format($item->price) }} XAF</span></p>
											</div>
											<div class="rating">
												<p class="text-right">
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
												</p>
											</div>
										</div>
										<form action="/add_to_cart" method="post">
											@csrf
											<input type="hidden" name="id_product" value="{{ $item->id}}">
											<input type="hidden" name="name_product" value="{{ $item->title}}">
											<input type="hidden" name="quantity_product" value="1">
											<input type="hidden" name="price_product" value="{{($item->price)}}">
											
											<p class="bottom-area d-flex px-3">
												
												<a href="/product-detail/{{ $item->id }}" class="buy-now text-center py-2">More <span><i class="ion-ios-cart ml-1"></i></span></a>
												<a type="submit" href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
											</p>
										</form>
									</div>
								</div>
							</div>
							@endforeach
						@else
						<div class="alert alert-danger col-md-12">
							@include('error_text')
						</div>
						@endif
		    		</div>
                </div>
            </div>
            <br><br>
        </div>
        <br><br>
        <div class="col-md-12">
            <br><br>
            <div class="card">
                <div class="card-header">{{ __('Mes likes') }}</div>

                <div class="card-body">
                    <table class="table ps-cart__table">
                        <thead>
                            <tr>
                                <th>Tous les Evenement</th>
                                <th>Date start</th>
                                <th>Date stop</th>
                                <th>Par</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::instance('wishlist')->content() as $row)
                            <tr>
                                <td>
                                    <a class="ps-product__preview" href="/product-detail/{{$row->id}}">
                                        @php
                                            $image = DB::select('select image from product where id = '.$row->id.' ')
                                        @endphp
                                        @if ($image)
                                            @foreach ($image as $item)
                                                <img width="100px" class="mr-15" class="responsive img-responsive rounded-0" src="{{asset('uploads/product/'.$item->image.'')}}" alt="{{$item->image}}">
                                            @endforeach
                                        @else
                                            <img width="100px" class="mr-15" class="responsive img-responsive rounded-0" src="{{asset('../assets/mobile.png')}}" alt="...">
                                        @endif
                                        {{ $row->name }}
                                    </a>
                                </td>
                                <td>{{ number_format($row->price) }} XAF</td>
                                <td>
                                    <div class="form-group--number">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="{{ $row->qty }}">  
                                            </div>
                                            <div class="col-md-3">
                                                <form action="/update_cart/{{ $row->rowId }}" method="get">
                                                    <input type="hidden" name="operation" value="1"/>
                                                    <input type="hidden" name="qty" value="{{ $row->qty }}"/>
                                                    
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ number_format($row->subtotal) }} </td>
                                <td>
                                    <a class="ps-cart-item__close" href="/cart_remove/{{ $row->rowId }}">
                                        <div class="ps-remove"></div>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 order-md-last d-flex">
            <br><br>
            <div class="card">
                <br><br>
                <div class="card-header">{{ __('Boite à idée') }}</div>

                <div class="card-body">
                    <form action="{{ route('form_add_idea') }}" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_idea" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email_idea" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="objet" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" name="message" class="form-control" placeholder="Your idea"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Votre Profil</label>
                            <input type="file" value="Ajouter votre photo" name="image" class="form-control py-3 px-5">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit your idea" class="btn btn-primary py-3 px-5">
                        </div>
                        @guest
                            <input type="hidden" name="provider" value="0">
                        @else
                            <input type="hidden" name="provider" value="{{ Auth::user()->id }}">
                        @endguest
                    </form>
                </div>
            </div>         

        </div>

    </div>
    <section class="ftco-section testimony-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
              <h2 class="mb-4">LES IDEES</h2>
              <p></p>
            </div>
          </div>
          <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                @php
                    use App\idea;
                    $accessoire = DB::table('idea')->paginate(12);
                @endphp
                @if (count($accessoire) > 0)
                    @foreach ($accessoire as $item)
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5"> 
                        <div class="user-img mb-5" style="background-image: url({{asset('uploads/idea/'.$item->image) }})">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text">
                            <p class="mb-5 pl-4 line"> {{ $item->message }}</p>
                            <p class="name">{{ $item->name }}</p>
                            <span class="position">{{ $item->objet }}</span>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    @else
						<div class="alert alert-danger col-md-12">
							@include('error_text')
						</div>
						@endif
		    			
		    		</div>
		    		<div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                            <ul>
                                {{ $accessoire->render() }}
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
