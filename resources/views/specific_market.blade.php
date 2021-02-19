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

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
						@php
						use App\product;
							$accessoire = DB::table('product')->paginate(12);
						@endphp
						@if (count($accessoire) > 0)
							@foreach ($accessoire as $item)
							<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
								<div class="product">
									<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('uploads/product/'.$item->image.'')}}" alt="Colorlib Template">
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
										<p class="bottom-area d-flex px-3">
											<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
											<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
										</p>
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

		    	<div class="col-md-4 col-lg-2 sidebar">
		    		<div class="sidebar-box-2">
		    			<h2 class="heading mb-4"><a href="#">Accessoires</a></h2>
						<ul>
							@php
								$i = 42;
								$category_shop = DB::select('select DISTINCT category from product');
								$count = count($category_shop);
							@endphp
							@if (count($category_shop) >= 1)
								<li class="{{  'shop' == request()->path() ? '' : '' }}">
									<a class="col-green" href="/shop">Life({{ $count }})</a>
								</li>
								@foreach ($category_shop as $item)
									<li
									@php
										$url = "";
										$url = $_SERVER['REQUEST_URI'];
			
										//if (strstr($url, $item->category) !== false ) {
										if (str_contains($url, $item->category)) {
										//if (preg_match("/{$url}/i", $item->category)) {
											echo 'class=""';
										}else {
											echo 'class="none"';
										}
									@endphp 
									>
										<a href="/shop/specific_market?type={{ $item->category}}">{{ $item->category}} ( {{ number_format( (count($category_shop) * ($i / 5)) + 2 ) }} )</a>
									</li>
									@php
										$i = ($i + 15) - count($category_shop);
									@endphp
								@endforeach
							@endif
			
						</ul>
					</div>
    			</div>
    		</div>
    	</div>
    </section>
    @endsection