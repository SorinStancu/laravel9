@extends('layout.master')
@section('title') Clienti  @endsection
@section('cssdif')
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"' type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"' type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
    <style>
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: #E8F4FE;
        }

    </style>
    {@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-md-12 project-list wow BounceInUp" style="visibility: visible; animation-name: bounceInUp;">
            <div class="card">
                <div class="row">
                    <h5> Clienti</h5>
                    <div class="col-md-6 ">
                        <ul class="nav nav-tabs border-tab">
                            <li class="nav-item" style="margin-top:7px;">Nr. clienti: 14,659 &nbsp;&nbsp;<strong>|</strong>&nbsp;nbsp;

                            </li>
                            <li class="nav-item" style="margin-top:7px;">Nr. clienti cu cont: 5,206 &nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;
                            </li>
                            <li class="nav-item" style="margin-top:7px;">Nr. clienti fara cont: 1,968</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary-gradien" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Adauga client" onclick="jQuery('#add').toggle(700)"><i class="icofont icofont-plus"></i> Adauga
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="basicScenario" class="jsgrid" style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class='table table-bordered table-striped table-hover ' id="clienti">
                        <thead>
                        <tr class="jsgrid-header-row">
                            <th>Nr.</th>
                            <th>User</th>
                            <th>Nume</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Adaugat</th>
                            <th>Optiuni</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users->chunk(1000) as $chunk)
                            @foreach ($chunk as $user)
                                <tr class="jsgrid-cell wow bounceInDown">
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $user->user }}</td>
                                    <td>{{ $user->nume }}</td>
                                    <td>{{ $user->tel }}</td>
                                    <td>{{ $user->mail }}</td>
                                    <td>{{ $user->adaugat }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
@section('jsdif')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#clienti').DataTable({
                "lengthMenu": [[50, 100, 500, -1], [50, 100, 500, "All"]],
                dom: 'Bfrtip',

                buttons: [
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [1, 2, 3, 4]

                        },
                        title: 'Clienti'
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [1, 2, 3, 4]
                        },
                        title: 'Clienti'
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [1, 2, 3, 4]
                        },
                        title: 'Clienti'
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [1, 2, 3, 4]
                        },
                        title: 'Clienti'
                    },

                ]
            });
        });

        $(document).ready(function () {
            var oTable = $('#clienti').dataTable();
            oTable.fnSort([[0, 'asc']]);

        });

    </script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    {{--<script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}" ></script>--}}
    {{--<script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}" ></script>--}}
    {{--<script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}" ></script>--}}
    {{--<script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}" ></script>--}}
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
@endsection