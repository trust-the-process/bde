@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home_winkel">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <form action="{{ route('call_market') }}" class="ps-checkout__form" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}
                
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                        @guest

                            <h3>Détails de facturation</h3>
                            <input type="hidden" name="id_user" value="0">

                            <div class="form-group form-group--inline">
                                <label>Nom exact<span>*</span>
                                </label>
                                <input class="form-control" name="name" type="text" required>
                            </div>
                            <div class="form-group form-group--inline">
                                <label>E-mail<span>*</span>
                                </label>
                                <input class="form-control" name="email" type="email" required>
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Address complete et detaille<span>*</span>
                                </label>
                                <input class="form-control" name="residence" type="text" required>
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Téléphone<span>*</span>
                                </label>
                                <input class="form-control" name="tel" type="text" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block btn-lg" style="background-color: lawngreen !important;color:black;">Passer la commande<i class="ps-icon-next"></i></button>

                        @else
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id}}">
                            <input type="hidden" name="name" value="{{ Auth::user()->name}}">
                            <input type="hidden" name="email" value="{{ Auth::user()->email}}">
                            <input type="hidden" name="tel" value="{{ Auth::user()->tel}}">
                            <input type="hidden" name="residence" value="{{ Auth::user()->residence}}">
                            <button type="submit" class="btn btn-success btn-block btn-lg" style="background-color: lawngreen !important;color:black;">Passer la commande<i class="ps-icon-next"></i></button>
                        @endguest
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__order">
                        <header>
                            <h3>Votre commande</h3>
                        </header>
                        <div class="content">
                            <table class="table ps-cart__table" style="color: #fff;">
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
                                            <a class="ps-product__preview" href="/product/product-detail/{{$row->id}}">
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
                                        <td>{{ number_format($row->price) }}</td>
                                        <td>{{ number_format($row->qty) }}</td>
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
                    <div class="ps-shipping">
                        <h3>LIVRAISON GRATUITE</h3>
                        <p>TES COMMANDES SE QUALIFIENT POUR DES EXPEDITIONS GRATUITES.<br> <a href="#"> Inscrivez-vous </a> pour la livraison gratuite à chaque commande, à chaque fois. </p>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section> <!-- .section -->

    @endsection