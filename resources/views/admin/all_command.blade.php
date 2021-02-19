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
                            <div class="panel-header panel-header-sm">
                            </div>
                            <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <table class="table">
                                            <thead>
                                                <th>N*</th>
                                                <th>Client  </th>
                                                <th>Tel</th>
                                                <th>Produits</th>
                                                <th>Prix de vente</th>
                                                <th>VALIDER L'OFFRE</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $command_market = DB::table('command_emis')
                                                                ->where('table','LIKE','%shop%')
                                                                ->paginate(100);
                                                @endphp
                                                @foreach ($command_market as $item)
                                                <tr id="{{ $item->id }}">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td><strong>{{ $item->tel }}</strong></td>
                                                    <td>
                                                        @php
                                                            $idProduit = json_decode(($item->idProduct), true);
                                                            $qtyProduit = json_decode(($item->allQuantityCommande), true);
                                                        @endphp
                                                        @for ($i = 0; $i < count($idProduit); $i++)
                                                            @php
                                                                $life_market = DB::select('select * from product where id = '.$idProduit[$i].'');
                                                            @endphp
                                                            @foreach ($life_market as $item_market)
                                                                <span class="border-bottom"> Nom: <br></span><b>{{ $item_market->title }}</b><br>
                                                                
                                                                Prix: <br> <b>{{ number_format($item_market->price) }}</b><br>
                    
                                                                Quantite : <b>{{ $qtyProduit[$i]}} </b><br>
                                
                                                                Fournisseur: <br>
                                                                <b>
                                                                    @if ($item_market->provider != 'life')
                                                                        @php
                                                                            $provider = DB::select('select * from users where id = "'.$item_market->provider.'" ')
                                                                        @endphp
                                                                        @foreach ($provider as $item_provider)
                                                                            Name: {{ $item_provider->name }} | Tel: {{ $item_provider->tel }}
                                                                        @endforeach
                                                                    @else
                                                                        Life
                                                                    @endif
                                                                    
                                                                </b><br>
                                                            @endforeach
                                                        @endfor
                                                    </td>
                                                    <td>{{ number_format($item->totalFacture) }}</td>
                                                    <td>
                                                        <a href="/delete_command_emis/{{ $item->id }}" onclick="if(confirm('LE PRODUIT A ETE LIVRE ????  Avez vous deja appeler le client et le proprietaire  ? ') == true){ return true; } else {return false}" class="btn btn-success btn-lg btn-block">Valider</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

@endsection