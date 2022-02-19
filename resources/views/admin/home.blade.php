@extends('layout.master')
@section('cssdif')
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{asset('assets/css/vendors/whether-icon.css')}}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
             type="text/css" href="{{asset('assets/css/vendors/jkanban.css')}}">
@endsection
@section('content')
<div class="container-fluid">

<div class="row">

<div class="col-sm-6 col-xl-3 col-lg-6">

    <div class="card o-hidden">

        <div class="bg-primary b-r-4 card-body" style="padding:20px ">

            <div class="media static-top-widget">

                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>

                <div class="media-body"><i class="fa fa-spin fa-cog"></i>
                    <span class="m-0">Comenzi luna curenta

                    </span> <div class="loader-38"></div>

                    <h4 class="mb-0 counter">{{ $statistici_com['luna_curenta'] }}</h4>
                    <i class="icon-bg" data-feather="shopping-bag"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="col-sm-6 col-xl-3 col-lg-6">

    <div class="card o-hidden">

        <div class="bg-secondary b-r-4 card-body" style="padding:20px ">

            <div class="media static-top-widget">

                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>

                <div class="media-body"><i class="fa fa-spin fa-cog"></i>
                    <span class="m-0">Comenzi luna trecuta</span>

                    <h4 class="mb-0 counter">{{ $statistici_com['luna_trecuta'] }}</h4>
                    <i class="icon-bg" data-feather="shopping-bag"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="col-sm-6 col-xl-3 col-lg-6">

    <div class="card o-hidden">

        <div class="bg-primary b-r-4 card-body" style="padding:20px ">

            <div class="media static-top-widget">

                <div class="align-self-center text-center"><i data-feather="gift"></i></div>

                <div class="media-body"><i class="fa fa-spin fa-cog"></i>
                    <span class="m-0">Total produse</span>

                    <h4 class="mb-0 counter">{{ number_format($statistici_prod['produse']) }}</h4>
                    <i class="icon-bg" data-feather="gift"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="col-sm-6 col-xl-3 col-lg-6">

    <div class="card o-hidden">

        <div class="bg-secondary b-r-4 card-body" style="padding:20px ">

            <div class="media static-top-widget">

                <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>

                <div class="media-body"><i class="fa fa-spin fa-cog"></i>
                    <span class="m-0">Numar clienti</span>

                    <h4 class="mb-0 counter">{{ number_format($statistici_prod['clienti'])  }}</h4>
                    <i class="icon-bg" data-feather="user-plus"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="col-xl-6 xl-100 box-col-12">
        <div class="widget-joins card widget-arrow">
            <div class="row">
                <div class="col-sm-6 pe-0">
                    <div class="media border-after-xs">
                        <div class="align-self-center me-3 text-start">
                            <span class="mb-1">Vizitatori</span>
                            <h5 class="mb-0">Azi</h5>
                        </div>
                        <div class="media-body align-self-center">
                            <i class="font-primary" data-feather="arrow-up"></i></div>
                        <div class="media-body">
                            <h5 class="mb-0" align="right">
                                        <span class="counter">
                                        </span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ps-0">
                    <div class="media">
                        <div class="align-self-center me-3 text-start">
                            <span class="mb-1">Vizitatori</span>
                            <h5 class="mb-0">Ieri </h5>
                        </div>
                        <div class="media-body align-self-center">
                            <i class="font-primary" data-feather="arrow-up"></i></div>

                        <div class="media-body ps-2">
                            <h5 class="mb-0"><span class="counter">
                                    </span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 pe-0">
                    <div class="media border-after-xs">
                        <div class="align-self-center me-3 text-start"><span class="mb-1">Vizitatori</span>
                            <h5 class="mb-0">Luna curenta</h5>
                        </div>

                        <div class="media-body align-self-center">
                            <i class="font-primary" data-feather="arrow-up"></i></div>

                        <div class="media-body">
                            <h5 class="mb-0" align="right">
                                        <span class="counter"></span></h5>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ps-0">
                    <div class="media">
                        <div class="align-self-center me-3 text-start"><span class="mb-1">Vizitatori</span>
                            <h5 class="mb-0">Luna trecuta</h5>
                        </div>

                        <div class="media-body align-self-center ps-3">
                            <i class="font-primary" data-feather="arrow-up"></i></div>
                        <div class="media-body ps-2">
                            <h5 class="mb-0" align="right"><span class="counter"></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="col-xl-6 xl-100 box-col-12">
        <div class="widget-joins card">
            <div class="row">
                <div class="col-sm-6 pe-0">
                    <div class="media border-after-xs">
                        <div class="align-self-center me-3">Vizitatori<br>zilnic</div>
                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>
                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ps-0">
                    <div class="media">
                        <div class="align-self-center me-3">Vizitatori<br>Ieri</div>
                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>
                    </div>
                </div>

                <div class='col-sm-6 ps-0'>
                    <div class='media'>
                        <div class='align-self-center me-3'>Vizitatori<br>zilnic</div>
                        <div class='media-body details ps-3'><span class='mb-1'></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class="media-body details ps-3">
                            <span class="mb-1"></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class="media-body details ps-3">
                            <span class="mb-1"></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 pe-0">
                    <div class="media border-after-xs">
                        <div class="align-self-center me-3">Vizitatori<br>zilnic</div>
                        <div class="media-body details ps-3">
                            <span class="mb-1">    </span>

                            <h5 class="mb-0 counter"></h5>
                        </div>

                        <div class="media-body details ps-3">
                            <span class="mb-1"></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>



                        <div class="media-body details ps-3">
                            <span class="mb-1"></span>
                            <h5 class="mb-0 counter"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-12'>
            <div class='card'>
                <div class="card-body">
                    <div id="demo2">
                        <div class="kanban-container" style="width: 1290px;">
                            <div data-id="_todo" data-order="1" class="kanban-board" style="width: 400px; margin-left: 15px; margin-right: 15px;">
                                <header class="kanban-board-header bg-info">
                                    <div class="kanban-title-board">
                                        <ul class="list-unstyled card-option" style="float:right;">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                        </ul>
                                        Comenzi (ultimele 3 zile)
                                    </div>
                                </header>

                                <main class="kanban-drag">
                                    <div class="kanban-item"    style="background: transparent;"  >
                                        <h6>   <p style='color:#a927f9;'>Numar comenzi:
                                                <strong>|</strong>
                                                Valoare comenzi:                        lei
                                            </p>
                                        </h6>
                                    </div>

                                    <div class="kanban-item"   style="background: transparent;" >

                                        <h6>
                                            <p style='color:#a927f9;'>Numar comenzi:
                                                <strong>|</strong>
                                                Valoare comenzi:       lei

                                            </p>
                                        </h6>
                                    </div>



                                    <div class="kanban-item"   style="background: transparent;" >

                                        <h6>     <p style="color:#a927f9;">Numar comenzi:
                                                <strong>|</strong>
                                                Valoare comenzi:                           lei
                                            </p>
                                        </h6>
                                    </div>
                                </main>

                                <footer></footer>
                            </div>

                            <div data-id="_working" data-order="2" class="kanban-board" style="width: 400px; margin-left: 15px; margin-right: 15px;">

                                <header class="kanban-board-header bg-warning">
                                    <div class="kanban-title-board">
                                        <ul class="list-unstyled card-option" style="float:right;">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                        </ul>
                                        Comenzi (ultimele 3 luni)
                                    </div>

                                </header>

                                <main class="kanban-drag">
                                    <div class="kanban-item" style="background: transparent;" >
                                        <h6>
                                            <p style='color:#f8d62b;'>Numar comenzi:

                                                <strong>|</strong>

                                                Valoare comenzi:
                                                lei
                                            </p></h6>
                                    </div>



                                    <div class="kanban-item"    style="background: transparent;" >

                                        <h6>
                                            <p style='color:#f8d62b;'>Numar comenzi:

                                                <strong>|</strong>

                                                Valoare comenzi: lei
                                            </p>
                                        </h6>
                                    </div>

                                    <div class="kanban-item"    style="background: transparent;" >
                                        <h6>
                                            <p style='color:#f8d62b;'>Numar comenzi:
                                                <strong>|</strong>
                                                Valoare comenzi:
                                                lei
                                            </p>
                                        </h6>
                                    </div>
                                </main>

                                <footer></footer>

                            </div>



                            <div data-id="_done" data-order="3" class="kanban-board" style="width: 400px; margin-left: 15px; margin-right: 15px;">

                                <header class="kanban-board-header bg-success">

                                    <div class="kanban-title-board">
                                        <ul class="list-unstyled card-option" style="float:right;">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                        </ul>
                                        Top comenzi ()
                                    </div>

                                </header>



                                <main class="kanban-drag">
                                      <div class='kanban-item'      style="background: transparent;" >
                                          <h6>
                                            <p style='color:#51bb25;'>
                                                Valoare comanda:
                                                lei
                                            </p>
                                        </h6>
                                    </div>
                                </main>

                                <footer></footer>

                            </div>

                        </div>

                    </div>



                </div>

            </div></div>
    </div>
</div>

</div>
@endsection
@section('jsdif')
    <script src="{{ asset('assets/js/general-widget.js') }}" defer></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}" defer></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}" defer></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}" defer></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}" defer></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}" defer></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}" defer></script>
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}" defer></script>
<script src="{{ asset('assets/js/general-widget.js') }}" defer></script>
<script src="{{ asset('assets/js/height-equal.js') }}" defer></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}" defer></script>
    @endsection