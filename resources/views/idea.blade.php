@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home_winkel">Activity</a></span> <span>Activity</span></p>
            <h1 class="mb-0 bread">Boite à idée</h1>
          </div>
        </div>
      </div>
    </div>
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
        <div class="col-md-12">
            <div class="card full-height shadow">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        <b>IDEA Bien Ajouter</b>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        @if (session('error'))
        <script>
            function name() {
                swal("{{ session('error') }}!", "You clicked the button!", {
                    icon : "error",
                    buttons: {
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            }
        </script>
        <div class="col-md-12">
            <div class="card full-height shadow">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                        <b>IDEA ete mal ou pas Ajouter</b>
                    </div>
                </div>
            </div>
        </div>
        @endif
    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
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
                            <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Your idea"></textarea>
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

                <div class="col-md-6 d-flex">
                <a href="#" class="img-prod"><img class="img-fluid" src="../winkel/images/about-1.jpg" alt="Colorlib Template">
                </div>
            </div>
        </div>
        <div class="container">
            
            <div class="row block-9">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
        
    </section>
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
    @endsection