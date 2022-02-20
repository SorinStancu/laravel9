@extends('layout.master')

@section('cssdif')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

        const Toast = Swal.mixin({

            toast: true,

            position: 'top',

            showConfirmButton: false,

            showCloseButton: true,

            timer: 5000,

            timerProgressBar: true,

            didOpen: (toast) => {

                toast.addEventListener('mouseenter', Swal.stopTimer)

                toast.addEventListener('mouseleave', Swal.resumeTimer)

            }

        });


        window.addEventListener('alert', ({detail: {type, message}}) => {

            Toast.fire({

                icon: type,

                title: message

            })

        })

    </script>

    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'

            type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}"
    >

    <style>

        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {

            background-color: #E8F4FE;

        }

    </style>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="//unpkg.com/alpinejs"></script>

@endsection

@section('cssdifno')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">

@endsection

@section('content')

    <div class="container-fluid">

        <div class='row'>

            <div class="col-md-12 project-list wow BounceInUp">

                <div class="card">

                    <div class="row">

                        <div class="col-md-6 ">

                            <h5>

                                <div class="nav-right col-6 pull-right right-header p-0" style="float:left;







                                width:50px;">

                                    <ul class="nav-menus">

                                        <li class="language-nav">

                                            <div class="translate_wrapper">

                                                <div class="lang">

                                                    <i class="flag-icon flag-icon-ro"></i>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

                                Categorii produse

                            </h5>

                            <ul class="nav nav-tabs border-tab">

                                <li class="nav-item" style="margin-top:7px;">

                                    Nr. categorii: {{--{{ $nrcat }}--}}

                                    <strong>|</strong> Nr. sub-categorii:

                                    <strong>|</strong> Nr. sub-sub-categorii:

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <livewire:categories/>

@endsection

@section('jsdif')

    {{-- <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}" ></script>--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"

            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"

            crossorigin="anonymous"
    ></script>

@endsection