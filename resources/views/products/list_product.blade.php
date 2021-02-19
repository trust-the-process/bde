@extends('admin.index')
@section('content')
        @if (session('success'))
        <script>
            function name() {
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
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
        @endif

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
                            <div class="body">
                                <div class="card full-height shadow">
                                    <div class="card-body">
                                        <h2>Listes des Produits</h2>
                                        <!--------------------------------->
                                        
                                        <!---->
                                        <h3>Trier par Categorie Produit</h3>
                                        <div class="body table-responsive">
                                        @if (session('add_product'))
                                        
                                        <script>
                                            function name() {
                                                swal({
                                                    title: "Good job!",
                                                    text: "You clicked the button!",
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
                                                {{ session('add_product') }}
                                            </div>
                                        @endif
                                            <table id="DataTable" class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints="sm xs">ID</th>
                                                    <th>Image</th>
                                                    <th>Referent</th>
                                                    <th data-breakpoints="sm xs">Titre</th>
                                                    <th data-breakpoints="xs">Description</th>
                                                    <th data-breakpoints="sm xs">Categories</th>
                                                    <th data-breakpoints="sm xs md">Quantit&eacute;s</th>
                                                    <th data-breakpoints="sm xs md">Prix </th>
                                                    <th data-breakpoints="sm xs md">Stock D'alarme</th>
                                                    <th data-breakpoints="sm xs md">Type du Produit</th>
                                                    <th data-breakpoints="sm xs md">Fournisseurs</th>
                                                    <th data-breakpoints="sm xs md">Voir</th>
                                                    <th data-breakpoints="sm xs md">Editer</th>
                                                    <th data-breakpoints="sm xs md">Modifier</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($add_product as $row)
                                                
                                                <tr>
                                                    <td><span class="col-green">{{ $row->id }}</span></td>
                                                    <td>
                                                        <a href="/show_product/{{ $row->id }}">
                                                            <img src="{{asset('uploads/product/'. $row->image) }}" width="48" alt="Produit">
                                                        </a>
                                                    </td>
                                                    <td><h5>{{ $row->referent }}</h5></td>
                                                    <td><span class="text-muted">{{ $row->title }}</span></td>
                                                    <td>{{ $row->description }}</td>
                                                    <td><span class="text-muted">{{ $row->category }}</span></td>
                                                    <td><span class="text-muted">{{ $row->quantity }}</span></td>
                                                    <td class="price_min"><span class="col-green">{{ $row->price }}</span></td>
                                                    <td><span class="text-muted">{{ $row->alarm_stock }}</span></td>
                                                    <td><span class="text-muted">{{ $row->product_type }}</span></td>
                                                    <td><span class="text-muted">{{ $row->provider }}</span></td>
                                                    <td>
                                                        <a href="/show_product/{{ $row->id }}" class="btn btn-primary waves-effect waves-float waves-green"><i class="fa fa-camera"></i></a>
                                                        </td>
                                                    <td>
                                                    <a href="/edit_product/{{ $row->id }}" class="btn btn-primary waves-effect waves-float waves-green"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                    <td>
                                                    <form action="/delete_product/{{ $row->id }}" method="GET">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" onclick="if(confirm('Are you sure ? Vous ne pourez rien modifier') == true){ return true; } else {return false}" class="btn btn-danger waves-effect waves-float waves-red">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    </td>
                                                </tr>
                
                                                @endforeach
                
                                                </tbody>
                                            </table>
                                            {{ $add_product->render() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<div class="row">
						
                    </div>
                    <br>
					<div class="row row-card-no-pd">
						
					</div>
					<div class="row">
						
					</div>
					<div class="row">
                    </div>
				</div>
			</div>
    
    @endsection
            