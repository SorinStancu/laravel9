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
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">

<div class="col-sm-6 col-xl-3 col-lg-6">

    <div class="card o-hidden">

        <div class="bg-primary b-r-4 card-body" style="padding:20px ">

            <div class="media static-top-widget">

                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>

                <div class="media-body"><span class="m-0">Comenzi luna curenta
{{--                        @yield($session('numepag'))--}}
                    </span>

                    <h4 class="mb-0 counter">

                      <? /*$datac = date("Y") . date("m") . '01';

                      $datac2 = date('Y') . date('m') . date("t");


                      $classcomenzi->comenzi($datac, $datac2);

                      echo number_format($classcomenzi->nrcomenzi);*/ ?>

                    </h4><i class="icon-bg" data-feather="shopping-bag"></i>

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

                <div class="media-body"><span class="m-0">Comenzi luna trecuta</span>

                  <? /*$classdata->lunaanterioara('', 1);

                  $datacon = $classdata->luna . '-01';

                  $dataconbis = $classdata->luna . '-' . date("t");

                  $classcomenzi->comenzi($datacon, $dataconbis);*/ ?>

                    <h4 class="mb-0 counter">

                      <?//= number_format($classcomenzi->nrcomenzi); ?>

                    </h4><i class="icon-bg" data-feather="shopping-bag"></i>

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

                <div class="media-body"><span class="m-0">Total produse</span>

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

                <div class="media-body"><span class="m-0">Numar clienti</span>

                    <h4 class="mb-0 counter">{{ number_format($statistici_prod['clienti'])  }}</h4>
                    <i class="icon-bg"

                       data-feather="user-plus"></i>

                </div>

            </div>

        </div>

    </div>

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