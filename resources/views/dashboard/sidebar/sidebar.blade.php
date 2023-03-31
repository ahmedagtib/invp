<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src={{asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class=" ri-building-line"></i> <span data-key="t-dashboards">{{__('settings.business')}}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-mybusiness"> {{__('settings.mybusiness')}} </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-businesscards"> {{__('settings.businesscards')}} </a>  
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-newbusiness"> {{__('settings.newbusiness')}} </a>  
                            </li>

                            <li class="nav-item">
                                <a href="#clients" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarSignIn" data-key="t-signin">
                                    {{__('settings.clients')}}
                                </a>
                                <div class="menu-dropdown collapse show" id="clients" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('clients.company.new')}}" class="nav-link" data-key="t-company"> Company </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('clients.entrepreneur.new')}}" class="nav-link" data-key="t-oentreprenueur"> Auto entrepreneur</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#clients" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarSignIn" data-key="t-signin">
                                    {{__('settings.newbusiness')}}
                                </a>
                                <div class="menu-dropdown collapse show" id="clients" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('status.company.new')}}" class="nav-link" data-key="t-company"> Company </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('status.entrepreneur.new')}}" class="nav-link" data-key="t-oentreprenueur"> Auto entrepreneur</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class=" ri-file-copy-2-line"></i> <span data-key="t-apps">{{__('settings.invoices')}}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> {{__('settings.myinvoices')}} </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                            </li>
                        </ul>
                    </div>
                </li>



    

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">{{__('settings.settings')}}</span></li>

                <li class="nav-item">
                    <a class="nav-link " href="#" >
                        <i class=" ri-settings-5-line"></i> <span data-key="t-base-ui">{{__('settings.contact_information')}}</span>
                    </a>
                
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>