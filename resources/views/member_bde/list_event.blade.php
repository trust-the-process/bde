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
    
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card card-header">
                    Home Events | Events
                </div>
                <div class="card card-body" id="id">
                    <div class="col-lg-8 ftco-animate">
						<div class="row">
                            @php
                            use Carbon\Carbon;
                            use App\User;
                                $event = DB::table('events')
                                                    ->orderBy('created_at', 'DESC')
                                                    ->paginate(5);
                            @endphp
                            
                            @foreach ($event as $item)
                            <div class="col-md-12 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch d-md-flex">
                                    <a href="/detail_event/{{ $item->id }}" class="block-20" style="background-image: url('{{asset('uploads/product/'.$item->image) }}');">
                                        <img src="{{asset('uploads/product/'.$item->image) }}" alt="" srcset="">
                                    </a>
                                    <div class="text d-block pl-md-4">
                                        <div class="meta mb-3">
                                        <h2>{{ $item->title }}</h2>
                                        <div><strong >{{ Carbon::parse($item->created_at)->diffforHumans() }}<br> Fait le :{{ (date('d F Y', strtotime($item->created_at))) }}<br> Modifie le : {{ date('d F Y H:i:s', strtotime($item->updated_at)) }}</strong></div>
                                        <div><h6>Par : 
                                            @php
                                                $user = DB::select('select * from users where id = '.$item->provider.'' ) ;
                                            @endphp
                                            @foreach ($user as $row)
                                                {{ $row->name}}
                                            @endforeach
                                            </h6></div>
                                        </div>
                                        <h5 class="heading"><strong>Du {{ (date('d F Y', strtotime($item->date_start))) }} au {{ (date('d F Y', strtotime($item->date_stop))) }}</strong></h5>
                                        <p>{{ $item->description }}</p>
                                        <p><a href="/detail_event/{{ $item->id }}" class="btn btn-success py-2 px-5">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection
