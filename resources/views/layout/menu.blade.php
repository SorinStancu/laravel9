<div class="sidebar-wrapper">

    <div>

        <div class="logo-wrapper">

            <a href="{{ route('home') }}">
                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="logo"></a>
            <div class="back-btn">

                <i class="fa fa-angle-left"></i>

            </div>

            <div class="toggle-sidebar">

                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>

            </div>

        </div>

        <div class="logo-icon-wrapper">

            <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="icon"></a>

        </div>

        <nav class="sidebar-main">

            <div class="left-arrow" id="left-arrow">

                <i data-feather="arrow-left"></i>

            </div>

            <div id="sidebar-menu">

                <ul class="sidebar-links" id="simple-bar">

                    <li class="back-btn">
                        <a href="{{ route('home') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="logo icon"></a>

                        <div class="mobile-back text-end">

                            <span>back</span> <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    @if ( $setari->site =='magazin' )

                    <li class="sidebar-main-title">

                        <div>

                            <h6>Shop</h6>

                            <p>comenzi, produse, clienti</p>

                        </div>

                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="shopping-bag"></i>
                            <span>Comenzi</span></a>

                        <ul class="sidebar-submenu">

                            <li>
                                <a href="{{ route('orders') }}">Comenzi noi</a></li>

                            <li>
                                <a href="{{ route('orders') }}">Toate comenzile</a></li>

                            <li>
                                <a href="status_com.php">Statusuri</a></li>

                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="gift"></i><span>Produse</span></a>

                        <ul class="sidebar-submenu">

                            <li class="active">
                                <a href="{{ route('produse') }}">Produse</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'categorii') ? 'active' : '' ?>">
                                <a href="categories">Categorii</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'pachete') ? 'active' : '' ?>">
                                <a href="packs">Pachete</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'promotii') ? 'active' : '' ?>">
                                <a href="home_products">Promotii</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'filtre') ? 'active' : '' ?>">
                                <a href="filtre">Filtre</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'vouchere') ? 'active' : '' ?>">
                                <a href="vouchere">Vouchere</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'produse') ? 'producatori' : '' ?>">
                                <a href="producatori">Producatori</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'statusp') ? 'active' : '' ?>">
                                <a href='status_prod'>Statusuri</a>

                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Clienti</span></a>

                        <ul class="sidebar-submenu">

                            <li class="<?//= ($_SESSION['submeniu'] == 'clienti') ? 'active' : '' ?>">
                                <a href="users">Clienti</a></li>

                            <li class="<?//= ($_SESSION['submeniu'] == 'produse') ? 'review' : '' ?>">
                                <a href="review">Review-uri</a></li>

                        </ul>
                    </li>

					@endif

                    <li class="sidebar-main-title">

                        <div>

                            <h6>Module site</h6>

                            <p>pagini statice, dinamice</p>

                        </div>

                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"> <i data-feather="file-text"></i><span>Pagini</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('add_pag') }}"><strong>Adauga pagini</strong></a>
                            </li>
                            @foreach ($pagini as $pagina)
                                <li style="margin-left: 15px;">
                                    <a href="{{$pagina->link}}">{{$pagina->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav " href="{{ route('bannere') }}">
                            <i data-feather="image"> </i><span>bannere</span></a>
                    </li>

                    @if ( $setari->galerie =='da' )

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav"

                                href="{{ route('galeriefoto') }}"
                        ><i data-feather="camera"> </i><span>Galerie foto</span></a>
                    </li>
                         @endif
                    @if ( $setari->news =='da' )

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav"  href="{{ route('news') }}"
                        ><i data-feather='refresh-ccw'></i> </i><span>Stiri</span></a>
                    </li>
                    @endif
                    @if ( $setari->blog =='da' )

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i data-feather="list"></i><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li class="">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('catblog') }}">
                                    <span>Categorii</span></a>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('artblog') }}"><span>Articole</span></a>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('comblog') }}"><span>Comentarii</span></a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Setari</h6>
                            <p>setari diverse</p>
                        </div>

                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i data-feather="{{ route('setari') }}"> </i><span>Setari</span></a>

                        <ul class="sidebar-submenu">

                            <li class="">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('useri') }}"><span>Useri</span></a>
                            </li>

                            <li class="">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('mentenanta') }}"><span>Mentenanta</span></a>
                            </li>

{{--                            <li class="">--}}
{{--                                <a class="sidebar-link sidebar-title link-nav" href="bk">--}}
{{--                                    <span>Site</span></a></li>--}}
                        </ul>
                    </li>

                </ul>

            </div>

            <div class="right-arrow" id="right-arrow">

                <i data-feather="arrow-right"></i>

            </div>

        </nav>

    </div>

</div>