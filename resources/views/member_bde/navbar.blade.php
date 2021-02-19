<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('../1.jpg')}}'" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{  'member_bde' == request()->path() ? 'active open' : '' }} @if(Route::currentRouteName() == 'stat.index') active open @endif">
                    <a data-toggle="collapse" href="#member_bde" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>{{ Auth::user()->name }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="member_bde">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/member_bde">
                                    <span class="sub-item">Les Statistiques</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item 
                {{  'member_bde.add_product' == request()->path() ? 'active open' : '' }}
                @if(Route::currentRouteName() == 'member_bde.list_product') active open @endif 
                @if(Route::currentRouteName() == 'member_bde.add_product') active open @endif
                @if(Route::currentRouteName() == 'member_bde.edit_product') active open @endif
                ">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Products</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{  'add_product' == request()->path() ? 'active open' : '' }}">
                                <a href="/add_product">
                                    <span class="sub-item">Ajouter un product</span>
                                </a>
                            </li>
                            <li class="@if(Route::currentRouteName() == 'list_product') active open @endif @if(Route::currentRouteName() == 'edit_product') active open @endif ">
                                <a href="/list_product">
                                    <span class="sub-item">Listes des products</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item 
                @if(Route::currentRouteName() == 'member_bde.list_event') active open @endif
                @if(Route::currentRouteName() == 'member_bde.add_event') active open @endif
                ">
                    <a data-toggle="collapse" href="#event">
                        <i class="icon-copy fa fa-paper-plane" aria-hidden="true"></i>
                        <p>Les Evenements </p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="event">
                        <ul class="nav nav-collapse">
                            <li class="{{  'add_event' == request()->path() ? 'active open' : '' }}">
                                <a href="/add_event">
                                    <span class="sub-item">Ajouter un Evenements</span>
                                </a>
                            </li>
                            <li class="@if(Route::currentRouteName() == 'member_bde.list_event') active open @endif @if(Route::currentRouteName() == 'member_bde.edit_event') active open @endif ">
                                <a href="/list_event">
                                    <span class="sub-item">Listes des Evenements</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mx-4 mt-2">
                    <a href="/search" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-check"></i> </span>Rechercher un produit</a> 
                </li>
            </ul>
        </div>
    </div>
</div>