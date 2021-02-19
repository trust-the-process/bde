@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home_winkel">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="ps-cart-listing">
						<table class="table ps-cart__table">
							<thead>
								<tr>
									<th>Tous les produits</th>
									<th>Prix</th>
									<th>Quantité</th>
									<th>Total</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach (Cart::content() as $row)
								<tr>
									<td>
										<a class="ps-product__preview" href="/product_detail/{{$row->id}}">
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
									<td>{{ number_format($row->subtotal) }} XAF</td>
									<td>
										<a class="ps-cart-item__close" href="/cart_remove/{{ $row->rowId }}">
											<div class="ps-remove"></div>
										</a>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
						<div class="ps-cart__actions">
							
							<div class="ps-cart__total">
								<h3>Prix ​​total: <span> {{ Cart::subtotal() }} XAF</span></h3><a class="ps-btn" href="/shop/checkout">Processus de paiement<i class="ps-icon-next"></i></a>
							</div>
						</div>
					</div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>{{ Cart::subtotal() }} XAF</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{ Cart::total() }} XAF</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
    @endsection