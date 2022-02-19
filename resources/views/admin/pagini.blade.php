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

        // background: '#a4ef8b',

        // color: '#fafafa',

        timerProgressBar:true,

        didOpen: (toast) => {

            toast.addEventListener('mouseenter', Swal.stopTimer)

            toast.addEventListener('mouseleave', Swal.resumeTimer)

        }

    });



    window.addEventListener('alert',({detail:{type,message}})=>{

        Toast.fire({

            icon:type,

            title:message

        })

    })

</script>

@endsection

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12">

            <div class="card">

            <div class="card-header">

                <h5> {{ $page['name'] }}</h5>

            </div>

    <livewire:paginiupdate />

 </div></div></div></div>

@endsection

@section('jsdif')

{{--    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}" defer></script>--}}

{{--    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}" defer></script>--}}

{{--    <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}" defer></script>--}}

{{--    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}" defer></script>--}}

@endsection