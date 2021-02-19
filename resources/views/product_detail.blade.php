@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home_winkel">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Nos produits</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="{{asset('uploads/product/'.$detail_shop->image.'')}}" class="image-popup"><img src="{{asset('uploads/product/'.$detail_shop->image.'')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $detail_shop->title }}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">{{ $detail_shop->quantity }}</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
						</div>
    				<p class="price"><span> {{ number_format($detail_shop->price) }}  XAF</span></p>
    				<p>{{ $detail_shop->description }}</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
									<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">Small</option>
										<option value="">Medium</option>
										<option value="">Large</option>
										<option value="">Extra Large</option>
									</select>
									</div>
									</div>
											</div>
											<div class="w-100"></div>
											<div class="input-group col-md-6 d-flex mb-3">
									<span class="input-group-btn mr-2">
										<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
										</button>
										</span>
									<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
									<span class="input-group-btn ml-2">
										<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
										<i class="ion-ios-add"></i>
									</button>
									</span>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<p style="color: #000;">{{ $detail_shop->quantity }} piece available</p>
								</div>
							</div>
          				<p>
							<form action="/add_to_cart" method="post">
								@csrf
								<input type="hidden" name="id_product" value="{{ $detail_shop->id}}">
								<input type="hidden" name="name_product" value="{{ $detail_shop->title}}">
								<input type="hidden" name="quantity_product" value="1">
								<input type="hidden" name="price_product" value="{{($detail_shop->price)}}">

								<a>
									<button type="submit" class="btn btn-success btn-block btn-lg" style="background-color: lawngreen !important;color:black;">Add to Cart</button>
								</a>
						</form>
					</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Ralated Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			@php
				use App\product;
					$accessoire = DB::table('product')->paginate(6);
				@endphp
				@if (count($accessoire) > 0)
					@foreach ($accessoire as $item)
					<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
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
										<button type="submit">   <a type="submit" class="add-to-cart text-center py-2 mr-1"><span> Add to cart <i class="ion-ios-add ml-1"></i></span></a> </button> 
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
    </section>
    @endsection