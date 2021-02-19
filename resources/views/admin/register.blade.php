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
                                    <h4 class="card-title"> Listes des Utilisateurs</h4>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                    <tr>
                                                        <th data-breakpoints="sm xs">ID</th>
                                                        <th>Image</th>
                                                        <th>Nom </th>
                                                        <th data-breakpoints="sm xs">Phone</th>
                                                        <th data-breakpoints="xs">email</th>
                                                        <th data-breakpoints="sm xs">Role</th>
                                                        <th data-breakpoints="sm xs md">Edit</th>
                                                        <th data-breakpoints="sm xs md">Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                
                                                        @foreach ($users as $row)
                                                            
                                                    <tr>
                                                        <td><span class="col-green">{{ $row->id }}</span></td>
                                                        <td><img src="uploads/client/{{ $row->image }}" width="48" alt="User"></td>
                                                        <td><h5>{{ $row->name }}</h5></td>
                                                        <td><span class="text-muted">{{ $row->tel }}</span></td>
                                                        <td>{{ $row->email }}</td>
                                                        <td><span class="col-green">{{ $row->usertype }}</span></td>
                                                        <td>
                                                        <a href="/role-edit/{{ $row->id }}" class="btn btn-primary btn-lg btn-block waves-effect waves-float waves-green"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td>
                                                        <form action="/role-delete/{{ $row->id }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger btn-lg btn-block waves-effect waves-float waves-red">
                                                                <i class="icon-copy fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
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
                        </div>
                    </div>
                </div>
            </div>
            

@endsection