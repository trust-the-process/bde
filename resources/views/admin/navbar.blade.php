<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('../1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            BDE UCAC ICAM
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
                <li class="nav-item {{  'dashboard' == request()->path() ? 'active open' : '' }} @if(Route::currentRouteName() == 'stat.index') active open @endif">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/dashboard">
                                    <span class="sub-item">Les Statistiques</span>
                                </a>
                            </li>
                            <li class="@if(Route::currentRouteName() == 'all_command') active open @endif">
                                <a href="/all_command">
                                    <span class="sub-item">Le Bilan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item 
                {{  'admin.add_product' == request()->path() ? 'active open' : '' }}
                @if(Route::currentRouteName() == 'admin.list_product') active open @endif 
                @if(Route::currentRouteName() == 'admin.add_product') active open @endif
                @if(Route::currentRouteName() == 'edit_product') active open @endif
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
                @if(Route::currentRouteName() == 'admin.registered') active open @endif
                @if(Route::currentRouteName() == 'admin.registeredit') active open @endif
                ">
                    <a data-toggle="collapse" href="#user">
                        <i class="icon-copy fa fa-street-view" aria-hidden="true"></i>
                        <p>Les Utilisateurs</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav nav-collapse">
                            <li class="@if(Route::currentRouteName() == 'admin.registered') active open @endif">
                                <a href="/role-register">
                                    <span class="sub-item">Listes des Utilisateurs</span>
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

                <li class="nav-item 
                @if(Route::currentRouteName() == 'member_bde.list_activity') active open @endif
                @if(Route::currentRouteName() == 'member_bde.add_activity') active open @endif
                ">
                    <a data-toggle="collapse" href="#activity">
                        <i class="icon-copy fa fa-cubes" aria-hidden="true"></i>
                        <p>Les Activit&eacute; </p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="activity">
                        <ul class="nav nav-collapse">
                            <li class="{{  'add_activity' == request()->path() ? 'active open' : '' }}">
                                <a href="/add_activity">
                                    <span class="sub-item">Ajouter un Activit&eacute;</span>
                                </a>
                            </li>
                            <li class="@if(Route::currentRouteName() == 'member_bde.list_activity') active open @endif @if(Route::currentRouteName() == 'member_bde.edit_activity') active open @endif ">
                                <a href="/list_activity">
                                    <span class="sub-item">Listes des Activit&eacute;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mx-4 mt-2">
                    <a href="/search" class="btn btn-white btn-block"><span class="btn-label mr-2"> <i class="fa fa-check"></i> </span>Rechercher un produit</a> 
                </li>
            </ul>
        </div>
    </div>
</div>