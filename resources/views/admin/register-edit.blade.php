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
                            <div class="card-header">
                                <h4 class="card-title"> Modifier les identifiants d'un client</h4>
                            </div>
                            <div class="card-body">
                                <form action="/role-register-update/{{ $users->id }}" method="POST" class="form-horizontal" role="form">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required autocomplete="name" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                        <div class="col-md-6">
                                            <input value="{{ $users->tel }}" id="tel" type="tel" class="form-control" name="tel" required placeholder="+237 ">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="premium" class="col-md-4 col-form-label text-md-right">{{ __('Type Compte') }}</label>

                                        <div class="col-md-6">
                                            <div class="p-t-10">
                                                <select name="premium" class="form-control select" id="premium" required>
                                                    <option value="{{ $users->usertype }}" selected >{{ $users->usertype }}</option>
                                                    <optgroup label="Type">
                                                        <option value="0">Simple</option>
                                                        <option value="student">STUDENT</option>
                                                        <option value="teacher">TEACHER</option>
                                                        <option value="member_bde">MEMBER_BDE</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-1 row">
                                        <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">Ajouter une image</label>

                                        <div class="col-md-6">
                                            <div class="p-t-10">
                                                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="usertype" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-success btn-block">
                                                <i class="fa fa-btn fa-sign-in"></i>Modifier
                                            </button>        
                                        </div>
                                    </div>
                                </form>
                                <a href="/role-register">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-btn fa-sign-in"></i>Cancel
                                    </button>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
            

@endsection