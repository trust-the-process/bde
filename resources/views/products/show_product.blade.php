@extends('admin.index')
@section('content')
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">BDE UCAC ICAM</h2>
								<h5 class="text-white op-7 mb-2">BDE UCAC ICAM</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
									
									<a class="btn btn-white btn-border btn-round mr-2" data-close="true" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										{{ __('logout') }}
										<i class="fa fa-power"></i>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
										@csrf
									</form>
									</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
                        <div class="col-md-12">
                            <div class="col-lg-12 col-md-4 col-sm-12">
								<div class="card">
									<br><br>
									<section class="ftco-section-2 ftco-degree-bg">
										<div class="container d-flex">
										  <div class="section-2-blocks-wrapper row d-flex">
											<div class="img hover col-lg-4 order-last" style="background-image: url('');background-repeat: no-repeat;">
												<img src="{{asset('uploads/product/'. $add_product->image) }}" alt="Product" class="img-fluid" />
											</div>
											<div class="text col-lg-7 order-first ftco-animate">
											  <div class="text-inner align-self-start">
												  <BR>
												<h3 class="heading">Welcome to our website</h3>
												<p>Referent : {{ $add_product->referent }}.</p>
												<p> title : {{ $add_product->title }}</p>
								  
												<p>Descripttion : <br>  {{ $add_product->description }}</p>
				
												<ul class="product_price list-unstyled">
													<li class="old_price color-green">PRIX MINIMUN : {{ $add_product->price }}</li>
												</ul>
											  </div>
											</div>
										  </div>
										</div>
										<a href="/list_product" style="width:100%;font-size:22px;color:#fff;" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-assignment-return"></i>BACK</a>
									</section>
								</div>
							</div>
                        </div>  
					</div>
				</div>
			</div>
		
		@endsection