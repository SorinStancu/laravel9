<body @if($setari->style_admin == '3') class="dark-only" @elseif($setari->style_admin == '2') class="dark-sidebar" @else class="dark-sidebar" @endif>

<div class="loader-wrapper">
    <div class="loader-index"><span></span>
    </div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic"  stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur"  values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>

<div class="tap-top">
    <i data-feather="chevrons-up"></i>
</div>
<div class="page-wrapper horizontal-wrapper enterprice-type advance-layout"  id="pageWrapper">

    <div class="page-header">

        <div class="header-wrapper row m-0">

            <div class="header-logo-wrapper col-auto p-0">

                <div class="logo-wrapper">
                    <a href="{{ route('home') }}">
                        <img class="img-fluid"   src="{{ asset('assets/images/logo/logo.png') }}"   alt="admin"></a>
                </div>

                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>

            </div>

            <div  class="left-header col horizontal-wrapper ps-0">
                <ul class="horizontal-menu">
                    <li class="mega-menu outside">
                        <a class="nav-link"  href="{{ route('home') }}">
                            <i  data-feather="home"></i></a></li>

                    @if ( $setari->site =='prezentare' )
                    <li class="level-menu outside">
                        <a class="nav-link" href="pages">
                            <i  data-feather="file-text"></i><span>Pagini
                    </span></a>
                    </li>
                    @elseif ( $setari->site =='magazin' )
                    <li class="level-menu outside">
                        <a class="nav-link" href="orders">
                            <i  data-feather="shopping-bag"></i><span>Comenzi</span></a>
                    </li>

                    <li class="level-menu outside">
                        <a class="nav-link" href="{{ route('produse') }}" style="background-color: #fdf3bf">
                            <i  data-feather="gift"></i><span>Produse</span></a>
                    </li>

                    <li class="level-menu outside">
                        <a  class="nav-link" href="{{ route('users') }}"  style="background-color:

    #e9c8fd">
                            <i data-feather="users"></i><span>Clienti </span></a>
                    </li>

                    @endif

                </ul>

            </div>

            <div  class="nav-right col-6 pull-right right-header p-0">

                <ul class="nav-menus">

                    @if ( $setari->multilingv =='da' )

                    <li class="language-nav">

                        <div class="translate_wrapper">

                            <div class="current_lang">

                                <div class="lang">
                                    <i   class="flag-icon flag-icon-{{  $lang->presc }}"></i>
                                    <span  class="lang-txt">{{ strtoupper($lang->presc) }}</span>

                                </div>

                            </div>

                            <div class="more_lang">

                                <div class="lang selected"   data-value="{{  $lang->presc }}">

                                    <a href='?id_lang=1' style='color:#000;width:140px;'>

                                        <i  class="flag-icon flag-icon-{{  $lang->presc }}"></i>

                                        <span class="lang-txt">{{  $lang->lang }}<span> ({{  $lang->limba }})

                              </span></span></a>

                                </div>

                                @foreach($langs as $lg)
                                <div class="lang"  data-value="{{  $lg->presc }}">

                                    <a  href='?id_lang={{  $lg->id }}' style='color:#000; letter-spacing:0px;'>

                                        <i   class="flag-icon flag-icon-{{  $lg->presc }}"></i>

                                        <span    class="lang-txt">{{  $lg->limba }}<span> ({{  $lg->presc }})

                              </span></span></a>

                                </div>
                                @endforeach


                            </div>

                    </li>

                    @endif


                        @if ( $setari->site =='magazin' )

                    <li class="cart-nav onhover-dropdown">

                        <div class="cart-box">

                            <i data-feather="shopping-cart"></i>



                            <span class="badge rounded-pill badge-secondary"><?//= $nrcom ?></span><? //} ?>

                        </div>

                        <ul class="cart-dropdown onhover-show-div">

                            <li>

                                <h6 class="mb-0 f-20">Comenzi noi</h6>

                                <i data-feather="shopping-cart"></i>

                            </li>


                            <li class="mt-0">

                                <div class="media">

                                    <div class="media-body">

                                        <span><?//= $user['nume'] ?></span>

                                        <span>Nr. produse: <?//= $nrprod ?></span>

                                        <p>ora: <?//= $ora ?></p>

                                        <h6   class="text-end text-muted"><?//= number_format($suma['suma']) ?>  lei</h6>

                                    </div>

                                </div>

                            </li>

                          <? //} ?>

                            <li>
                                <a   class="btn btn-block w-100 mb-2 btn-primary view-cart"  href="orders">Vezi comenzile</a></li>

                        </ul>

                    </li>

                    <li class="onhover-dropdown">

                        <div class="notification-box">

                            <i data-feather="bell"> </i>

                            <span  class="badge rounded-pill badge-primary">4 </span>

                        </div>

                        <ul class="notification-dropdown onhover-show-div">

                            <li><i data-feather="bell"></i>

                                <h6 class="f-18 mb-0">Review-uri noi</h6></li>

                        </ul>

                    </li>

                  @endif



                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i>
                        </div>
                    </li>

                    <li class="maximize">
                        <a class="text-dark"   href="#!"    onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media">

                            <img class="b-r-10"  src="{{ asset('assets/images/user/'.$setari->avatar ) }}"  width="40px">

                            <div class="media-body">

                                <span>Sorin Stancu</span>

                                <p class="mb-0 font-roboto">{{ $setari->post }}
                                    <i  class="middle fa fa-angle-down"></i></p>
                            </div>

                        </div>

                        <ul class="profile-dropdown onhover-show-div">

                            <li><a href="seting_cont">
                                    <i data-feather="settings"></i><span>Settings</span></a>
                            </li>

                            <li><a href="logout">
                                    <i data-feather="log-out"> </i><span>Log  out</span></a>
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

    <div class="page-body-wrapper">