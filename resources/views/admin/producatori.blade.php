@extends('layout.master')
@section('cssdif')
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">

    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
            type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <script  src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs"></script>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-md-12 project-list wow BounceInUp" style="visibility: visible; animation-name: bounceInUp;">

        <div class="card">

            <div class="row">

                <h5> Producatori</h5>

                <div class="col-md-6 ">

                    <ul class="nav nav-tabs border-tab">

                        <li class="nav-item" style="margin-top:7px;">Nr. producatori: 14,659
                            &nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;

                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <button class="btn btn-primary-gradien" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Adauga client" onclick="jQuery('#add').toggle(700)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Adauga

                    </button>

                </div>

            </div>

        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive product-table">
            <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                <table class="display dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"  style="width: 50px;">Nr</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"  style="width: 300px;">User</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"  style="width: 600px;">Nume</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" style="width: 100px;">Telefon</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"  style="width: 200px;">Optiuni</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($producatori as $producator)
                    <tr>
                        <td> {{ $loop->index+1 }}</td>
                        <td> d</td>
                        <td class="sorting_1">{{ $producator->nume }}</td>
                        <td>f</td>
                        <td>d</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>

{{--     test--}}
    <div id="appx">
{{--        {{ test }}--}}
    </div>

 </div>

</div>
@endsection
@section('jsdif')

    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}" ></script>

    <script src="{{ asset('assets/js/product-list-custom.js') }}" ></script>

@endsection