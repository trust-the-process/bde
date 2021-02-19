@extends('member_bde.member_bde')

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
                    <b>Evenement Bien Ajouter</b>
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
                    <b>product ete mal ou pas Ajouter</b>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card card-header">
                    <h2>Ajouter Un Evenement</h2>
                    <h3>Ajouter les identifiants d'un Evenement</h3>
                    <div class="card-body">
                        <form action="{{ route('form_add_event') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom du Evenement</label>
                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description du Evenement</label>
                                <div class="col-md-10">
                                    <input id="description" type="text" class="form-control" name="description" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">L'Evenement</label>
                                <div class="col-md-10">
                                    <textarea name="text" id="" cols="30" rows="7" class="form-control" placeholder="Your Event"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot Cles de l`Evenement</label>
                                <div class="col-md-10">
                                    <input id="mot_cles" type="text" class="form-control" name="mot_cles" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date Start de l`Evenement</label>
                                <div class="col-md-10">
                                    <input id="date_start" type="date" class="form-control" name="date_start" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date STOP de l`Evenement</label>
                                <div class="col-md-10">
                                    <input id="date_stop" type="date" class="form-control" name="date_stop" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10">
                                    <label class="col-md-4 control-label">Ajouter Une Image</label>
                                    <input id="image" type="file" class="form-control" name="image" required>
                                </div>
                            </div>
                            <div class="nonen none" style="display: none;">
                                <input type="hidden" name="provider" value="{{ Auth::user()->id }}" required readonly>
                                <input type="hidden" name="other" value="{{ Auth::user()->name }}" required readonly>
                            </div>
                            <div class="col-md-10 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-sign-in"></i>Ajouter
                                </button>
                                <a href="/add_event">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-btn fa-sign-in"></i>Cancel
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection
