@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/home_winkel">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
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
                        <b>MSG Bien Ajouter</b>
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
                        <b>MSG ete mal ou pas Ajouter</b>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Address:</span> Institut Ucac-Icam, Campus de Douala Yansoki</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+242 05 524 59</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@ucac-icam.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Website</span> <a href="#">bdeiui.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form id="contact" action="/contact_form" method="get">                        

                            <input name="name" class="form-control col-md-12" type="text" id="name" placeholder="Votre Nom *" required="">
                            <br><input name="phone" class="form-control col-md-12" type="text" id="phone" placeholder="Numero de Telephne" required="">

                            <br><input name="email" class="form-control col-md-12" type="email" id="email" placeholder="Votre E-mail *" required="">

                            <br><input name="subject" class="form-control col-md-12" type="text" id="subject" placeholder="Objet">

                            <br><textarea name="message" class="form-control col-md-12" rows="6" id="message" placeholder="Message" required=""></textarea>
                            <br>
                            <button type="submit" class=" btn-success btn" id="form-submit" >Envoyer un message maintenant <i class="fa fa-arrow-right"></i></button>

                        
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
        
    </section>
    @endsection