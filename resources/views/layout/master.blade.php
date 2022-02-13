@include('layout.head')

@include('layout.header')

@include('layout.menu')

<div class="page-body">

@include('layout.breadcrumb')

@yield('content')

</div>

@include('layout.footer')