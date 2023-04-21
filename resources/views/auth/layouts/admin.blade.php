@php
    $sppsettings = DB::table('settings')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{$sppsettings->app_description}}">
    <meta name="keywords" content="ARCSystems">
    <meta name="author" content="Schoolville">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{$sppsettings->app_name}}</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('/uploads/settings/'.$sppsettings->favicon)}}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!-- apex css -->
    <link href="{{asset('assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{asset('assets/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    @yield('styles')
    <!-- End css -->
</head>
<body class="horizontal-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar" class="container-fluid">
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="{{route('admin.dashboard')}}" class="mobile-logo"><img src="{{asset('/uploads/settings/'.$sppsettings->logo)}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('assets/images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{asset('assets/images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                            <img src="{{asset('assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start container-fluid -->
                <div class="container-fluid">
                    <!-- Start row -->
                    <div class="row align-items-center">
                        <!-- Start col -->
                        <div class="col-md-12 align-self-center">
                            <div class="togglebar">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <div class="logobar">
                                            <a href="{{route('admin.dashboard')}}" class="logo logo-large"><img src="{{asset('/uploads/settings/'.$sppsettings->logo)}}" class="img-fluid" alt="logo"></a>
                                        </div>
                                    </li>
                                    {{-- <li class="list-inline-item">
                                        <div class="searchbar">
                                            <form>
                                                <div class="input-group">
                                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addon2"><img src="{{asset('assets/images/svg-icon/search.svg')}}" class="img-fluid" alt="search"></button>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="infobar">
                                <ul class="list-inline mb-0">
                                    {{-- <li class="list-inline-item">
                                        <div class="settingbar">
                                            <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                                <img src="{{asset('assets/images/svg-icon/settings.svg')}}" class="img-fluid" alt="settings">
                                            </a>
                                        </div>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <div class="notifybar">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/svg-icon/notifications.svg')}}" class="img-fluid" alt="notifications">
                                                <span class="live-icon"></span></a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                    <div class="notification-dropdown-title">
                                                        <h4>Notifications</h4>
                                                    </div>
                                                    <ul class="list-unstyled">
                                                        <li class="media dropdown-item">
                                                            <span class="action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                            <div class="media-body">
                                                                <h5 class="action-title">$135 received</h5>
                                                                <p><span class="timing">Today, 10:45 AM</span></p>
                                                            </div>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <span class="action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                            <div class="media-body">
                                                                <h5 class="action-title">Project X prototype approved</h5>
                                                                <p><span class="timing">Yesterday, 01:40 PM</span></p>
                                                            </div>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <span class="action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                            <div class="media-body">
                                                                <h5 class="action-title">John requested to view wireframe</h5>
                                                                <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>
                                                            </div>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <span class="action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                            <div class="media-body">
                                                                <h5 class="action-title">Sports shoes are out of stock</h5>
                                                                <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="languagebar">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-ng flag-icon-squared"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                                    <a class="dropdown-item" href="#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                                    <a class="dropdown-item" href="#"><i class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                                    <a class="dropdown-item" href="#"><i class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                                    <a class="dropdown-item" href="#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="profilebar">
                                            <div class="dropdown">
                                              <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/users/profile.svg')}}" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                    <div class="dropdown-item">
                                                        <div class="profilename">
                                                          <h5>{{Auth::user()->name}}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="userbox">
                                                        <ul class="list-unstyled mb-0">
                                                            {{-- <li class="media dropdown-item">
                                                                <a href="#" class="profile-icon"><img src="{{asset('assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="user">My Profile</a>
                                                            </li> --}}
                                                            <li class="media dropdown-item">
                                                                <a href="#" class="profile-icon"><img src="{{asset('assets/images/svg-icon/email.svg')}}" class="img-fluid" alt="email">Email</a>
                                                            </li>
                                                            <li class="media dropdown-item">
                                                                <a href="{{route('admin.logout')}}" class="profile-icon"><img src="{{asset('assets/images/svg-icon/logout.svg')}}" class="img-fluid" alt="logout">Logout</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item menubar-toggle">
                                        <div class="menubar">
                                            <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                                <img src="{{asset('assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                                <img src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                            </a>
                                         </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container-fluid -->
            </div>
            <!-- End Topbar -->
            <!-- Start Navigationbar -->
            <div class="navigationbar">
                <!-- Start container-fluid -->
                <div class="container-fluid">
                    <!-- Start Horizontal Nav -->
                    <nav class="horizontal-nav mobile-navbar fixed-navbar">
                        <div class="collapse navbar-collapse" id="navbar-menu">
                          <ul class="horizontal-menu">
                            <li class="scroll">
                                <a href="{{route('admin.dashboard')}}" class="" ><img src="{{asset('assets/images/svg-icon/dashboard.svg')}}" class="img-fluid" alt="dashboard"><span>Dashboard</span></a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="index.html">CRM</a></li>
                                    <li><a href="dashboard-ecommerce.html">eCommerce</a></li>
                                    <li><a href="dashboard-hospital.html">Hospital</a></li>
                                    <li><a href="dashboard-crypto.html">Crypto</a></li>
                                <li><a href="dashboard-school.html">School</a></li>
                                </ul> --}}
                            </li>
                            <li class="">
                                <a href="{{route('admin.socialmedia')}}" class="" ><img src="{{asset('assets/images/svg-icon/apps.svg')}}" class="img-fluid" alt="apps"><span>Soocial Media</span></a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="apps-calender.html">Calender</a></li>
                                    <li><a href="apps-chat.html">Chat</a></li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Email</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="apps-email-inbox.html"></i>Inbox</a></li>
                                            <li><a href="apps-email-open.html"></i>Open</a></li>
                                            <li><a href="apps-email-compose.html"></i>Compose</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="apps-kanban-board.html"></i>Kanban Board</a></li>
                                    <li><a href="apps-onboarding-screens.html"></i>Onboarding Screens</a></li>
                                </ul> --}}
                            </li>
                            {{-- <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/images/svg-icon/components.svg')}}" class="img-fluid" alt="components"><span>Components</span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><span>Forms</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-inputs.html">Basic Elements</a></li>
                                            <li><a href="form-groups.html">Groups</a></li>
                                            <li><a href="form-layouts.html">Layouts</a></li>
                                            <li><a href="form-colorpickers.html">Color Pickers</a></li>
                                            <li><a href="form-datepickers.html">Date Pickers</a></li>
                                            <li><a href="form-editors.html">Editors</a></li>
                                            <li><a href="form-file-uploads.html">File Uploads</a></li>
                                            <li><a href="form-input-mask.html">Input Mask</a></li>
                                            <li><a href="form-maxlength.html">MaxLength</a></li>
                                            <li><a href="form-selects.html">Selects</a></li>
                                            <li><a href="form-touchspin.html">Touchspin</a></li>
                                            <li><a href="form-validations.html">Validations</a></li>
                                            <li><a href="form-wizards.html">Wizards</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Icons</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="icon-svg.html">SVG</a></li>
                                            <li><a href="icon-dripicons.html">Dripicons</a></li>
                                            <li><a href="icon-feather.html">Feather</a></li>
                                            <li><a href="icon-flag.html">Flag</a></li>
                                            <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                            <li><a href="icon-ionicons.html">Ion</a></li>
                                            <li><a href="icon-line-awesome.html">Line Awesome</a></li>
                                            <li><a href="icon-material-design.html">Material Design</a></li>
                                            <li><a href="icon-simple-line.html">Simple Line</a></li>
                                            <li><a href="icon-socicon.html">Socicon</a></li>
                                            <li><a href="icon-themify.html">Themify</a></li>
                                            <li><a href="icon-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Charts</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="chart-apex.html">Apex</a></li>
                                            <li><a href="chart-c3.html">C3</a></li>
                                            <li><a href="chart-chartistjs.html">Chartist</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                                            <li><a href="chart-flot.html">Flot</a></li>
                                            <li><a href="chart-knob.html">Knob</a></li>
                                            <li><a href="chart-morris.html">Morris</a></li>
                                            <li><a href="chart-piety.html">Piety</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Tables</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="table-bootstrap.html">Bootstrap</a></li>
                                            <li><a href="table-datatable.html">Datatable</a></li>
                                            <li><a href="table-editable.html">Editable</a></li>
                                            <li><a href="table-footable.html">Foo</a></li>
                                            <li><a href="table-rwdtable.html">RWD</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Maps</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="map-google.html">Google</a></li>
                                            <li><a href="map-vector.html">Vector</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/images/svg-icon/pages.svg')}}" class="img-fluid" alt="pages"><span>Sections</span></a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="{{route('admin.clients')}}" class="" >Clients</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.hero')}}" class="">Hero</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.about')}}" class="">About</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.feature')}}" class="">Features</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.revenue')}}" class="">Revenue</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.collection')}}" class="">Collection</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.contact')}}" class="">Contact</a>

                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="scroll"><a href="widgets.html"><img src="{{asset('assets/images/svg-icon/widgets.svg')}}" class="img-fluid" alt="widgets"><span>Widgets</span></a></li>
                            <li class="dropdown menu-item-has-mega-menu">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/images/svg-icon/basic.svg')}}" class="img-fluid" alt="basic"><span>Basic UI</span></a>
                                <div class="mega-menu dropdown-menu">
                                    <ul class="mega-menu-row" role="menu">
                                        <li class="mega-menu-col col-md-3">
                                            <ul class="sub-menu">
                                                <li><a href="basic-ui-kits-alerts.html">Alerts</a></li>
                                                <li><a href="basic-ui-kits-badges.html">Badges</a></li>
                                                <li><a href="basic-ui-kits-buttons.html">Buttons</a></li>
                                                <li><a href="basic-ui-kits-cards.html">Cards</a></li>
                                                <li><a href="basic-ui-kits-carousel.html">Carousel</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-md-3">
                                            <ul class="sub-menu">
                                                <li><a href="basic-ui-kits-collapse.html">Collapse</a></li>
                                                <li><a href="basic-ui-kits-dropdowns.html">Dropdowns</a></li>
                                                <li><a href="basic-ui-kits-embeds.html">Embeds</a></li>
                                                <li><a href="basic-ui-kits-grids.html">Grids</a></li>
                                                <li><a href="basic-ui-kits-images.html">Images</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-md-3">
                                            <ul class="sub-menu">
                                                <li><a href="basic-ui-kits-media.html">Media</a></li>
                                                <li><a href="basic-ui-kits-modals.html">Modals</a></li>
                                                <li><a href="basic-ui-kits-paginations.html">Paginations</a></li>
                                                <li><a href="basic-ui-kits-popovers.html">Popovers</a></li>
                                                <li><a href="basic-ui-kits-progressbars.html">Progress Bars</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-md-3">
                                            <ul class="sub-menu">
                                                <li><a href="basic-ui-kits-spinners.html">Spinners</a></li>
                                                <li><a href="basic-ui-kits-tabs.html">Tabs</a></li>
                                                <li><a href="basic-ui-kits-toasts.html">Toasts</a></li>
                                                <li><a href="basic-ui-kits-tooltips.html">Tooltips</a></li>
                                                <li><a href="basic-ui-kits-typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}
                            <li class="">
                                <a href="{{route('admin.settings')}}" class=""><img src="{{asset('assets/images/svg-icon/advanced.svg')}}" class="img-fluid" alt="advanced"><span>Settings</span></a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="advanced-ui-kits-image-crop.html">Image Crop</a></li>
                                    <li><a href="advanced-ui-kits-jquery-confirm.html">jQuery Confirm</a></li>
                                    <li><a href="advanced-ui-kits-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-ui-kits-pnotify.html">Pnotify</a></li>
                                    <li><a href="advanced-ui-kits-range-slider.html">Range Slider</a></li>
                                    <li><a href="advanced-ui-kits-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-ui-kits-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="advanced-ui-kits-sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="advanced-ui-kits-switchery.html">Switchery</a></li>
                                    <li><a href="advanced-ui-kits-toolbar.html">Toolbar</a></li>
                                    <li><a href="advanced-ui-kits-tour.html">Tour</a></li>
                                    <li><a href="advanced-ui-kits-treeview.html">Tree View</a></li>
                                </ul> --}}
                            </li>
                          </ul>
                        </div>
                    </nav>
                    <!-- End Horizontal Nav -->
                </div>
                <!-- End container-fluid -->
            </div>
            <!-- End Navigationbar -->
            @yield('content')
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">{{$sppsettings->copywrite_text}} - {{\Carbon\Carbon::now()->format('Y')}}</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/horizontal-menu.js')}}"></script>
    <!-- Switchery js -->
    <script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
    <!-- Apex js -->
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
    <!-- Slick js -->
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <!-- Custom Dashboard js -->
    <script src="{{asset('assets/js/custom/custom-dashboard.js')}}"></script>
    <!-- Core js -->
    <script src="{{asset('assets/js/core.js')}}"></script>
    @yield('scripts')
    <!-- End js -->
</body>
</html>
